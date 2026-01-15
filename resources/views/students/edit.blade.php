<x-layout>
    <x-slot:heading>
        Edit Student -
        <span class="text-red-500">
            {{ $student->student_name }} {{ $student->student_lastname }}
        </span>
    </x-slot:heading>

<form method="POST" action="/students/{{ $student->id }}" class="max-w-3xl mx-auto">
    @csrf
    @method('PATCH')

    <div class="space-y-10">

        <!-- FORM GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Student ID -->
            <div>
                <label for="id" class="block text-sm font-medium">Student ID</label>
                <div class="mt-2">
                    <input id="id" value="{{ $student->student_id }}"
                           type="text" name="id"
                           class="w-full rounded-md bg-white/5 border border-white/10
                                  px-3 py-2 text-sm placeholder:text-gray-400
                                  focus:border-indigo-500 focus:outline-none"
                           placeholder="Enter Student Id" />
                </div>
                @error('id')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Student Name -->
            <div>
                <label for="name" class="block text-sm font-medium">Student Name</label>
                <div class="mt-2">
                    <input id="name" value="{{ $student->student_name }}"
                           type="text" name="name"
                           class="w-full rounded-md bg-white/5 border border-white/10
                                  px-3 py-2 text-sm placeholder:text-gray-400
                                  focus:border-indigo-500 focus:outline-none"
                           placeholder="Enter Student Name" />
                </div>
                @error('name')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Lastname -->
            <div>
                <label for="lastName" class="block text-sm font-medium">Student Lastname</label>
                <div class="mt-2">
                    <input id="lastName" value="{{ $student->student_lastname }}"
                           type="text" name="lastName"
                           class="w-full rounded-md bg-white/5 border border-white/10
                                  px-3 py-2 text-sm placeholder:text-gray-400
                                  focus:border-indigo-500 focus:outline-none"
                           placeholder="Enter Student Lastname" />
                </div>
                @error('lastName')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Birth Place -->
            <div>
                <label for="birthPlace" class="block text-sm font-medium">Birth Place</label>
                <div class="mt-2">
                    <input id="birthPlace" value="{{ $student->birth_place }}"
                           type="text" name="birthPlace"
                           class="w-full rounded-md bg-white/5 border border-white/10
                                  px-3 py-2 text-sm placeholder:text-gray-400
                                  focus:border-indigo-500 focus:outline-none"
                           placeholder="Enter Birth Place" />
                </div>
                @error('birthPlace')
                    <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <!-- ACTIONS -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

            <!-- Delete -->
            <button form="delete-form"
                    class="w-full sm:w-auto rounded-md px-4 py-2
                           bg-red-700 text-white text-sm font-semibold
                           hover:bg-red-900">
                Delete
            </button>

            <!-- Cancel + Update -->
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="/students/{{ $student->id }}"
                   class="w-full sm:w-auto text-center rounded-md px-4 py-2
                          bg-orange-500 text-white text-sm font-semibold
                          hover:bg-orange-600">
                    Cancel
                </a>

                <button type="submit"
                        class="w-full sm:w-auto rounded-md bg-indigo-500
                               px-4 py-2 text-sm font-semibold text-white
                               hover:bg-indigo-700
                               focus-visible:outline-2 focus-visible:outline-offset-2
                               focus-visible:outline-indigo-500">
                    Update
                </button>
            </div>
        </div>

    </div>
</form>

<!-- DELETE FORM -->
<form method="POST" action="/students/{{ $student->id }}" class="hidden" id="delete-form">
    @csrf
    @method('DELETE')
</form>

</x-layout>
