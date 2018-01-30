<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;

class Task extends Model
{
    //
    protected $fillable = [
      'title','content','deadline','course_id'
    ];

    public function users()
    {
        return $this->belongsToMany(User::Class,'task_user','task_id','user_id');
    }//用户和任务多对多

    public function courses()
    {
        return $this->belongsTo(Course::Class,'course_id','course_id');
    }
}
