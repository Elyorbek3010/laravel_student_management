<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{

    use HasFactory;

    protected $fillable = ['student_id', 'student_name', 'student_lastname', 'birth_place', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
