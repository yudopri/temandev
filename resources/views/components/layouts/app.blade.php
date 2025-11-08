<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'TemanDev – Solusi Digital' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="font-sans text-gray-800">

 <!-- NAVBAR -->
<nav class="bg-white fixed top-0 left-0 w-full shadow-sm z-50">
  <div class="max-w-7xl mx-auto px-4 md:px-8">
    <div class="h-16 flex items-center justify-between">

      <!-- LOGO -->
      <a href="/" class="text-xl font-bold text-indigo-600">
        TemanDev
      </a>

      <!-- MENU DESKTOP -->
      <div class="hidden md:flex items-center space-x-8 text-sm font-medium">

        <a href="/" class="hover:text-indigo-600">Home</a>

        <!-- DROPDOWN KLIK -->
        <div class="relative">
          <button id="dropdownBtn" class="flex items-center gap-1 hover:text-indigo-600 transition">
            Layanan
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 rotate-0 transition" id="dropdownIcon"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 9l-7 7-7-7" />
            </svg>
          </button>

          <!-- MENU -->
          <div id="dropdownMenu" class="absolute left-0 bg-white border shadow-lg rounded-lg mt-3 w-48 hidden">
            <div class="py-2">

              <a href="/layanan/web-development"
                class="block px-4 py-2 hover:bg-gray-100">Web Development</a>

              <a href="/layanan/mobile-apps"
                class="block px-4 py-2 hover:bg-gray-100">Mobile Apps</a>

              <a href="/layanan/iot"
                class="block px-4 py-2 hover:bg-gray-100">IoT Solutions</a>

            </div>
          </div>
        </div>

        <a href="/portfolio" class="hover:text-indigo-600">Portfolio</a>
        <a href="/kontak" class="hover:text-indigo-600">Kontak</a>
      </div>

      <!-- MOBILE BUTTON -->
      <button id="navBtn" class="md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- MENU MOBILE -->
  <div id="navMenu" class="hidden md:hidden bg-white shadow-inner">
    <div class="px-6 py-4 space-y-3 text-sm font-medium">

      <a href="/" class="block hover:text-indigo-600">Home</a>

      <details>
        <summary class="cursor-pointer hover:text-indigo-600">Layanan</summary>
        <div class="mt-2 ml-4 space-y-2">
          <a href="/layanan/web-development" class="block hover:text-indigo-600">Web Development</a>
          <a href="/layanan/mobile-apps" class="block hover:text-indigo-600">Mobile Apps</a>
          <a href="/layanan/iot" class="block hover:text-indigo-600">IoT Solutions</a>
        </div>
      </details>

      <a href="/portfolio" class="block hover:text-indigo-600">Portfolio</a>
      <a href="/kontak" class="block hover:text-indigo-600">Kontak</a>

    </div>
  </div>
</nav>

<!-- OFFSET -->
<div class="h-16"></div>


  <!-- SLOT HALAMAN -->
  {{ $slot }}

  <!-- SCRIPT -->
<script>
  // Dropdown klik desktop
  const dropdownBtn = document.getElementById('dropdownBtn');
  const dropdownMenu = document.getElementById('dropdownMenu');
  const dropdownIcon = document.getElementById('dropdownIcon');

  dropdownBtn.addEventListener('click', () => {
    dropdownMenu.classList.toggle('hidden');
    dropdownIcon.classList.toggle('rotate-180');
  });

  // Klik di luar dropdown → tutup
  document.addEventListener('click', function(e) {
    if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
      dropdownMenu.classList.add('hidden');
      dropdownIcon.classList.remove('rotate-180');
    }
  });

  // Mobile toggle
  const navBtn = document.getElementById('navBtn');
  const navMenu = document.getElementById('navMenu');
  navBtn.addEventListener('click', () => {
    navMenu.classList.toggle('hidden');
  });
</script>
</body>
</html>
