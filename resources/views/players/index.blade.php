<link type="text/css" rel="stylesheet" href="{{ URL::asset('index.css')}}">
<!doctype html>
<html lang = "en">

@extends('layouts.app')

@section('title', 'Players')

@section('content')
<head>

</head>

     <body>
       <div class="card-header">
         Swansea Football Players
       </div>
       <div class="card-body">
      <p>The players of Swansea FC:</p>
      <ul>
          <?php foreach ($players as $player): ?>
              <li><a href="{{ route('players.show', ['id' => $player->id]) }}">{{ $player->firstname }}</a></li>

          <?php endforeach; ?>
        </ul>
        <a href="{{ route('players.create')}}">Create Player</a>
      </div>
</body>

</html>
@endsection
