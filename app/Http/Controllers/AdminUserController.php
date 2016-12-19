<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminUserController extends Controller
{
    //
    public function login(Request $request){


        $email=$request->email;
        $password=$request->password;


        $input_db=Admin::all();
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
