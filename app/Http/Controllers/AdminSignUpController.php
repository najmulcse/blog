<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminSignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function blank(){

        echo "najmul";
        return view('admin.adminLogin.blank');
    }



    public function index()
    {

        return view('admin.adminLogin.login');
    }
//    public function login()
//    {
//        //
//        return view('admin.adminLogin.login');
//    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('admin.adminLogin.signup');

    }
//    public function signup(){
//        return view('admin.adminLogin.signup');
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $input=$request->all();
        $password=$request->password;
        $con_password=$request->confirmed_password;
        if($password==$con_password)
        {
            $password=bcrypt($password);
            $input['password']=$password;
            Admin::create($input);
            return redirect('admin/');
        }
        else{
            echo "password miss match";
        }

       //redirect('admin/');
        //return view('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $email=$request->email;
        $password=$request->password;


        $input_db=Admin::all();
        $email_db=$input_db['email'];
        $password_db=$input_db['password'];
        if($email_db==email){

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
       // return view('admin.adminLogin.blank');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
