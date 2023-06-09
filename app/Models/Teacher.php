<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $table = 'teacher';
    protected $primaryKey = 'id';
    protected $fillable = ["tchid", "teacher_name", "degree", "experience", "subject", "status"];
}
