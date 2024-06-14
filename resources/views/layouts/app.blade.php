<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  x-data="{ isOpen: false }">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="font-poppins antialiased" x-data="{ dropdownOpen: false, dropdownOpen2: false, dropdownOpen3: false, dropdownOpen4: false }">
  <div class="flex flex-col h-screen">
    <!-- Header -->
    <div class="flex-none">
      <x-header></x-header>
    </div>
    <!-- Main content -->
    <div class="flex flex-1">
      <!-- Sidebar -->
      <div :class="isOpen ? 'w-60" class="bg-black flex-none transition-all duration-300">
        <x-sidenav></x-sidenav>
      </div>
      <!-- Content Area -->
      <div class="flex-1 overflow-y-auto p-4">
        <main>
          <div>
            {{ $slot }}
          </div>
        </main>
      </div>
    </div>
  </div>
</body>
</html>
