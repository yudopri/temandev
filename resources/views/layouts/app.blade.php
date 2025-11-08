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
  <nav class="bg-white shadow-sm fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
      <div class="flex justify-between items-center h-16">

        <!-- Logo -->
        <a href="/" class="text-xl font-bold text-indigo-600">
          TemanDev
        </a>

        <!-- Menu Desktop -->
        <div class="hidden md:flex space-x-8 text-sm font-medium">
          <a href="/" class="hover:text-indigo-600">Home</a>
          <a href="/layanan" class="hover:text-indigo-600">Layanan</a>
          <a href="/portfolio" class="hover:text-indigo-600">Portfolio</a>
          <a href="/kontak" class="hover:text-indigo-600">Kontak</a>
        </div>

        <!-- Mobile Button -->
        <button id="navBtn" class="md:hidden focus:outline-none">
          <svg id="navIcon" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>

      </div>
    </div>

    <!-- Menu Mobile -->
    <div id="navMenu" class="hidden md:hidden bg-white shadow-inner">
      <div class="px-6 py-4 space-y-3 text-sm font-medium">
        <a href="/" class="block hover:text-indigo-600">Home</a>
        <a href="/layanan" class="block hover:text-indigo-600">Layanan</a>
        <a href="/portfolio" class="block hover:text-indigo-600">Portfolio</a>
        <a href="/kontak" class="block hover:text-indigo-600">Kontak</a>
      </div>
    </div>
  </nav>

  <!-- OFFSET untuk sticky navbar -->
  <div class="h-16"></div>

  <!-- SLOT HALAMAN -->
  {{ $slot }}

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });

    // Mobile Navbar Toggle
    const navBtn = document.getElementById('navBtn');
    const navMenu = document.getElementById('navMenu');

    navBtn.addEventListener('click', () => {
      navMenu.classList.toggle('hidden');
    });
  </script>

</body>
</html>
