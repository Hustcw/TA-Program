<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',[
           'except'=>[]
        ]);
    }

    public function bindcourse(User $user,Request $request)
    {
        $this->validate($request,[
            'course_id' => 'required|unique:courses',
            'course_name' => 'required|max:60',
            'teacher' => 'required',
        ]);//验证

        $this->authorize('bind_course');
        Course::create([
            'course_id' => $request->course_id,
            'course_name' => $request->course_name,
            'teacher' => $request->teacher,
        ]);//创建新数据入数据库

        $user->update(['ta_course'=>$request->course_id]);//更改助教默认的课程号

        session()->flash('success','课程信息添加成功！');
        return redirect()->route('users.show',$user->id);
    }
}
