<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Subject;

class Teacher extends Model
{
    use HasFactory;

    public function subjects() {
        return $this->belongsToMany(Subject::class);
    }
}
