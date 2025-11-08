<!-- Portfolio -->
<section id="portfolio" class="py-20 container mx-auto px-6">
  <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Portofolio</h2>

  <div class="grid md:grid-cols-3 gap-10">

    <!-- ITEM 1 -->
    <div class="relative group rounded-xl overflow-hidden shadow-lg" data-aos="zoom-in">
      <img src="{{ asset('assets/website/gkm.png') }}"
           class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">

      <!-- Overlay -->
      <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                  transition duration-500 flex items-center justify-center">
        <span class="text-white text-lg font-semibold">Website GKM</span>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div class="relative group rounded-xl overflow-hidden shadow-lg" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('assets/website/wba1.png') }}"
           class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">

      <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                  transition duration-500 flex items-center justify-center">
        <span class="text-white text-lg font-semibold">Website WBA</span>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div class="relative group rounded-xl overflow-hidden shadow-lg" data-aos="zoom-in" data-aos-delay="200">
      <img src="https://via.placeholder.com/400x250"
           class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">

      <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100
                  transition duration-500 flex items-center justify-center">
        <span class="text-white text-lg font-semibold">Project Lainnya</span>
      </div>
    </div>

  </div>
</section>
