<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminUserController extends Controller
{
    //
    public function signup(Request $request){

        $input=$request->all();
        $password=$request->password;
        $con_password=$request->confirmed_password;
        if($password==$con_password)
        {
            $password=bcrypt($password);
            $input['password']=$password;
            User::create($input);
            echo $input;
           return redirect('admin/');
        }
        else{
            echo "password miss match";
        }
    }
    public function login(Request $request){


        $email=$request->email;
        $password=$request->password;


        $input_db=User::all();
        $email_db=$input_db['email'];
        $password_db=$input_db['password'];
        if($email_db==$email){

            if($password==$password_db){
                return redirect('admin/');
            }
            else{
                echo "Your password is not correct";
            }

        }
        else{
            echo "Email doesn't exists";
        }
    }
}
