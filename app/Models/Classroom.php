<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $table = "classrooms";
    protected $fillable = [
      "id",
        "name",
        "qty",
        "teacher_id"
    ];
}
