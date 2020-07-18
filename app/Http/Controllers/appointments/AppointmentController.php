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
        $appointments=Appointment::create($request->all());
        $user=User::find($request->user_id);
        $doctor=Doctor::find($request->doctor_id);
        $appointment=$appointments->appoint;
        $details=[
            'body'=>"your appointment will be at $appointment"
        ];
        $user->notify(new \App\Notifications\AppointmentChecker($details));
        $doctor->notify(new \App\Notifications\AppointmentChecker($details));
        return redirect()->route('appointments.index');
    }
}
