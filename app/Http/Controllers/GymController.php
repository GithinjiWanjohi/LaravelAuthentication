<?php

namespace App\Http\Controllers;

use App\Gym;
use Illuminate\Http\Request;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gym');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gym = Gym::create($request->all());

        return response()->json($gym, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  $gym
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gym = Gym::all()->find($id);
        return response()->json($gym, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function edit($gym)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gym $gym)
    {
        $gym->update($request->all());

        return response()->json($gym, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $gym
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Gym $gym)
    {
        $gym->delete();

        return response()->json(null, 204);
    }

    public function averageRating()
    {
        $avg = Gym::avg('rating');
        return response()->json($avg, 200);
    }
}
