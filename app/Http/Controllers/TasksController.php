<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Auth;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['']
        ]);
    }

    public function show(User $user)
    {
        $tasks = Task::where('course_id', $user->ta_course)->get();
        return view('users.assignment', compact('user', 'tasks'));
    }

    public function stshow(User $user, Course $course)
    {
        $tasks = Task::where('course_id', $course->course_id)->get();
        return view('users.query', compact('user', 'tasks'));
    }

    public function addtask(User $user, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'taskcontent' => 'required|min:6|max:200',
            'deadline' => 'date',
        ]);

        Task::create([
            'course_id' => $request->ta_course,
            'title' => $request->title,
            'content' => $request->taskcontent,
            'deadline' => $request->deadline,

        ]);

        session()->flash('success', '发布任务成功！');
        return redirect()->back();
    }

    public function grade(User $user)
    {
        $tasks = Task::where('course_id', $user->ta_course)->get();
        return view('users.grade', compact('user', 'tasks'));
    }

    public function showgrade(User $user, Task $task)
    {
        $tasks = Task::where('course_id', $user->ta_course)->get();
        return view('users.showgrade', compact('user', 'task', 'tasks'));
    }

    public function getJson(Task $task)
    {
        $task_users = DB::table('task_user')->where('task_id', $task->id)->get();
        $arr = array();
        foreach ($task_users as $task_user) {
            $user = User::where('id', $task_user->user_id)->first();
            $name = $user->realname;
            $score = $task_user->grade;
            $number = $user->student_id;
            $temp = array("StuNumber" => $number, "StuName" => $name, "StuScore" => $score);
            array_push($arr, $temp);
        }
        return json_encode($arr);
    }

    public function editgrade(Request $request, Task $task)
    {
        $Stunumber = $request->input('StuNumber');
        $Stuscore = $request->input('StuScore');
        $user = User::where('student_id', $Stunumber)->first();
        DB::table("task_user")->where([
            ['user_id', '=', $user->id],
            ['task_id', '=', $task->id]
        ])->update(['grade' => $Stuscore]);
    }
}
