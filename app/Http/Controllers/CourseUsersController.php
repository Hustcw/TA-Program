<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use App\Models\Task;

class CourseUsersController extends Controller
{
    public function store(Request $request)
    {
        $course=Course::where('course_id',$request->course_id)->first();
        $user=Auth::user();
        if(!$user->hasCourse($course->id)) {
            $user->addcourse($course->id);

            $tasks = Task::where('course_id', $course->course_id)->get();//选取该课程的任务
            foreach ($tasks as $task){
                $user->bindtask($task->id);
            }
        }

        session()->flash('success','课程添加成功');
        return redirect()->back()->with(['user'=>$user]);
    }

    public function destroy(Request $request,User $user)
    {
        Auth::user()->deletecourse($request->course_id);

        session()->flash('success', '课程删除成功');
        return redirect()->back()->with(['user' => $user]);
    }
}
