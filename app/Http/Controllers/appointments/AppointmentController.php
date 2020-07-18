<?php

namespace App\Http\Controllers\appointments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Appointment;
use App\User;
use App\Doctor;

class AppointmentController extends Controller
{
    //
    public function index(){
        
        if (Auth::user()->is_admin == 1){
            $appointments= Appointment::all();
            // dd($appointments);
            return view('appointments.index',[
                'appointments'=>$appointments
            ]);
            
        }else{
            $appointments= Appointment::all()->where('user_id',Auth::user()->id);
            // dd($appointments);
            return view('home',[
                'appointmentss'=> $appointments
            ]);
        }
        
        
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

    public function update(Request $request, $id){
    
        Appointment::find($id)->update([
            'status'=>'not approved'
        ]);
        return redirect()->route('appointments.index');
    }

    public function destroy($id)
    {
        
        $appointment_id = Appointment::find($id);
        $appointment_id->delete();
        return redirect()->route('appointments.index');
    }
}
