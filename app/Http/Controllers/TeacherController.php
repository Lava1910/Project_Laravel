<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() {
        $course = Course::all();
        return view("user.teacher.home",["courses"=>$course]);
    }


}
