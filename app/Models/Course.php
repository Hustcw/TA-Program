<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;

class Course extends Model
{
    protected $guarded = [];//没有要过滤的字段

    public function users()
    {
        return $this->belongsToMany(User::Class,'course_user','course_id','user_id');
    }//课程和用户多对多

    public function tasks()
    {
        return $this->hasMany(Task::Class,'task_id','id');
    }
}
