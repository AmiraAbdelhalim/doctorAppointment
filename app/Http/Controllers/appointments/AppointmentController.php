<?php

namespace App\Http\Controllers\appointments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Appointment;
use App\User;
use App\Doctor;

class AppointmentController extends Controller
{
    //
    public function index(){
        $appointments= Appointment::all();
        return view('appointments.index',[
            'appointments'=>$appointments
        ]);
    }

    public function create(){

        $users=User::all()->where('is_admin',0);
        $doctors=Doctor::all();
        return view('appointments.create',[
            'users'=>$users,
            'doctors'=>$doctors
        ]);
    }

    public function store(Request $request){
        // dd($request);
        Appointment::create($request->all());
        return redirect()->route('appointments.index');
    }
}
