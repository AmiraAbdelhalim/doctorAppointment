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
                <th>Pain Type</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
                <tr>
                
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                  <td>{{ $user->painlist_id }}</td>

                  </tr>
              @endforeach
        </tbody>
        
    </table>
</div>

</body>
@endsection