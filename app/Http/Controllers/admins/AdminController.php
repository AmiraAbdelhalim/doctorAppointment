<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
        if(Auth::user()->is_admin==1){
            return view('adminlte.dashboard');
        }
        
        
    }
}
