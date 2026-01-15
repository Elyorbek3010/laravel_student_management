<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class StudentController extends Controller
{
    public function index() {

    $students = Student::latest()->paginate(10);

    return view('students.index', [
        'students' => $students
    ]);
    }

    public function create() {
        return view('students.create');
    }

    public function store() {

        // validation
        request()->validate([
            'id' => ['required', 'numeric', 'digits:8'],
            'name' => ['required'],
            'lastName' => ['required'],
            'birthPlace' => ['required']
]);

    // Adding the Data to the Database
    $student = Student::create([
        'user_id' => Auth::id(),
        'student_id' => request('id'),          // Accepting the data from the form using the name of the inputs
        'student_name' => request('name'),
        'student_lastname' => request('lastName'),
        'birth_place' => request('birthPlace')
    ]);

    \Illuminate\Support\Facades\Mail::to($student->user->email)->queue(
        new \App\Mail\StudentPosted($student)
    );

    return redirect('/students');
    }

    public function show(Student $student) {
        return view('students.show', [
        'student' => $student
    ]);
    }

    public function edit(Student $student) {

        @Gate::authorize('edit', $student);

    return view('students.edit', [
        'student' => $student
    ]);

    }

    public function update(Student $student) {

    @Gate::authorize('edit', $student);

        // validation
        request()->validate([
            'id' => ['required', 'numeric', 'digits:8'],
            'name' => ['required'],
            'lastName' => ['required'],
            'birthPlace' => ['required']
]);
    // authorize 

    $student->update([
        'student_id' => request('id'),         
        'student_name' => request('name'),
        'student_lastname' => request('lastName'),
        'birth_place' => request('birthPlace')
    ]);

    //redirect to the show page
    return redirect('/students/'.$student->id);

    }

    public function destroy(Student $student) {
        
        @Gate::authorize('edit', $student);

    $student->delete();

    //redirect to the students page
    return redirect('/students');
    }
}
