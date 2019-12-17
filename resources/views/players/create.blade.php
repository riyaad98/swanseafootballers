<link type="text/css" rel="stylesheet" href="{{ URL::asset('index.css')}}">
<!doctype html>
<html lang = "en">

@extends('layouts.app')

@section('title', 'Create Player')

@section('content')
<head>

</head>

<body>
  <div class ="card-header">
    Create a new player
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('players.store') }}">
       @csrf
       <p>FirstName: <input type="text" name="firstname"
         value="{{ old('firstname')}}"></p>
       <p>LastName: <input type="text" name="lastname"
         value="{{ old('lastname')}}"></p>
       <p>Age: <input type="text" name="age"
         value="{{ old('age')}}"></p>
       <p>Position: <input type="text" name="position"
         value="{{ old('position')}}"></p>
       <p>Address: <input type="text" name="address"
         value="{{ old('address')}}"></p>
         <p>Coach
           <select name="coaches_id">
           @foreach ($coaches as $coach)
              <option value="{{ $coach->id }}"
                @if ($coach->id == old('coach_id'))
                    selected='selected'
                @endif
              >{{ $coach->firstname }}</option>
          @endforeach
        </select>

       </p>
       <input type="submit" value="Submit">
       <a href="{{ route('players.index')}}">Cancel</a>
    </form>
  </div>

</body>

@endsection

</html>
