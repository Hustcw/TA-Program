<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class CoursesController extends Controller
{
    public function bindcourse(User $user,Request $request)
    {
        $this->validate($request,[
            'course_id' => 'required|unique:courses',
            'course_name' => 'required|max:60',
            'teacher' => 'required',
        ]);

        Course::create([
            'course_id' => $request->course_id,
            'course_name' => $request->course_name,
            'teacher' => $request->teacher,
        ]);

        $user->update(['ta_course'=>$request->course_id]);
        session()->flash('success','课程信息添加成功！');
        return redirect()->route('users.show',$user->id);
    }
}
