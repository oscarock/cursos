<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::get();
        return $courses;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_course' => 'required',
            'name_teacher' => 'required',
            'capacity' => 'required|numeric',
            'observations' => 'required'
        ]);

        $courses = new Course;
        $courses->name_course = $request->input('name_course');
        $courses->name_teacher = $request->input('name_teacher');
        $courses->capacity = $request->input('capacity');
        $courses->observations = $request->input('observations');
        $courses->save();

        return;
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
        $this->validate($request, [
            'name_course' => 'required',
            'name_teacher' => 'required',
            'capacity' => 'required|numeric',
            'observations' => 'required'
        ]);

        $courses = Course::findOrFail($id);
        $courses->name_course = $request->input('name_course');
        $courses->name_teacher = $request->input('name_teacher');
        $courses->capacity = $request->input('capacity');
        $courses->observations = $request->input('observations');
        $courses->save();

        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Course::findOrFail($id);
        $courses->delete();
    }
}
