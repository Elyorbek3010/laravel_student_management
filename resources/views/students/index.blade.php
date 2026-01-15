<x-layout>
    <x-slot:heading>
        Students
    </x-slot>

    <section class="space-y-6">

        <h1 class="text-xl sm:text-2xl font-semibold text-white">
            These are our students:
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            @foreach ($students as $student)
                <a href="/students/{{ $student->id }}"
                    class="block rounded-lg border border-white/10 bg-gray-800/70
                        p-4 hover:bg-gray-700/70 transition">

                    <p class="text-base sm:text-lg font-medium">
                        {{ $student->student_name }} {{ $student->student_lastname }}
                    </p>

                    <p class="text-sm text-gray-300 mt-1">
                        Student ID: {{ $student->id }}
                    </p>
                </a>
            @endforeach

        </div>

        
        <div class="pt-6">
            {{ $students->links() }}
        </div>

    </section>
</x-layout>
