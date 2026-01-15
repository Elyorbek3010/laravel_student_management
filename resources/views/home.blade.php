@extends('layouts.app')

@section('heading')
    Home Page
@endsection

@section('content')

<section class="text-center py-10 sm:py-16">
    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4">
        Welcome To Home Page
    </h1>

    <div class="mt-6 flex flex-col sm:flex-row gap-4 justify-center">
        <a href="/students"
           class="px-6 py-3 rounded-md bg-indigo-500 text-white font-semibold
                  hover:bg-indigo-600 transition">
            View Students
        </a>
    </div>
</section>

@endsection
