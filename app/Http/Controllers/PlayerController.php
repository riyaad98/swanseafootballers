<?php

namespace App\Http\Controllers;

use App\Player;
use App\Coach;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('players.index', ['players' => $players]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coaches = Coach::orderBy('firstname', 'asc')->get();
        return view('players.create', ['coaches' => $coaches]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'firstname' => 'required|max:100',
          'lastname' => 'required|max:100',
          'age' => 'required|integer',
          'position' => 'required|max:15',
          'address' => 'required|max:255',
          'coaches_id' => 'required|integer',
        ]);

        $a = new Player;
        $a->firstname = $validatedData['firstname'];
        $a->lastname = $validatedData['lastname'];
        $a->age = $validatedData['age'];
        $a->position = $validatedData['position'];
        $a->address = $validatedData['address'];
        $a->coaches_id = $validatedData['coaches_id'];
        $a->save();
        session()->flash('message', 'Player was created.');
        return redirect()->route('players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::findOrFail($id);
        return view('players.show', ['player' => $player]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return redirect()->route('players.index')->with('message', 'Player was deleted.');
    }
}
