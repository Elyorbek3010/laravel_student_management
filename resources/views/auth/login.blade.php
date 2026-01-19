@extends('layouts.app')

@section('heading', 'Login')

@section('content')
<form method="POST" action="/login" class="max-w-md mx-auto">
    @csrf

    <div class="space-y-8">
        <h2 class="text-xl sm:text-2xl font-semibold text-white text-center">
            Login to your account
        </h2>
        <div class="space-y-6">
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm/6 font-medium text-white">
                    Email
                </label>
                <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white/5 pl-3 border border-black/10 focus-within:border-indigo-500">
                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Enter Email"
                            value="{{ old('email') }}"
                            required
                            class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                        />
                    </div>
                </div>
                @error('email')
                    <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm/6 font-medium text-white">
                    Password
                </label>
                <div class="mt-2">
                    <div class="flex items-center rounded-md bg-white/5 pl-3 border border-black/10 focus-within:border-indigo-500">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Enter Password"
                            required
                            class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                        />
                    </div>
                </div>
                @error('password')
                    <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                @enderror
            </div>
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
@endsection