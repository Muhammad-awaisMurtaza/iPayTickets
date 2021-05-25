<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Models\Ticket;
use App\Models\TicketNotification;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Models\User;
use App\Models\Notification;

class TicketController extends Controller
{
    public function searchTicket(Request $request)
    {
        $plate = $request['licencePlate'];
        $state = $request['state'];
        $isOk=false;
        $dollar = 0;
        $arr = [];
        $client = new Client();
        $result = $client->get('https://data.cityofnewyork.us/resource/nc67-uf89.json');
        $data = json_decode($result->getBody());
        //dd($data);
        foreach($data as $item){
            if($item->plate == $plate && $item->state == $state){
                $isOk=true;
                $dollar += $item->fine_amount;
                array_push($arr,$item->plate);
            }
        }
        if($isOk==true)
            return view('pay',['signin'=>true,'user'=>true,'data'=>$arr]);
        else
            return view('pay',['signin'=>true]);

    }

    public function add($i){
        if(session('userName')==null){return view('Index',['signin'=>true]);}
        return $this->addTicketData($i);
        }

    public function addTicketData($i){

        $user = User::where('userName', '=', session('userName'))->first();
        $client = new Client();
        $result = $client->get('https://data.cityofnewyork.us/resource/nc67-uf89.json');
        $data = json_decode($result->getBody());
        $category = ['parking','insurance','speedlimit','at1','at2'];
        foreach($data as $item){
            if($i==0){break;}

                $code = rand(0,4);
                $ticket = new Ticket();
                $ticket->userName = $user->userName;
                $ticket->plate = $user->licencePlate ;
                $ticket->state = $user->state ;
                $ticket->license_type = $item->license_type ;
                $ticket->summons_number = $item->summons_number;
                $ticket->issue_date = $item->issue_date ;
                $ticket->violation_time = $item->violation_time ;
                $ticket->violation = $category[$code];
                $ticket->fine_amount = $item->fine_amount ;
                $ticket->penalty_amount = $item->penalty_amount ;
                $ticket->interest_amount = $item->interest_amount ;
                $ticket->reduction_amount = $item->reduction_amount;
                $ticket->payment_amount = $item->payment_amount ;
                $ticket->amount_due = $item->amount_due ;
                $ticket->precinct = $item->precinct ;
                $ticket->county = $item->county ;
                $ticket->issuing_agency = $item->issuing_agency ;
                //dd($item->summons_image);
                $ticket->summons_image = $item->summons_image->url ;
                $ticket->save();

                $ticket = Notification::where('userName', '=', session('userName'))->where('ticketType', '=', $category[$code])->first();
                if($ticket->email==true){
                    Mail::to($user->email)->send(new \App\Mail\NotificationMail($item->fine_amount,$item->issue_date,$category[$code]));
                }
                $ticketNotification = new TicketNotification();
                $ticketNotification->userName = $user->userName;
                $ticketNotification->ticket_id = $ticket->id;
                $ticketNotification->email = true;
                $ticketNotification->notification = true;
                $ticketNotification->save();

                $i--;
        }

        return redirect()->route('home');
    }
}
