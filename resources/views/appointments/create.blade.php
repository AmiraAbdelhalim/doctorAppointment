

@extends('layouts.app')
<!-- @section('title','CreateAppointment')
@section('section_title','CreateAppointment') -->
@section('content')
<!-- Main content -->
<section class="content">
<h1>Make An Appointment </h1>
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 my-3">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Appointment</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('appointments.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Patient</label>
                                <select name="user_id" class="form-control">
                                    @foreach($users as $user)  
                                    <option value="{{$user->id}}">{{$user->first_name}}</option>
                                    @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Doctor</label>
                                <select name="doctor_id" class="form-control">
                                    @foreach($doctors as $doctor)  
                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                    @endforeach
                                    </select>
                            </div>
                            
                            <div class="form-group">
                            <label for="start">Appointment</label>

                            <input type="datetime-local" id="start" name="appoint">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection