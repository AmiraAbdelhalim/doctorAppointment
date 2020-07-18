@extends('adminlte.dashboard')
@section('title','Appointments')
@section('section_title','Appointments')
@section('content')
<a href="{{route('appointments.create')}}" class="btn btn-success">Make an Appointment </a>
<hr>
<div class="container my-3">
    
    <br>
 
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Status</th>
                <th>Appointment<th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointments ?? '' as $appointment)
                <tr>
                
                  <td>{{ $appointment->id }}</td>
                  <td>{{ $appointment->user_id}}</td>
                  <td>{{ $appointment->doctor_id }}</td>
                  <td>{{ $appointment->status}}</td>
                  <td>{{ $appointment->appoint}}</td>

                  </tr>
              @endforeach
        </tbody>
        
    </table>
</div>

</body>
@endsection