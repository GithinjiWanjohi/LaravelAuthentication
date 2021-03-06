<?php

namespace App\Http\Controllers;

use App\Http\Resources\WorkoutsResource;
use App\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $workout = Workout::all();

        return WorkoutsResource::collection($workout);
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
     * @return WorkoutsResource
     */
    public function store(Request $request)
    {
        $workout = Workout::create([
            "user_id" => $request->user_id,
            "workout_type" => $request->workout_type,
            "reps"  => $request->reps,
            "sets"  => $request->sets,
            "location"  => $request->location,
            "date"  => $request->date,
            "time"  => $request->time,
        ]);

        return new WorkoutsResource($workout);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return WorkoutsResource
     */
    public function show($id)
    {
        $workout = Workout::findOrFail($id);
        //Return as a resource
        return new WorkoutsResource($workout);
    }

    public function showUserWorkout(Request $request)
    {

        $user_id = $request->input('user_id');
        $workout = Workout::where('user_id', $user_id)->get();
        //Return as a resource

        return new WorkoutsResource($workout);
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
     * @return WorkoutsResource
     */
    public function update(Request $request, $id)
    {
        $workout = Workout::whereUserID($id)->firstOrFail();
        $workout->fill(\Input::all());
        $workout->save();

        return new WorkoutsResource($workout);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return WorkoutsResource
     */
    public function destroy($id)
    {
        $workout = Workout::findOrFail($id);
        $workout->delete();

        return new WorkoutsResource($workout);
    }
}
