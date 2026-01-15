@extends('layouts.app')

@section('heading')
    Users
@endsection

@section('content')

<section class="space-y-6">

    <h1 class="text-xl sm:text-2xl font-semibold text-white">
        These are our users:
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

        @foreach ($users as $user)
            <a href="/user/{{ $user['id'] }}"
               class="block rounded-lg border border-white/10 bg-gray-800/70
                      p-4 hover:bg-gray-700/70 transition">

                <p class="text-base sm:text-lg font-medium text-white">
                    {{ $user['name'] }} {{ $user['last_name'] }}
                </p>

                <p class="text-sm text-gray-300 mt-1">
                    User ID: {{ $user['id'] }}
                </p>
            </a>
        @endforeach

    </div>

</section>

@endsection
