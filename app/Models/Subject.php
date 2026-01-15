<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Teacher;


class Subject extends Model
{
    use HasFactory;

    public function teachers() {
        return $this->belongsToMany(Teacher::class);
    }
}
