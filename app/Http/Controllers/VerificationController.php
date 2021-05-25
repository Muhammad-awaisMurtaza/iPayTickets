<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function index ($code,$email) {

        $user = User::where('email', '=', $email)->first();
        if($user==null || $user->token!=$code)
            return "Error in verification";
        else if($user!=null && $user->token==$code){
            $user->isVerified = true;
            $user->token="";
            return view('login',['login'=>true,'msg'=>'Verified Successfully...']);
        }
    }
}
