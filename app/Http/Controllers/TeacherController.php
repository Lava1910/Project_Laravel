<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Session;
use App\Models\Study;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index() {
        $course = Course::all();
        return view("user.teacher.home",compact("course"));
    }

    public function course(Course $course){
        $related_session = DB::table("sessions")->where("course_id","=",$course->id)->get();
        $teacher = DB::table("teachers")->where("user_id","=",Auth::user()->id)->first();
        $related_classroom = DB::table("classrooms")
            ->where("teacher_id","=",$teacher->id)
            ->get();
        $total_session =DB::table("sessions")->where("course_id","=",$course->id)->count();

        return view("user.teacher.course1",compact("related_session","course","related_classroom","total_session"));
    }

    public function course_classroom(){

    }

    public function session(){
        return view("user.teacher.session");
    }


}
