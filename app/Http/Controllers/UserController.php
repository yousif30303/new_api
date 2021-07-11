<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function Login(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $user1 = User::where('email', '=', $req['email'])->first();
        if (empty($user1)) {
            return response('Invalid User Details',400);
        }
        else{
            if($user1->password !== $req['password']){
                return response('Invalid User Details',400);
            }
            
            else{
                $user = User::where('email','=',$req['email'])->get();

                $token = $user[0]->createToken('thismytoken')->plainTextToken;

                User::where('email','=',$req['email'])->update(['token'=>$token]);

                $response = [
                    'message'=>'Login Successfully',
                    'token'=>$token
                ];

               

                return response($response,200);
            }
        }

        
    }


}
