@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <h1>Welcome To Doctor Appointment Website</h1>
               <hr>
               <br>
               @if(!auth()->user()->specialization_id)
               <a href="{{route('user.edit')}}" class="btn btn-primary" >Fill Reservation Form</a>
               @endif
               <hr>

 
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Status</th>
                <th>Appointment<th>
                <th>Action<th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointmentss as $appointment)
                <tr>
                
                  <td>{{ $appointment->id }}</td>
                  <td>{{ $appointment->user_id}}</td>
                  <td>{{ $appointment->doctor_id }}</td>
                  <td>{{ $appointment->status}}</td>
                  <td>{{ $appointment->appoint}}</td>
                  <td><form method="POST" action="{{route('appointment.update',['id'=>$appointment->id])}}">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success">Approve</button>
                </form></td>
                  </tr>
              @endforeach
        </tbody>
        
    </table>

               
               

            </div>
        </div>
    </div>
</div>
@endsection
