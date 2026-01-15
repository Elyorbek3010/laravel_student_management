@extends('layouts.app')

@section('heading')
    Student Details
@endsection

@section('content')

<section class="max-w-2xl mx-auto space-y-6">

    <!-- STUDENT CARD -->
    <div class="rounded-lg border border-white/10 bg-gray-800/70 p-6">

        <h2 class="text-xl sm:text-2xl font-semibold text-white mb-4">
            {{ $student->student_name }} {{ $student->student_lastname }}
        </h2>

        <div class="space-y-2 text-sm sm:text-base text-gray-200">

            <p>
                <span class="font-medium text-white">Student ID:</span>
                {{ $student->student_id }}
            </p>

            <p>
                <span class="font-medium text-white">Birth Place:</span>
                {{ $student->birth_place }}
            </p>

        </div>
    </div>

    <!-- ACTIONS -->
    @can('edit', $student)
        <div class="flex justify-center sm:justify-start">
            <a href="/students/{{ $student->id }}/edit"
               class="inline-block rounded-md bg-indigo-500
                      px-5 py-2 text-sm font-semibold text-white
                      hover:bg-indigo-600 transition">
                Edit Student
            </a>
        </div>
    @endcan

</section>

@endsection
