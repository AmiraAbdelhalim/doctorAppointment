@extends('layouts.app')

@section('content')
<h1> Reservation Form </h1>
<form method="POST" action="{{route('user.update')}}">
    @csrf
    @method('PUT')
    {{--method_field("PUT")--}}
    <div class="form-group">
      <label >First Name</label>
      <input name="first_name" type="text" class="form-control" aria-describedby="emailHelp" required value="{{$user->first_name}}">
    </div>
    <div class="form-group">
      <label>Last Name</label>
      <input name="last_name" type="text" class="form-control" aria-describedby="emailHelp" required value="{{$user->last_name}}">

    </div>
    <div class="form-group">
      <label>Mobile</label>
      <input name="mobile_num" type="text" class="form-control" aria-describedby="emailHelp" required value="{{$user->mobile_num}}">
    </div>
    <div class="form-group">
      <label>Country</label>
      <input name="country" type="text" class="form-control" aria-describedby="emailHelp" required value="{{$user->country}}">
    </div>
    <div class="form-group">
      <label>Occupation</label>
      <input name="occupation" type="text" class="form-control" aria-describedby="emailHelp" required value="{{$user->occupation}}">
    </div>
    <div class="form-group">
      <label>Pain Type</label>
      <select name="gender" class="form-control">
       <option value="male">Male</option>
       <option value="female">Female</option>
       
        </select>
    </div>
    <div class="form-group">
      <label>Pain Type</label>
      <select name="painlist_id" class="form-control">
                      @foreach($pain_lists as $pain)
                      <option value="{{ $pain->id}}">{{$pain->pain_type}}</option>

                      @endforeach
                    </select>
       
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Reserve</button>
  </form>
@endsection