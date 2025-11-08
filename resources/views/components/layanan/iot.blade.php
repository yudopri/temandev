<x-layouts.app title="TemanDev – Solusi Digital">
  <!-- SECTION: HERO LAYANAN -->
<section class="bg-gray-50 py-20">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-4xl font-bold mb-4">Layanan Kami</h1>
    <p class="text-gray-600 text-lg">
      Solusi digital lengkap untuk bisnis Anda – IoT Solutions.
    </p>
  </div>
</section>

<!-- IOT DEVELOPMENT -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-6">

    <h2 class="text-3xl font-bold mb-10">IoT Solutions</h2>

    <p class="text-gray-600 mb-10">
      Sistem IoT untuk otomasi, monitoring real-time, integrasi sensor, hingga dashboard pengawasan.
    </p>

    <div class="grid md:grid-cols-3 gap-8">

      <!-- BASIC -->
      <div class="p-6 bg-gray-50 border rounded-xl shadow hover:-translate-y-2 transition">
        <h3 class="text-xl font-bold mb-3">Monitoring</h3>
        <p class="text-3xl font-bold text-indigo-600 mb-6">Rp 2.000.000</p>

        <ul class="text-gray-700 space-y-2 mb-6">
          <li>- Sensor pH, TDS, Suhu</li>
          <li>- ESP32</li>
          <li>- Dashboard Dashboard Web</li>
          <li>- 1x Revisi</li>
        </ul>

        <a href="/kontak" class="bg-indigo-600 text-white py-2 block text-center rounded-lg">
          Pesan Sekarang
        </a>
      </div>

      <!-- STANDARD -->
      <div class="p-6 bg-white border rounded-xl shadow hover:-translate-y-2 transition">
        <h3 class="text-xl font-bold mb-3">Automation</h3>
        <p class="text-3xl font-bold text-indigo-600 mb-6">Rp 6.000.000</p>

        <ul class="text-gray-700 space-y-2 mb-6">
          <li>- Sensor Lengkap + Relay Otomatis</li>
          <li>- Realtime Warning</li>
          <li>- Dashboard Lengkap</li>
          <li>- 3x Revisi</li>
        </ul>

        <a href="/kontak" class="bg-indigo-600 text-white py-2 block text-center rounded-lg">
          Pesan Sekarang
        </a>
      </div>

      <!-- PREMIUM -->
      <div class="p-6 bg-gray-50 border rounded-xl shadow hover:-translate-y-2 transition">
        <h3 class="text-xl font-bold mb-3">Enterprise IoT</h3>
        <p class="text-3xl font-bold text-indigo-600 mb-6">Rp 12.000.000</p>

        <ul class="text-gray-700 space-y-2 mb-6">
          <li>- Full System</li>
          <li>- AI Monitoring (opsional)</li>
          <li>- Notifikasi Telegram/Email</li>
          <li>- Unlimited Revisi</li>
        </ul>

        <a href="/kontak" class="bg-indigo-600 text-white py-2 block text-center rounded-lg">
          Pesan Sekarang
        </a>
      </div>

    </div>

    <!-- Contoh Project -->
<h3 class="text-2xl font-bold mt-16 mb-8 text-center">Contoh IoT</h3>

<div class="grid md:grid-cols-3 gap-8">

  <!-- ITEM -->
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <img src="{{ asset('assets/website/wba1.png') }}"
         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                transition duration-500 flex items-center justify-center">
      <span class="text-white font-semibold text-lg">Website WBA</span>
    </div>
  </div>

  <!-- ITEM -->
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <img src="{{ asset('assets/website/gkm.png') }}"
         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                transition duration-500 flex items-center justify-center">
      <span class="text-white font-semibold text-lg">Website GKM</span>
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

