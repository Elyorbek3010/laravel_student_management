@extends('layouts.app')

@section('heading')
    User Details
@endsection

@section('content')

<section class="max-w-2xl mx-auto space-y-6">
    <div class="rounded-lg border border-white/10 bg-gray-800/70 p-6">

        <h2 class="text-xl sm:text-2xl font-semibold text-white mb-4">
            {{ $user['name'] }} {{ $user['last_name'] }}
        </h2>

        <div class="space-y-2 text-sm sm:text-base text-gray-200">
            <p>
                <span class="font-medium text-white">First name:</span>
                {{ $user['name'] }}
            </p>

            <p>
                <span class="font-medium text-white">Last name:</span>
                {{ $user['last_name'] }}
            </p>

            <p>
                <span class="font-medium text-white">User ID:</span>
                {{ $user['id'] }}
            </p>
        </div>
    </div>
</section>

@endsection
