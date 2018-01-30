<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseUsersController extends Controller
{
    public function store(Request $request)
    {
        $course=Course::where('course_id',$request->course_id)->first();
        if(!Auth::user()->hasCourse($course->id)) {
            Auth::user()->addcourse($course->id);
        }

        session()->flash('success','课程添加成功');
        return redirect()->route('users.show',Auth::user()->id);
    }
}
