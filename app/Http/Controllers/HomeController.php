<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function Redirect(){

        if(Auth::id()){
                if(Auth::User() ->role=='user'){
                    return view('user.home');
                }

                elseif(Auth::user() ->role=='doctor'){
                    return view('doctor.home');
                }

                else{
                    return view('admin.home');
                }

        }

        else {
            return redirect() ->back();        }

    }//Fin Fonction redirect

    public function Index(){
        return view('user.home');
    }
}
