<?php

namespace App\Http\Controllers\Subscriber;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderby('id', 'desc')->get();
        return view('subscriber.course.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::where('id', $id)->get()->first();
        return view('subscriber.course.show', compact('course'));
    }

}
