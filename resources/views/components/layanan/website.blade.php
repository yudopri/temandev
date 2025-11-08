<x-layouts.app title="TemanDev – Solusi Digital">
<!-- SECTION: HERO LAYANAN -->
<section class="bg-gray-50 py-20">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl font-bold mb-4">Layanan Kami</h1>
    <p class="text-gray-600 text-lg">
      Solusi digital lengkap untuk bisnis Anda – Website.
    </p>
  </div>
</section>


<!-- SECTION: WEBSITE DEVELOPMENT -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6">

    <h2 class="text-3xl font-bold mb-10">Website Development</h2>

    <p class="text-gray-600 mb-10">
      Kami membangun website modern, cepat, responsif, dan SEO-friendly sesuai kebutuhan bisnis Anda.
    </p>

    <!-- Paket Harga -->
    <div class="grid md:grid-cols-3 gap-8">

      <!-- BASIC -->
      <div class="p-6 bg-gray-50 border rounded-xl shadow hover:-translate-y-2 transition">
        <h3 class="text-xl font-bold mb-3">Basic</h3>
        <p class="text-3xl font-bold text-indigo-600 mb-6">Rp 500.000</p>

        <ul class="text-gray-700 space-y-2 mb-6">
          <li>- Landing Page</li>
          <li>- Desain Responsive</li>
          <li>- 1x Revisi</li>
          <li>- Hosting & Domain (opsional)</li>
        </ul>

        <a href="/kontak" class="block text-center bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
          Pesan Sekarang
        </a>
      </div>

      <!-- STANDARD -->
      <div class="p-6 bg-white border rounded-xl shadow hover:-translate-y-2 transition">
        <h3 class="text-xl font-bold mb-3">Standard</h3>
        <p class="text-3xl font-bold text-indigo-600 mb-6">Rp 3.500.000</p>

        <ul class="text-gray-700 space-y-2 mb-6">
          <li>- 3–5 Halaman Website</li>
          <li>- CMS Admin Panel</li>
          <li>- SEO Ready</li>
          <li>- 3x Revisi</li>
        </ul>

        <a href="/kontak" class="block text-center bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
          Pesan Sekarang
        </a>
      </div>

      <!-- PREMIUM -->
      <div class="p-6 bg-gray-50 border rounded-xl shadow hover:-translate-y-2 transition">
        <h3 class="text-xl font-bold mb-3">Premium</h3>
        <p class="text-3xl font-bold text-indigo-600 mb-6">Rp 7.000.000</p>

        <ul class="text-gray-700 space-y-2 mb-6">
          <li>- Custom Website Full</li>
          <li>- Dashboard Admin + API</li>
          <li>- SEO & Security Setup</li>
          <li>- Unlimited Revisi</li>
        </ul>

        <a href="/kontak" class="block text-center bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
          Pesan Sekarang
        </a>
      </div>

    </div>

  <!-- Contoh Project -->
<h3 class="text-2xl font-bold mt-16 mb-8 text-center">Contoh Website</h3>

<div class="grid md:grid-cols-3 gap-8">

  <!-- ITEM -->
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <img src="{{ asset('assets/template/web/gray.png') }}"
         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                transition duration-500 flex items-center justify-center">
      <span class="text-white font-semibold text-lg">Template 1</span>
    </div>
  </div>

  <!-- ITEM -->
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <img src="{{ asset('assets/template/web/landio.png') }}"
         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                transition duration-500 flex items-center justify-center">
      <span class="text-white font-semibold text-lg">Template 2</span>
    </div>
  </div>

 <!-- ITEM -->
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <img src="{{ asset('assets/template/web/sb.png') }}"
         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                transition duration-500 flex items-center justify-center">
      <span class="text-white font-semibold text-lg">Template 3</span>
    </div>
  </div>

  <!-- ITEM -->
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <img src="{{ asset('assets/template/web/shop.png') }}"
         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                transition duration-500 flex items-center justify-center">
      <span class="text-white font-semibold text-lg">Template 4</span>
    </div>
  </div>
  <!-- ITEM -->
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <img src="{{ asset('assets/template/web/studio.png') }}"
         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                transition duration-500 flex items-center justify-center">
      <span class="text-white font-semibold text-lg">Template 5</span>
    </div>
  </div>
<!-- ITEM -->
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <img src="https://via.placeholder.com/400x250"
         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                transition duration-500 flex items-center justify-center">
      <span class="text-white font-semibold text-lg">Project Lainnya</span>
    </div>
  </div>
</div>


  </div>
</section>
 <x-footer />
</x-layouts.app>
