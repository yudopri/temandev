<x-layouts.app title="TemanDev – Solusi Digital">
<section class="py-20 px-6 max-w-7xl mx-auto">

  <h1 class="text-4xl font-bold text-center mb-12" data-aos="fade-up">
    Portofolio Kami
  </h1>

  <!-- KATEGORI -->
  <div class="flex justify-center gap-4 mb-10">
    <button class="px-5 py-2 rounded-full font-semibold bg-indigo-600 text-white filter-btn" data-filter="all">
      Semua
    </button>

    <button class="px-5 py-2 rounded-full font-semibold bg-gray-200 hover:bg-indigo-100 filter-btn" data-filter="web">
      Website
    </button>

    <button class="px-5 py-2 rounded-full font-semibold bg-gray-200 hover:bg-indigo-100 filter-btn" data-filter="mobile">
      Mobile App
    </button>

    <button class="px-5 py-2 rounded-full font-semibold bg-gray-200 hover:bg-indigo-100 filter-btn" data-filter="iot">
      IoT System
    </button>
  </div>

  <!-- GRID PORTOFOLIO -->
  <div id="portfolioList" class="grid md:grid-cols-3 gap-10">

    <!-- WEBSITE ITEMS -->
    <div class="portfolio-item web relative group rounded-xl overflow-hidden shadow-lg" data-aos="zoom-in">
      <img src="{{ asset('assets/website/gkm.png') }}" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
      <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
        <span class="text-white text-xl font-semibold">Website GKM</span>
      </div>
    </div>

    <div class="portfolio-item web relative group rounded-xl overflow-hidden shadow-lg" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('assets/website/wba1.png') }}" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
      <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
        <span class="text-white text-xl font-semibold">Website WBA</span>
      </div>
    </div>

    <!-- MOBILE ITEMS -->
    <div class="portfolio-item mobile relative group rounded-xl overflow-hidden shadow-lg hidden" data-aos="zoom-in">
      <img src="{{ asset('assets/mobile/mobile1.png') }}" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
      <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
        <span class="text-white text-xl font-semibold">Aplikasi Booking</span>
      </div>
    </div>

    <div class="portfolio-item mobile relative group rounded-xl overflow-hidden shadow-lg hidden" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('assets/mobile/mobile2.png') }}" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
      <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
        <span class="text-white text-xl font-semibold">Aplikasi Edukasi</span>
      </div>
    </div>

    <!-- IOT ITEMS -->
    <div class="portfolio-item iot relative group rounded-xl overflow-hidden shadow-lg hidden" data-aos="zoom-in">
      <img src="{{ asset('assets/iot/iot1.png') }}" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
      <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
        <span class="text-white text-xl font-semibold">Monitoring Tambak</span>
      </div>
    </div>

    <div class="portfolio-item iot relative group rounded-xl overflow-hidden shadow-lg hidden" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('assets/iot/iot2.png') }}" class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
      <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
        <span class="text-white text-xl font-semibold">Sistem Otomasi</span>
      </div>
    </div>

  </div>

</section>

<!-- SCRIPT FILTER -->
<script>
  const buttons = document.querySelectorAll('.filter-btn');
  const items = document.querySelectorAll('.portfolio-item');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.getAttribute('data-filter');

      // Style active button
      buttons.forEach(b => b.classList.remove('bg-indigo-600', 'text-white'));
      btn.classList.add('bg-indigo-600', 'text-white');

      // Filter items
      items.forEach(item => {
        if (filter === 'all' || item.classList.contains(filter)) {
          item.classList.remove('hidden');
          item.classList.add('block');
        } else {
          item.classList.add('hidden');
        }
      });

    });
  });
</script>
 <x-footer />
</x-layouts.app>
