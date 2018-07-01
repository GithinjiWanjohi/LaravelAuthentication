<?php

namespace App\Http\Controllers;

use App\Gym;
use App\Http\Resources\GymResource;
use Illuminate\Http\Request;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $gym = Gym::all();

        return GymResource::collection($gym);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gym');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function store(Request $request)
    {
        $gym = Gym::create($request->all());
        if (request('id') != null){
            $gym = Gym::all()->find(request('id'));
            $gym->gym_name = request('gym_name');
            $gym->latitude = request('latitude');
            $gym->longitude = request('longitude');
            $gym->opening_time = request('opening_time');
            $gym->closing_time = request('closing_time');
            $gym->save();
            return redirect('/gym');
        } else{
            $gym = new Gym();
            $gym->gym_name = request('gym_name');
            $gym->latitude = request('latitude');
            $gym->longitude = request('longitude');
            $gym->opening_time = request('opening_time');
            $gym->closing_time = request('closing_time');
            $gym->save();
            return redirect('/gym');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  $gym
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show($id)
    {
        $gym = Gym::all()->findOrFail($id);

        return GymResource::collection($gym);
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
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function update(Request $request, Gym $gym)
    {
        $gym = $gym->update($request->all());

        return GymResource::collection($gym);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Gym $gym
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     * @throws \Exception
     */
    public function destroy(Gym $gym)
    {
        $gym = $gym->delete();

        return GymResource::collection($gym);
    }

    public function averageRating()
    {
        $avg = Gym::all()->avg('rating');

        return GymResource::collection($avg);
    }
}
