@extends('adminlte.dashboard')
@section('title','Users')
@section('section_title','Users')
@section('content')
<div class="container my-3">
    
    <br>
 
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Speciality</th>
                <th>Communcation</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
                <tr>
                
                  <td>{{ $doctor->id }}</td>
                  <td>{{ $doctor->name }}</td>
                  <td>{{ $doctor->specialization_id }}</td>
                  <td>{{ $doctor->email }} | {{$doctor->phone_num}}</td>
                  </tr>
              @endforeach
        </tbody>
        
    </table>
</div>

</body>
@endsection