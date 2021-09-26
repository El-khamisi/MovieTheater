<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class movies extends Controller
{
    /*
    *Indexing Function to Handling Home Page Route
    */
    function index()
    {
        
        $records = DB::table('movies')->get();
        
        return view('welcome', ['records'=>$records]);
    }

    /*
    *Function to handling addMovie Route
    */
    function addMovie(Request $request)
    {
        
        if(is_null($request->input('movie_title')) && $request->hasFile('thumb') && $request->thumb->isValid()){
            
            $imgName = $request->input('movie_title').'.'.$request->thumb->extension();
            $path = $request->thumb->storeAs('images', $imgName);

            DB::table('movies')->insert([
                'movie_title' => $request->input('movie_title'),
                'descriptio' => $request->input('descriptio'),
                'filepath' => $path,
                'rating' =>$request->rating
            ]);
            return back()->with('Success', 'login successfully');;
        }else {
            echo "<script>
            alert('The new movie has some missing data');
            </script>";
        }
    }

    /*
    *Function to Handling delete-Movie Route
    */
    function dltMovie(Request $request){

        DB::table('movies')->where('movie_title', $request->input('movie_title'))->delete();
        return back()->with('Success', 'login successfully');
    }
}
