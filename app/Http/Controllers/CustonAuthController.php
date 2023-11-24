<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers; 


class CustonAuthController extends Controller
{
    use AuthenticatesUsers;

    public function redirecTo(){
        $role = user_role::where('userid', Auth::user()->id)->first();
        dd($role);
        if ($role->roleid==0){
            return '/admin';
        }elseif ($role->roleid==2){
            return '/user';
        }
    }
     public function index()
    {
        return view('Auth.login');
    }  
       

}
