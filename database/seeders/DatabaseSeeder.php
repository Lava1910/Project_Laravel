<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Couchbase\GetReplicaResult;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
        $admin = User::create([
            "name"=>"admin",
            "email"=>"admin@localhost",
            "password"=> bcrypt("admin"),
        ]);
        Admin::create([
            "user_id"=>$admin->id,
            "role"=>"ADMIN"
        ]);
        $teacher1 = User::create([
            "name"=>"Nguyen Van A",
            "email"=>"nguyenvana001@gmail.com",
            "password"=> bcrypt("teacher"),
        ]);
        $teacher2 = User::create([
            "name"=>"Nguyen Thi B",
            "email"=>"nguyenthib002@gmail.com",
            "password"=> bcrypt("teacher"),
        ]);
        $teacher3 = User::create([
            "name"=>"Tran Thi C",
            "email"=>"tranthic003@gmail.com",
            "password"=> bcrypt("teacher"),
        ]);
        $teacher4 = User::create([
            "name"=>"Ngo Dinh D",
            "email"=>"ngodinhd004@gmail.com",
            "password"=> bcrypt("teacher"),
        ]);
        $teacher5 = User::create([
            "name"=>"Nguyen Van E",
            "email"=>"nguyenvane005@gmail.com",
            "password"=> bcrypt("teacher"),
        ]);

        Admin::create([
            "user_id"=>$teacher1->id,
            "role"=>"TEACHER"
        ]);
        Admin::create([
            "user_id"=>$teacher2->id,
            "role"=>"TEACHER"
        ]);
        Admin::create([
            "user_id"=>$teacher3->id,
            "role"=>"TEACHER"
        ]);
        Admin::create([
            "user_id"=>$teacher4->id,
            "role"=>"TEACHER"
        ]);
        Admin::create([
            "user_id"=>$teacher5->id,
            "role"=>"TEACHER"
        ]);
        Course::create(["id"=>"7023-JP1","name"=>"Java Programing-I","qty"=>20]);
        Course::create(["id"=>"7023-JP2","name"=>"Java Programing-II","qty"=>20]);
        Course::create(["id"=>"7023-PDLF","name"=>"PHP Development with Laravel Framework","qty"=>20]);
        Course::create(["id"=>"7023-ISA","name"=>"Information Systems Analysis (NCC)","qty"=>20]);
        Course::create(["id"=>"7023-MLJ","name"=>"Markup Language & JSON","qty"=>20]);
        Course::create(["id"=>"7023-APC#","name"=>"Application Programming with C#","qty"=>20]);

        Teacher::create(["id"=>"GV001","name"=>"Nguyen Van A","gender"=>1,"email"=>"nguyenvana001@gmail.com",
            "address"=>"So 1 Nguyen Chi Thanh, Ba Dinh, Ha Noi"]);
        Teacher::create(["id"=>"GV002","name"=>"Nguyen Thi B","gender"=>0,"email"=>"nguyenthib002@gmail.com",
            "address"=>"So 1 Nguyen Chi Thanh, Ba Dinh, Ha Noi"]);
        Teacher::create(["id"=>"GV003","name"=>"Tran Thi C","gender"=>0,"email"=>"tranthic003@gmail.com",
            "address"=>"So 1 Nguyen Chi Thanh, Ba Dinh, Ha Noi"]);
        Teacher::create(["id"=>"GV004","name"=>"Ngo Dinh D","gender"=>1,"email"=>"ngodinhd004@gmail.com",
            "address"=>"So 1 Nguyen Chi Thanh, Ba Dinh, Ha Noi"]);
        Teacher::create(["id"=>"GV005","name"=>"Nguyen Van E","gender"=>1,"email"=>"nguyenvane005@gmail.com",
            "address"=>"So 1 Nguyen Chi Thanh, Ba Dinh, Ha Noi"]);

        $class1 = Classroom::create(["id"=>"T2202A","qty"=>10,"teacher_id"=>"GV001"]);
        $class2 = Classroom::create(["id"=>"T2202B","qty"=>11,"teacher_id"=>"GV001"]);
        Classroom::create(["id"=>"T2202C","qty"=>11,"teacher_id"=>"GV002"]);
        Classroom::create(["id"=>"T2202D","qty"=>10,"teacher_id"=>"GV002"]);
        Classroom::create(["id"=>"T2202E","qty"=>12,"teacher_id"=>"GV003"]);
        Classroom::create(["id"=>"T2202F","qty"=>10,"teacher_id"=>"GV004"]);

//        Student::create(["id"=>"SV001","name"=>"Nguyễn Thiên An","gender"=>0,"email"=>"nguyenthienan001@gmail.com",
//            "address"=>"So 2 Ho Dac Di, Dong Da, Ha Noi","class_id"=>]);
//        Student::create(["id"=>"SV002","name"=>"Nguyen Trung Hải","gender"=>1,"email"=>"nguyentrunghai002@gmail.com",
//            "address"=>"So 2 Ho Dac Di, Dong Da, Ha Noi","class_id"=>$class1->id]);
//        Student::create(["id"=>"SV003","name"=>"Nguyễn Khắc Minh","gender"=>1,"email"=>"nguyenkhacminh003@gmail.com",
//            "address"=>"So 2 Ho Dac Di, Dong Da, Ha Noi","class_id"=>$class1->id]);
//        Student::create(["id"=>"SV004","name"=>"Nguyễn Bình Ðạt","gender"=>1,"email"=>"nguyenbinhdat004@gmail.com",
//            "address"=>"So 2 Ho Dac Di, Dong Da, Ha Noi","class_id"=>$class1->id]);
//        Student::create(["id"=>"SV005","name"=>"Nguyễn Ðức Quang","gender"=>1,"email"=>"nguyenducquang005@gmail.com",
//            "address"=>"So 2 Ho Dac Di, Dong Da, Ha Noi","class_id"=>$class1->id]);
    }
}
