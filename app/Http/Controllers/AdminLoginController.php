<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        $password=bcrypt($password);


       echo $input_db=Admin::all();
       // echo  $email_db=$input_db['email'];;


        //
//        $input=$request->all();
//       echo  $email=$input['email'];
//        echo $password=$input['password'];
//        echo $password=$request->password;
//        //echo $email=$request->email;
//            $email="najmul@gmail.com";
//            $password=bcrypt($password);
//
//        $input_db=Admin::all();
//        $email_db=$input_db['email'];
//        $password_db=$input_db['password'];
//        if($email_db==$email){
//
//            if($password==$password_db){
//                return redirect('admin/');
//            }
//            else{
//                echo "Your password is not correct";
//            }
//
//        }
//        else{
//            echo "Email doesn't exists";
//
//
//        }
   return view('admin.AdminLogin.blank');
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
