<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CourseRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \App\Http\Resources\RegistartionResource
     */
    public function store(Request $request)
    {
        //define columns distinctly in order to avoid attacks
        $course_reg = \App\Models\registration::create($request->only(['student_id','course_id','registered_on']));
        //get the course_id and update the active reservations in course table to get an idea reg active reservations
        $course_rec = \App\Models\course::find($request->course_id);
        $course_rec->active_reservations = $course_rec->active_reservations+1;
        $course_rec->save();
        //return response()->json($course_reg, 201);
        return new \App\Http\Resources\RegistartionResource($course_reg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
