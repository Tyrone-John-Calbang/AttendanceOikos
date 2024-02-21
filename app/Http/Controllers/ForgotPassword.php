<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CodeVerificationEmail;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ForgotPassword extends Controller
{
    public function submit(Request $request) {
        $email=$request->input("email"); 
        //TODO - write a variable called $user that would retreive the user email to check existence
        $user=User::where('email',$email)->first();
        //TODO - create a condition that checks if $user is not empty then insert values inside Model CodeVerificationEmail with the email and a random generated number from 100000-999999. After that make a Mail instance to be sent onto the given email then create a return json response with success=>true otherwise return json response with success=>false
        if($user){
            $code = rand(10000 , 99999);
            VerificationCode::create([
                "email" => $email,
                "code" => $code
            ]);
        Mail::to("kafelnikovdelarosa@yahoo.com")->send(new CodeVerificationEmail($code));
        return response()->json(["success"=> true]);
        }
        else{
            return response()->json(["failure"=> false]);
        }

    }
    public function verifyCode(Request $request){
        $code= $request->input("verificationCode");
        //TODO - write a variable called $codeData that would retreive the verification code table
        $codeData=VerificationCode::where('code',$code) -> first();
        //TODO - check if the variable $codeData is not empty then return a json response success=>true otherwise return a json response success=>false
        if($codeData){
        return response()->json(["success"=>true]);
        }
        else{
            return response()->json(["failure"=> false]);
        }
    }
}   
