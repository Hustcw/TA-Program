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
        'name', 'email', 'password','username','realname','ta_course','student_id','phonenumber',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function assistant_course(){
        $course=Course::where('course_id','=',$this->ta_course)->first();
        return $course;
    }

    public function courses()
    {
        return $this->belongsToMany(Course::Class,'course_user','user_id','course_id');
    }//用户和课程多对多

    public function tasks()
    {
        return $this->belongsToMany(Task::Class,'task_user','user_id','task_id');
    }//用户和任务多对多


    public function hasCourse($course_id)
    {
        return $this->courses->contains($course_id);
    }//利用动态属性加contains方法判断是否已选课程

    public function addcourse($course_ids)
    {
        if(!is_array($course_ids)){
            $course_ids=compact('course_ids');
        }
        $this->courses()->sync($course_ids,false);
    }
}