<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Notifications\Notifiable;

class SignUpController extends Controller
{
    public function index(Request $request){

        $userName = $request['userName'];
        $email = $request['email'];
        $password = $request['password'];
        $rPassword = $request['rPassword'];
        $plate = $request['licencePlate'];
        $state = $request['state'];

        if(strlen($password)<8)
            return view('login',['signup'=>true,'e_msg'=>'Password must be 8 character long...']);
        if($password!=$rPassword)
            return view('login',['signup'=>true,'e_msg'=>'Password misMatch...']);
        $user = User::where('email', '=', $email)->first();
        if($user!=null)
            return view('login',['signup'=>true,'e_msg'=>'Email Already Exist...']);
        $user = User::where('userName', '=', $userName)->first();
        if($user!=null)
            return view('login',['signup'=>true,'e_msg'=>'User Name Already Exist...']);

        $user = new User();
        $user->userName = $userName;
        $user->email = $email;
        $user->password = $password;
        $code = rand(100000,999999);
        $user->token = $code;
        $user->licencePlate = $plate;
        $user->state = $state;
        $user->isVerified = false;
        $user->save();

        return $this->sendMail($email,$code);
    }
    public function sendMail($email,$code)
    {
        Mail::to($email)->send(new \App\Mail\verification($code,$email));
        $this->notification($email);
        return view('login',['login'=>true,'msg'=>'Verfiy by Mail to proceed...']);
    }

    public function notification($email)
    {
        $data = ['parking','insurance','speedlimit','at1','at2'];

        $user = User::where('email', '=', $email)->first();
        if($user!=null){
            foreach($data as $d){
                $notify = new Notification();
                $notify->userName = $user->userName;
                $notify->ticketType = $d;
                $notify->email = true;
                $notify->notification = true;
                $notify->save();
            }
        }
    }

}
