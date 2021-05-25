<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Models\TicketNotification;

class LoginController extends Controller
{
    public function index(Request $request){
        $userName = $request['userName'];
        $password = $request['password'];

        $user = User::where('userName', '=', $userName)->first();
        if($user==null || $user->password != $password)
            return view('login',['login'=>true,'e_msg'=>'Invalid UserName or Password...']);
        if($user!=null & $user->password==$password){
            session(['userName' => $userName]);
            //$this->updateDataBase($userName);
            return redirect()->route('home');
        }
    }

    public function logout(){
        session()->forget('userName');
        return view('Index',['signin'=>true]);
    }

    public function updateDataBase($userName)
    {
        $user = User::where('userName', '=', $userName)->first();
        $client = new Client();
        $result = $client->get('https://data.cityofnewyork.us/resource/nc67-uf89.json');
        $data = json_decode($result->getBody());
       // dd($data);
        foreach($data as $item){
            if($item->plate == $user->licencePlate && $item->state == $user->state){
                $ticket = new Ticket();
                $ticket->userName = $userName;
                $ticket->plate = $item->plate ;
                $ticket->state = $item->state ;
                $ticket->license_type = $item->license_type ;
                $ticket->summons_number = $item->summons_number;
                $ticket->issue_date = $item->issue_date ;
                $ticket->violation_time = $item->violation_time ;
                $ticket->violation = $item->violation ;
                $ticket->fine_amount = $item->fine_amount ;
                $ticket->penalty_amount = $item->penalty_amount ;
                $ticket->interest_amount = $item->interest_amount ;
                $ticket->reduction_amount = $item->reduction_amount;
                $ticket->payment_amount = $item->payment_amount ;
                $ticket->amount_due = $item->amount_due ;
                $ticket->precinct = $item->precinct ;
                $ticket->county = $item->county ;
                $ticket->issuing_agency = $item->issuing_agency ;
                $ticket->summons_image = $item->summons_image->url ;
                $ticket->save();

                $ticketNotification = new TicketNotification();
                $ticketNotification->userName = $user->userName;
                $ticketNotification->ticket_id = $ticket->id;
                $ticketNotification->email = true;
                $ticketNotification->notification = true;
                $ticketNotification->save();
            }
        }
    }
}
