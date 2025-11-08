<x-layouts.app title="TemanDev – Solusi Digital">
<!-- SECTION: HERO LAYANAN -->
<section class="bg-gray-50 py-20">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl font-bold mb-4">Layanan Kami</h1>
    <p class="text-gray-600 text-lg">
      Solusi digital lengkap untuk bisnis Anda – Mobile App.
    </p>
  </div>
</section>

<!-- MOBILE APP DEVELOPMENT -->
<section class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-6">

    <h2 class="text-3xl font-bold mb-10">Mobile Apps</h2>

    <p class="text-gray-600 mb-10">
      Pengembangan aplikasi Android & iOS memakai Flutter / Kotlin sesuai kebutuhan bisnis Anda.
    </p>

    <div class="grid md:grid-cols-3 gap-8">

      <!-- BASIC -->
      <div class="p-6 bg-white border rounded-xl shadow hover:-translate-y-2 transition">
        <h3 class="text-xl font-bold mb-3">Starter</h3>
        <p class="text-3xl font-bold text-indigo-600 mb-6">Rp 1.000.000</p>

        <ul class="text-gray-700 space-y-2 mb-6">
          <li>- 2 Halaman App</li>
          <li>- UI Simple</li>
          <li>- 1x Revisi</li>
          <li>- No Backend</li>
        </ul>

        <a href="/kontak" class="bg-indigo-600 text-white py-2 block text-center rounded-lg">
          Pesan Sekarang
        </a>
      </div>

      <!-- STANDARD -->
      <div class="p-6 bg-gray-50 border rounded-xl shadow hover:-translate-y-2 transition">
        <h3 class="text-xl font-bold mb-3">Business</h3>
        <p class="text-3xl font-bold text-indigo-600 mb-6">Rp 6.000.000</p>

        <ul class="text-gray-700 space-y-2 mb-6">
          <li>- 4–6 Halaman App</li>
          <li>- Backend + API</li>
          <li>- Fitur Auth Login</li>
          <li>- 3x Revisi</li>
        </ul>

        <a href="/kontak" class="bg-indigo-600 text-white py-2 block text-center rounded-lg">
          Pesan Sekarang
        </a>
      </div>

      <!-- PREMIUM -->
      <div class="p-6 bg-white border rounded-xl shadow hover:-translate-y-2 transition">
        <h3 class="text-xl font-bold mb-3">Enterprise</h3>
        <p class="text-3xl font-bold text-indigo-600 mb-6">Rp 15.000.000</p>

        <ul class="text-gray-700 space-y-2 mb-6">
          <li>- Full Custom App</li>
          <li>- API Custom & Server</li>
          <li>- Advance Feature (Maps, Payment)</li>
          <li>- Unlimited Revisi</li>
        </ul>

        <a href="/kontak" class="bg-indigo-600 text-white py-2 block text-center rounded-lg">
          Pesan Sekarang
        </a>
      </div>

    </div>

     <!-- Contoh Project -->
<h3 class="text-2xl font-bold mt-16 mb-8 text-center">Contoh Mobile Apps</h3>

<div class="grid md:grid-cols-3 gap-8">

  <!-- ITEM -->
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <img src="{{ asset('assets/website/wba1.png') }}"
         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                transition duration-500 flex items-center justify-center">
      <span class="text-white font-semibold text-lg">Mobile Apps WBA</span>
    </div>
  </div>

  <!-- ITEM -->
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <img src="{{ asset('assets/website/gkm.png') }}"
         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                transition duration-500 flex items-center justify-center">
      <span class="text-white font-semibold text-lg">Mobile Apps GKM</span>
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
