<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PainList;
use App\User;
class UserController extends Controller
{
    //
    public function index(){
        // if (Auth::user()->is_admin != 1 ){
            $users=User::all()->where('is_admin',0)->where('first_name',!null);
            return view('users.index', [
                'users'=>$users
            ]);
        // }
    }

    public function edit(Request $request){
        $user=Auth::user();
        $pain_lists=PainList::all();
        return view('users.edit',[
            'user'=> $user,
            'pain_lists'=> $pain_lists
        ]);

    }
    public function update(Request $request)
    {
        // dd($request);
        $user=Auth::user();
        $user->update($request->all());
       
        return redirect()->route('appointments.index');


    }
}
