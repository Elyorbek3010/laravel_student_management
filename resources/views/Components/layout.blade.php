<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white">

<div class="min-h-full">
  <!-- NAVBAR -->
  <nav class="bg-gray-800/70 backdrop-blur border-b border-white/10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center gap-3">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
               alt="Logo" class="h-8 w-8">
          <span class="font-semibold hidden sm:block">My App</span>
        </div>

        <!-- Desktop menu -->
        <div class="hidden md:flex items-center gap-4">
          @php
            function navClass($path) {
              return request()->is($path)
                ? 'bg-gray-950/50 text-white'
                : 'text-gray-300 hover:bg-white/5 hover:text-white';
            }
          @endphp

          <a href="/" class="{{ navClass('/') }} px-3 py-2 rounded-md text-sm">Home</a>
          <a href="/users" class="{{ navClass('users') }} px-3 py-2 rounded-md text-sm">Users</a>
          <a href="/students" class="{{ navClass('students') }} px-3 py-2 rounded-md text-sm">Students</a>

          <a href="/students/create"
             class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold hover:bg-indigo-600">
            Create Student
          </a>

          @guest
            <a href="/register" class="{{ navClass('register') }} px-3 py-2 rounded-md text-sm">Register</a>
            <a href="/login" class="{{ navClass('login') }} px-3 py-2 rounded-md text-sm">Login</a>
          @endguest

          @auth
            <form method="POST" action="/logout">
              @csrf
              <button type="submit"
                      class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold hover:bg-orange-700">
                Log Out
              </button>
            </form>
          @endauth
        </div>

        <!-- Mobile button -->
        <button id="menuBtn"
                class="md:hidden inline-flex items-center justify-center rounded-md p-2
                       text-gray-300 hover:bg-white/10 hover:text-white">
          ☰
        </button>
      </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden md:hidden border-t border-white/10 bg-gray-900">
      <div class="space-y-1 px-4 py-3">

        <a href="/" class="block px-3 py-2 rounded-md text-sm {{ navClass('/') }}">Home</a>
        <a href="/users" class="block px-3 py-2 rounded-md text-sm {{ navClass('users') }}">Users</a>
        <a href="/students" class="block px-3 py-2 rounded-md text-sm {{ navClass('students') }}">Students</a>

        <a href="/students/create"
           class="block rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-center">
          Create Student
        </a>

        @guest
          <a href="/register" class="block px-3 py-2 rounded-md text-sm {{ navClass('register') }}">Register</a>
          <a href="/login" class="block px-3 py-2 rounded-md text-sm {{ navClass('login') }}">Login</a>
        @endguest

        @auth
          <form method="POST" action="/logout" class="pt-2">
            @csrf
            <button type="submit"
                    class="w-full rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold hover:bg-orange-700">
              Log Out
            </button>
          </form>
        @endauth

      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header class="bg-gray-800 border-b border-white/10">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-2xl sm:text-3xl font-bold tracking-tight">
        {{ $heading }}
      </h1>
    </div>
  </header>

  <!-- CONTENT -->
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>

<!-- SIMPLE TOGGLE SCRIPT -->
<script>
  const btn = document.getElementById('menuBtn');
  const menu = document.getElementById('mobileMenu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>

</body>
</html>
