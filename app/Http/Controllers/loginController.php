<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;



class loginController extends Controller
{
    public function login(Request $req){
        $username  = $req->input('username');
        $password = $req->input('password');


            $checkLogin = DB::table('admin')->where(['username'=>$username, 'password'=>$password])->get();
            if(count($checkLogin) > 0){
                return redirect('/admin')->with('info','Login as '.$username.' Successfully');
            } else {
                return view('login');
            }

    }
}

