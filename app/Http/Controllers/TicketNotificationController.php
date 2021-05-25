<?php

namespace App\Http\Controllers;

use App\Models\TicketNotification;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class TicketNotificationController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        array_shift($data);
        $key = array_keys($data);
        $i=0;
        foreach($data as $d){
            $k = $key[$i];
            $res = explode("-",$k);
            $ticket =TicketNotification::where('userName', '=', session('userName'))->where('ticket_id', '=', $res[0])->first();
            if($res[1]=="Mail"){
                $ticket->email=$d;
            }
            else if( $res[1]=="Notification"){
                $ticket->notification=$d;
            }
            $ticket->save();
            $i++;
        }
        return redirect()->route('reminder');
    }
}
