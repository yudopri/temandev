<!-- Contact -->
<section id="kontak" class="py-16 container mx-auto px-6 text-center">
  <h2 class="text-3xl font-bold mb-8" data-aos="zoom-in">Siap Membangun Proyek Bersama?</h2>
  <form id="contactForm" class="max-w-lg mx-auto space-y-4" data-aos="fade-up">
    <input type="text" id="name" placeholder="Nama" class="w-full p-3 border rounded-xl focus:ring-2 focus:ring-blue-500" required>
    <textarea id="message" placeholder="Pesan" class="w-full p-3 border rounded-xl focus:ring-2 focus:ring-blue-500" required></textarea>
    <button type="submit" class="block bg-green-500 text-white py-3 rounded-xl shadow hover:bg-green-600 transition w-full">Hubungi via WhatsApp</button>
  </form>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault(); // cegah form reload
  const name = encodeURIComponent(document.getElementById('name').value);
  const message = encodeURIComponent(document.getElementById('message').value);

  const waNumber = "628979657316"; // ganti nomor WA
  const text = `Halo, nama saya ${name}. Pesan: ${message}`;
  const url = `https://wa.me/${waNumber}?text=${text}`;

  window.open(url, '_blank'); // buka WA di tab baru
});
</script>
