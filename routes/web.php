<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Models;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Mail;

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::view('/team', 'team');
Route::view('/location', 'location');

// Route Model Binding

// Users

Route::get('/users', function () {

    $users = [
        [
            'id' => 1,
            'name' => "Peter",
            'last_name' => "Rogers"
        ],
        [
            'id' => 2,
            'name' => "Bryce",
            'last_name' => "Veldkamp"
        ],
        [
            'id' => 3,
            'name' => "Rayya",
            'last_name' => "Addison"
        ]
    ];

    return view('users', [
        'users' => $users
    ]);
});

// User

Route::get('/user/{id}', function ($id) {
    $users = [
        [
            'id' => 1,
            'name' => "Peter",
            'last_name' => "Rogers"
        ],
        [
            'id' => 2,
            'name' => "Bryce",
            'last_name' => "Veldkamp"
        ],
        [
            'id' => 3,
            'name' => "Rayya",
            'last_name' => "Addison"
        ]
    ];

    foreach ($users as $user){
        if($user['id'] == $id) {
            return view('user',[
                'user' => $user
            ]);
        }
    };
});

// Students CRUD

// Route::resource('students', StudentController::class)->middleware('auth');

Route::get('/students', [StudentController::class, 'index']);
Route::get('students/create',[StudentController::class, 'create'])->middleware('auth');
Route::post('students', [StudentController::class, 'store'])->middleware('auth');
Route::get('/students/{student}', [StudentController::class, 'show']); 
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->middleware('auth');
Route::patch('/students/{student}',[StudentController::class, 'update'])->middleware('auth');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->middleware('auth');


// 21-task


// Auth
//Register
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);


// Login
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);


// 25-task

Route::get('/test', function() {

    $student = Student::find(1);

    \App\Jobs\StudentJob::dispatch($student);
    return "Done";
});