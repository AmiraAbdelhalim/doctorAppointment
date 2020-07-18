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

            </div>
        </div>
    </div>
</div>
@endsection
