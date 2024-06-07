<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;
class CourseController extends Controller
{
    
    public function addcourses(){

        return view('dashboard.admin.addcourses');
    }

    public function createcourse (Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'period' => ['nullable', 'string'],
            'messages' => ['required', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        $add_course = new Course;
        if ($request->hasFile('images')){
            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);
        }else{
           $path = 'noimage'; 
        }

        $add_course['images'] = $path;
        $add_course->slug = SlugService::createSlug(Course::class, 'slug', $request->title);
        $add_course->title = $request->title;
        $add_course->period = $request->period;
     
        $add_course->messages = $request->messages;
        $add_course->ref_no = substr(rand(0,time()),0, 9);
        $add_course->save();

        return redirect()->back()->with('success', 'you have added successfully');

    }

    public function viewcourses(){
        $view_courses = Course::all();
        return view('dashboard.admin.viewcourses', compact('view_courses'));
    }

}
