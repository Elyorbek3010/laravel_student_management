<x-layout>
    <x-slot:heading>
        Login
    </x-slot>

<form method="POST" action="/login" class="max-w-md mx-auto">
    @csrf

    <div class="space-y-8">
        <h2 class="text-xl sm:text-2xl font-semibold text-white text-center">
            Login to your account
        </h2>
        <div class="space-y-6">
            <x-form-field>
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-2">
                    <x-form-input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Enter Email"
                        required
                    />
                </div>
                <div class="mt-1">
                    <x-form-error name="email" />
                </div>
            </x-form-field>

            <x-form-field>
                <x-form-label for="password">Password</x-form-label>
                <div class="mt-2">
                    <x-form-input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Enter Password"
                        required
                    />
                </div>
                <div class="mt-1">
                    <x-form-error name="password" />
                </div>
            </x-form-field>
        </div>
        <div class="pt-4">
            <button type="submit"
                    class="w-full rounded-md bg-indigo-500
                          px-4 py-2 text-sm font-semibold text-white
                          hover:bg-indigo-600 transition
                          focus-visible:outline-2 focus-visible:outline-offset-2
                          focus-visible:outline-indigo-500">
                Login
            </button>
        </div>
    </div>
</form>
</x-layout>
