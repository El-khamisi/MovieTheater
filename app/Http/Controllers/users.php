<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class users extends Controller
{
    //index function to handle get request
    function index(){
        return view('layouts/auth');
    }

    /*login funciton checks username and password 
    * to give a permission to delete movies
    */
    function login(Request $request){

        if(is_null($request->username) || is_null($request->password)){
            return back()->with('error', "All field are required...!!!");
        }
        
        $rec = DB::table('users')->where('username', $request->username)->get();
        
        
        if($rec->isEmpty() ||  $rec[0]->password != $request->password){
            return back()->with('error', "User NOT FOUND.");
        }

        return redirect('/')->with('Success', 'login successfully');
    }


    /*
    *Signup function to deal with new Useres
    */
    function signup(Request $request){

        if(is_null($request->username) || is_null($request->password)){
            return back()->with('error', "All field are required...!!!");
        }

        DB::table('users')->insert([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ]);

        return back()->with('Success', "User has been registered successfully Now you can SignIn");
    }
}
