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
                </form>
                <!-- form for delete -->
                <form id="delete{{$appointment->id}}" method="POST" action="{{route('appointments.destroy', ['id'=>$appointment->id])}}">
                @csrf
                {{method_field("DELETE")}}
                      <button type="button" class="btn btn-danger" onclick="deleteConfirmation()">Decline</button>
                </form>
                </td>
                  </tr>
              @endforeach
        </tbody>
        
    </table>

               
               

            </div>
        </div>
    </div>
</div>

<script>
function deleteConfirmation(){
    var confirm_delete=confirm("Do you want to DECLINE the appointment?");
    console.log(confirm_delete);
    if (confirm_delete== true){
        document.getElementById("delete{{$appointment->id}}").submit();
    }
   
}
</script>
@endsection
