<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        //return $data;
        array_shift($data);
        $key = array_keys($data);
        $i=0;
        foreach($data as $d){
            $k = $key[$i];
            $res = explode("-",$k);
            $ticket = Notification::where('userName', '=', session('userName'))->where('ticketType', '=', $res[0])->first();
            if($res[1]=="Mail"){
                //return $ticket;
                $ticket->email=$d;
            }
            else if( $res[1]=="Notify"){
                $ticket->notification=$d;
            }
            $ticket->save();
            $i++;
        }
        return redirect()->route('reminder');
    }
}
