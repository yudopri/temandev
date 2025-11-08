<x-layouts.app title="TemanDev – Solusi Digital">
<section class="py-20 px-6 max-w-7xl mx-auto">

  <!-- JUDUL -->
  <h1 class="text-4xl font-bold text-center mb-6" data-aos="fade-up">
    Hubungi Kami
  </h1>
  <p class="text-gray-600 text-center max-w-2xl mx-auto mb-16" data-aos="fade-up" data-aos-delay="100">
    Ada pertanyaan atau ingin memulai proyek? Silakan hubungi kami melalui formulir atau informasi kontak berikut.
  </p>

  <div class="grid md:grid-cols-2 gap-10">

    <!-- INFO KONTAK -->
    <div class="space-y-8" data-aos="fade-right">

      <div class="flex items-start gap-4">
        <div class="p-3 bg-indigo-600 text-white rounded-xl shadow">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 8l7.89 5.26c.68.45 1.54.45 2.22 0L21 8m-9 13V10" />
          </svg>
        </div>

        <div>
          <h3 class="text-lg font-semibold">Email</h3>
          <p class="text-gray-600">temandevelop@gmail.com</p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <div class="p-3 bg-indigo-600 text-white rounded-xl shadow">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5a2 2 0 012-2h3.28a2 2 0 011.94 1.47l.6 2.4a2 2 0 01-.8 2.23L8.4 10.6c1.2 2.9 3.7 5.4 6.6 6.6l1.5-2a2 2 0 012.23-.8l2.4.6a2 2 0 011.47 1.94V21a2 2 0 01-2 2c-9.94 0-18-8.06-18-18z" />
          </svg>
        </div>

        <div>
          <h3 class="text-lg font-semibold">Telepon / WhatsApp</h3>
          <p class="text-gray-600">+62 897-965-7316</p>
        </div>
      </div>

      <div class="flex items-start gap-4">
        <div class="p-3 bg-indigo-600 text-white rounded-xl shadow">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17.657 16.657L13.414 12l4.243-4.243M6.343 16.657L10.586 12 6.343 7.757" />
          </svg>
        </div>

        <div>
          <h3 class="text-lg font-semibold">Alamat</h3>
          <p class="text-gray-600">
            Surabaya, Jawa Timur — Operasional secara online
          </p>
        </div>
      </div>

      <!-- MAP -->
      <div class="rounded-xl overflow-hidden shadow-lg mt-6">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.93296620012!2d112.72753177496398!3d-7.2621968927340395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9693c5b064b%3A0x7ffe5ad904a90c0d!2sSurabaya%2C%20Kota%20Surabaya%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1731070000000"
          class="w-full h-64 border-0" allowfullscreen="" loading="lazy">
        </iframe>
      </div>

    </div>

    <!-- FORM KONTAK -->
   <!-- FORM KONTAK -->
<div class="bg-white p-8 shadow-lg rounded-xl" data-aos="fade-left">

  <h3 class="text-xl font-bold mb-6">Kirim Pesan</h3>

  <form id="contactForm" class="space-y-6" onsubmit="sendToWhatsapp(event)">

    <div>
      <label class="font-medium block mb-1">Nama Lengkap</label>
      <input id="nama" type="text" required
        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
    </div>

    <div>
      <label class="font-medium block mb-1">Email</label>
      <input id="email" type="email" required
        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
    </div>

    <div>
      <label class="font-medium block mb-1">Pesan</label>
      <textarea id="pesan" required
        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none" rows="4"></textarea>
    </div>

    <button type="submit"
      class="w-full py-3 text-center bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition">
      Kirim ke WhatsApp
    </button>

  </form>

</div>
  </div>

<script>
  function sendToWhatsapp(e) {
    e.preventDefault(); // cegah reload

    let nama = document.getElementById('nama').value;
    let email = document.getElementById('email').value;
    let pesan = document.getElementById('pesan').value;

    // ganti nomor WA tujuan di sini
    let phone = "6281234567890";  // format internasional (62)

    let url =
      `https://wa.me/${phone}?text=` +
      `Halo, saya *${nama}*%0A` +
      `Email: ${email}%0A%0A` +
      `Pesan:%0A${pesan}`;

    window.open(url, "_blank");
  }
</script>
</section>
  <x-footer />
</x-layouts.app>
