<link type="text/css" rel="stylesheet" href="{{ URL::asset('index.css')}}">
<!doctype html>
<html lang = "en">

@extends('layouts.app')

@section('title', 'Player Details')

@section('content')
<head>
</head>

<body>
    <div class="card-header">
      Player details
    </div>
    <div class="card-body">
    <ul>
      <li>FirstName: {{ $player->firstname }}</li>
      <li>LastName: {{ $player->lastname }}</li>
      <li>Age: {{ $player->age }}</li>
      <li>Position: {{ $player->position }}</li>
      <li>Address: {{ $player->address }}</li>
      <li>Coach: {{ $player->coach->firstname }}</li>
    </ul>

    <form method="POST"
        action="{{ route('players.destroy', ['id' => $player->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <p><a href="{{ route('players.index') }}">Back</a></p>
  </div>

</body>
@endsection
</html>
