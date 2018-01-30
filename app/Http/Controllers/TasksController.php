<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class TasksController extends Controller
{
    public function show(User $user)
    {
        $tasks=Task::where('course_id',$user->ta_course)->get();
        return view('users.assignment',compact('user','tasks'));
    }

    public function addtask(User $user, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'taskcontent' => 'required|min:6|max:200',
            'deadline'=>'date',
        ]);

        Task::create([
            'course_id'=>$request->ta_course,
            'title'=>$request->title,
            'content'=>$request->taskcontent,
            'deadline'=>$request->deadline,

        ]);

        session()->flash('success','发布任务成功！');
        return redirect()->back();
    }
}
