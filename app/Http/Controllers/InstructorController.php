<?php

namespace App\Http\Controllers;

use App\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructor = Instructor::all();

        response()->json($instructor, 200);
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
        $instructor = Instructor::create([
            "gym_no'" => $request->gym_no,
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email"  => $request->email,
        ]);

        if(!$instructor){
            return response()->json($instructor, 400);
        } else{
            return response()->json($instructor, 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instructor = Instructor::findOrFail($id);

        if(!$instructor){
            return response()->json($instructor, 400);
        } else{
            return response()->json($instructor, 200);
        }
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
        $instructor = Instructor::whereUserID($id)->firstOrFail();
        $instructor->fill(\Input::all());
        $instructor->save();

        if(!$instructor){
            return response()->json($instructor, 400);
        } else{
            return response()->json($instructor, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instructor = Instructor::findOrFail($id);
        $instructor->delete();

        if(!$instructor){
            return response()->json($instructor, 400);
        } else{
            return response()->json($instructor, 200);
        }
    }
}
