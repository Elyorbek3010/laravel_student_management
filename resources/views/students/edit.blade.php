@extends('layouts.app')

@section('heading', 'Edit Student')

@section('content')
<form method="POST" action="/students/{{ $student->id }}" class="max-w-3xl mx-auto">
    @csrf
    @method('PATCH')

    <div class="space-y-10">

        <!-- FORM GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Student ID -->
            <div>
                <label for="id" class="block text-sm/6 font-medium text-white">
                    Student ID
                </label>
                <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white/5 pl-3 border border-black/10 focus-within:border-indigo-500">
                        <input
                            type="text"
                            name="id"
                            id="id"
                            placeholder="Enter Student ID"
                            value="{{ old('id', $student->id) }}"
                            class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                        />
                    </div>
                </div>
                @error('id')
                    <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>

            <!-- Student Name -->
            <div>
                <label for="name" class="block text-sm/6 font-medium text-white">
                    Student Name
                </label>
                <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white/5 pl-3 border border-black/10 focus-within:border-indigo-500">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            placeholder="Enter Student Name"
                            value="{{ old('name', $student->student_name) }}"
                            class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                        />
                    </div>
                </div>
                @error('name')
                    <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>

            <!-- Student Lastname -->
            <div>
                <label for="lastName" class="block text-sm/6 font-medium text-white">
                    Student Lastname
                </label>
                <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white/5 pl-3 border border-black/10 focus-within:border-indigo-500">
                        <input
                            type="text"
                            name="lastName"
                            id="lastName"
                            placeholder="Enter Student Lastname"
                            value="{{ old('lastName', $student->student_lastname) }}"
                            class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                        />
                    </div>
                </div>
                @error('lastName')
                    <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>

            <!-- Birth Place -->
            <div>
                <label for="birthPlace" class="block text-sm/6 font-medium text-white">
                    Birth Place
                </label>
                <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white/5 pl-3 border border-black/10 focus-within:border-indigo-500">
                        <input
                            type="text"
                            name="birthPlace"
                            id="birthPlace"
                            placeholder="Enter Student Birth Place"
                            value="{{ old('birthPlace', $student->student_birthPlace) }}"
                            class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                        />
                    </div>
                </div>
                @error('birthPlace')
                    <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <!-- ACTION BUTTONS -->
        <div class="flex flex-col sm:flex-row sm:justify-end gap-4">
            <a href="/students"
               class="w-full sm:w-auto text-center text-sm font-semibold text-gray-300
                      hover:text-white transition px-5 py-2">
                Cancel
            </a>

            <button type="submit"
                    class="w-full sm:w-auto rounded-md bg-indigo-500
                          px-5 py-2 text-sm font-semibold text-white
                          hover:bg-indigo-600 transition">
                Update
            </button>
        </div>

    </div>
</form>
@endsection