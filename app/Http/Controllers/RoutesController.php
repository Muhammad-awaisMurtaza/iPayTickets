<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use App\Models\TicketNotification;
class RoutesController extends Controller
{
    public function index(){
        if(session('userName')==null){return view('Index',['signin'=>true]);}
        $data = $this->sendTicketData();
        $this->sendNotificationMail(session('userName'));
        return view('Index',['userName'=>session('userName'),'user'=>true,'data'=>$data]);
    }
    public function home(){
        if(session('userName')==null){return view('Index',['signin'=>true]);}
        $data = $this->sendTicketData();
        $this->sendNotificationMail(session('userName'));
        return view('HomePAge',['userName'=>session('userName'),'user'=>true,'data'=>$data]);
    }
    public function reminder(){
        if(session('userName')==null){return view('Index',['signin'=>true]);}
        $data = $this->sendTicketData();
        $category = ['parking','insurance','speedlimit','at1','at2'];
        $notify = $this->getNotification(session('userName'));
        return view('reminder',['userName'=>session('userName'),'user'=>true,'data'=>$data,'notify'=>$notify,'category'=>$category]);
    }
    public function payTickets(){
        if(session('userName')==null){return view('Index',['signin'=>true]);}
        $data = $this->sendTicketData();
        return view('paytickets',['userName'=>session('userName'),'user'=>true,'data'=>$data,'ticket'=>"0"]);
    }
    public function faq(){
        if(session('userName')==null){return view('FAQ',['signin'=>true]);}
        return view('FAQ',['userName'=>session('userName')]);
    }
    public function login(){
        if(session('userName')!=null){return view('Index',['userName'=>session('userName')]);}
        return view('login',['login'=>true]);
    }
    public function signup() {
        if(session('userName')!=null){return view('Index',['userName'=>session('userName')]);}
        return view('login',['signup'=>true]);
    }

    public function payNow(Request $request){
        if(session('userName')==null){return view('Index',['signin'=>true]);}
        $data = $this->sendTicketData();
        return view('paytickets',['userName'=>session('userName'),'user'=>true,'data'=>$data,'ticket'=>$request['ticketNumber']]);
    }

    public function sendTicketData (){

        $data = [];
        $item = [];
        $ticket = Ticket::where('userName', '=', session('userName'))->get();
        $notification = TicketNotification::where('userName', '=', session('userName'))->get();
        foreach($ticket as $t){
            /*if($t->amount_due==0){
                continue;
            }*/
            $mail=true;
            $notif = true;
            foreach ($notification as $n){
                if($t->id==$n->id){
                    $mail = $n->email;
                    $notif = $n->notification;
                }
            }
            $item['id'] = $t->id;
            $item['mail'] = $mail;
            $item['notification']=$notif;
            $item['ticketNumber'] = $t->summons_number;
            $item['serialNumber'] = $t->summons_number;
            $item['startDate'] = $t->issue_date;
            $item['cost'] = $t->fine_amount;
            $item['violation'] = $t->violation;
            array_push($data,$item);
        }
        //dd($data);
        return $data;
    }

    public function getNotification($userName){
        $data = Notification::where('userName', '=', $userName)->get();
        foreach ($data as $item){
            $notify[$item['ticketType']] = ['mail'=>$item['email'],'notify'=>$item['notification']];
        }
        return $notify;
    }

    public function sendNotificationMail($userName){

    }

}
