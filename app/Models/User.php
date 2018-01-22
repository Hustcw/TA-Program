<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Course;
use App\Models\Task;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','realname','ta_course','student_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::Class,'course_user','user_id','course_id');
    }//用户和课程多对多

    public function tasks()
    {
        return $this->belongsToMany(Task::Class,'task_user','user_id','task_id');
    }//用户和任务多对多

}
