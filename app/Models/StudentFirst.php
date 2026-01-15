<?php

namespace App\Models;


class StudentFirst {

    // 7-topshiriq

    public static function all() {
        return [
            [
                'id' => 1,
                'student_id' => 2314442,
                'name' => "Peter",
                'last_name' => "Rogers"
            ],
            [
                'id' => 2,
                'student_id' => 23232102,
                'name' => "Bryce",
                'last_name' => "Veldkamp"
            ],
            [
                'id' => 3,
                'student_id' => 2315392,
                'name' => "Rayya",
                'last_name' => "Addison"
            ],
            [
                'id' => 4,
                'student_id' => 23132142,
                'name' => "Bradd",
                'last_name' => "Johnson" 
            ],
            [
                'id' => 5,
                'student_id' => 23122082,
                'name' => "Scott",
                'last_name' => "Matthew"
            ]
        ];
    }

    public static function find(int $id) {
        $students = StudentFirst::all();

        $findingStudent = [];

    foreach ($students as $student){
        if($student['id'] == $id) {
            $findingStudent = $student;
        }
    }
        if(!$findingStudent){
            return abort(404);
        }
        return $findingStudent;
    }



}