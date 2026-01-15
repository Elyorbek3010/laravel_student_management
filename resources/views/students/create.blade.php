<x-layout>
    <x-slot:heading>
        Create Student
    </x-slot>

<form method="POST" action="/students" class="max-w-3xl mx-auto">
    @csrf

    <div class="space-y-10">

        <!-- FORM GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <x-form-field>
                <x-form-label for="id">Student ID</x-form-label>
                <div class="mt-2">
                    <x-form-input name="id" id="id" placeholder="Enter Student ID" />
                </div>
                <div class="mt-1">
                    <x-form-error name="id" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="name">Student Name</x-form-label>
                <div class="mt-2">
                    <x-form-input name="name" id="name" placeholder="Enter Student Name" />
                </div>
                <div class="mt-1">
                    <x-form-error name="name" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="lastName">Student Lastname</x-form-label>
                <div class="mt-2">
                    <x-form-input name="lastName" id="lastName" placeholder="Enter Student Lastname" />
                </div>
                <div class="mt-1">
                    <x-form-error name="lastName" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="birthPlace">Birth Place</x-form-label>
                <div class="mt-2">
                    <x-form-input name="birthPlace" id="birthPlace" placeholder="Enter Student Birth Place" />
                </div>
                <div class="mt-1">
                    <x-form-error name="birthPlace" />
                </div>
            </x-form-field>

        </div>

        <!-- ACTION BUTTONS -->
        <div class="flex flex-col sm:flex-row sm:justify-end gap-4">
            <button type="button"
                    class="w-full sm:w-auto text-sm font-semibold text-gray-300
                        hover:text-white transition">
                Cancel
            </button>

            <button type="submit"
                    class="w-full sm:w-auto rounded-md bg-indigo-500
                          px-5 py-2 text-sm font-semibold text-white
                          hover:bg-indigo-600 transition">
                Save
            </button>
        </div>

    </div>
</form>
</x-layout>
