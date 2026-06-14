<?php
  $pageTitle = "Kontak – Ilham Bakery";
  $cssPath   = "";
  $rootPath  = "";
  require_once "includes/header.php";
?>

<!-- HERO KONTAK -->
<section style="background: linear-gradient(135deg, var(--cream) 55%, var(--rose-light) 100%); padding: 8rem 0 4rem;">
  <div class="container text-center">
    <span class="section-label">Hubungi Kami</span>
    <h1 style="color:var(--chocolate); margin-bottom:.75rem;">Kami Siap Membantu</h1>
    <p style="color:var(--muted); max-width:480px; margin:0 auto;">Ada pertanyaan, ingin pesan custom, atau sekadar ngobrol soal kue? Kami dengan senang hati mendengarmu.</p>
  </div>
</section>

<!-- KONTEN UTAMA -->
<section class="section-py">
  <div class="container">
    <div class="row g-5 align-items-start">

      <!-- KIRI: Info Kontak -->
      <div class="col-lg-5">
        <h2 style="font-family:var(--ff-display); color:var(--chocolate); margin-bottom:1.5rem; font-size:1.8rem;">Temukan Kami</h2>

        <div class="kontak-info-card">
          <div class="kontak-icon">📍</div>
          <div>
            <div class="kontak-label">Alamat Toko</div>
            <div class="kontak-val">Jl. Sidokepung, Kec. Buduran,<br>Kab. Sidoarjo, Jawa Timur</div>
          </div>
        </div>

        <div class="kontak-info-card">
          <div class="kontak-icon">📞</div>
          <div>
            <div class="kontak-label">WhatsApp / Telepon</div>
            <div class="kontak-val">
              <a href="https://wa.me/6281252134449" target="_blank" style="color:var(--rose); font-weight:600;">+62 812-5213-4449</a>
            </div>
          </div>
        </div>

        <div class="kontak-info-card">
          <div class="kontak-icon">✉️</div>
          <div>
            <div class="kontak-label">Email</div>
            <div class="kontak-val">
              <a href="mailto:hello@ilhambakery.id" style="color:var(--rose); font-weight:600;">hello@ilhambakery.id</a>
            </div>
          </div>
        </div>

        <div class="kontak-info-card">
          <div class="kontak-icon">🕐</div>
          <div>
            <div class="kontak-label">Jam Operasional</div>
            <div class="kontak-val">
              Senin – Sabtu: 08.00 – 20.00<br>
              <span style="color:var(--muted); font-size:.85rem;">Minggu & Hari Libur: 09.00 – 17.00</span>
            </div>
          </div>
        </div>

        <!-- Sosial Media -->
        <div style="margin-top:2rem;">
          <div style="font-weight:600; color:var(--chocolate); margin-bottom:.75rem; font-size:.85rem; text-transform:uppercase; letter-spacing:.08em;">Ikuti Kami</div>
          <div style="display:flex; gap:.75rem; flex-wrap:wrap;">
            <a href="#" class="sosmed-btn"><i class="bi bi-instagram"></i> Instagram</a>
            <a href="#" class="sosmed-btn"><i class="bi bi-tiktok"></i> TikTok</a>
            <a href="#" class="sosmed-btn"><i class="bi bi-facebook"></i> Facebook</a>
          </div>
        </div>
      </div>

      <!-- KANAN: Form Pesan + Map -->
      <div class="col-lg-7">

        <!-- Form Kirim Pesan -->
        <div class="kontak-form-wrap">
          <h3 style="font-family:var(--ff-display); color:var(--chocolate); margin-bottom:1.5rem;">Kirim Pesan</h3>
          <div id="formMsg" class="alert d-none"></div>
          <div class="row g-3">
            <div class="col-sm-6">
              <label class="form-label" style="font-size:.88rem; font-weight:500;">Nama Lengkap</label>
              <input type="text" class="form-control" id="kontakNama" placeholder="Nama kamu"/>
            </div>
            <div class="col-sm-6">
              <label class="form-label" style="font-size:.88rem; font-weight:500;">Nomor WhatsApp</label>
              <input type="text" class="form-control" id="kontakWA" placeholder="08xx-xxxx-xxxx"/>
            </div>
            <div class="col-12">
              <label class="form-label" style="font-size:.88rem; font-weight:500;">Topik</label>
              <select class="form-control" id="kontakTopik">
                <option value="">-- Pilih topik --</option>
                <option>Pemesanan Custom Cake</option>
                <option>Pertanyaan Produk</option>
                <option>Info Harga & Paket</option>
                <option>Pengiriman & Delivery</option>
                <option>Lainnya</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label" style="font-size:.88rem; font-weight:500;">Pesan</label>
              <textarea class="form-control" id="kontakPesan" rows="4" placeholder="Ceritakan kebutuhanmu..."></textarea>
            </div>
            <div class="col-12">
              <button class="btn-primary-custom w-100 justify-content-center" onclick="kirimPesan()" style="display:flex;">
                <i class="bi bi-whatsapp me-2"></i> Kirim via WhatsApp
              </button>
              <p style="font-size:.78rem; color:var(--muted); margin-top:.5rem; text-align:center;">Kamu akan diarahkan ke WhatsApp untuk menyelesaikan pengiriman pesan.</p>
            </div>
          </div>
        </div>

        <!-- Peta Lokasi (embed placeholder) -->
        <div style="margin-top:1.75rem; border-radius:var(--radius); overflow:hidden; box-shadow:var(--shadow);">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.478!2d112.7160!3d-7.4510!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjcnMDMuNiJTIDExMsKwNDMnMDMuNiJF!5e0!3m2!1sid!2sid!4v1234567890"
            width="100%" height="240" style="border:0; display:block;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" title="Lokasi Ilham Bakery"></iframe>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- FAQ SINGKAT -->
<section class="section-py" style="background:var(--gray);">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">FAQ</span>
      <h2 class="section-title">Pertanyaan Umum</h2>
    </div>
    <div class="row g-3 justify-content-center">
      <div class="col-lg-8">

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            Berapa lama proses pembuatan custom cake? <i class="bi bi-chevron-down faq-icon"></i>
          </div>
          <div class="faq-a">Untuk custom cake standar membutuhkan waktu 2–3 hari. Wedding cake atau kue dengan dekorasi kompleks perlu 5–7 hari. Disarankan memesan minimal 1 minggu sebelum acara.</div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            Apakah tersedia pengiriman ke luar Sidoarjo? <i class="bi bi-chevron-down faq-icon"></i>
          </div>
          <div class="faq-a">Ya, kami melayani pengiriman ke seluruh wilayah Surabaya, Sidoarjo, Malang, dan sekitarnya. Untuk wilayah lain silakan hubungi kami untuk konfirmasi ongkos kirim.</div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            Bagaimana cara memesan? <i class="bi bi-chevron-down faq-icon"></i>
          </div>
          <div class="faq-a">Kamu bisa memesan langsung lewat WhatsApp kami di nomor +62 812-5213-4449. Ceritakan jenis kue, ukuran, tanggal acara, dan referensi desain (jika ada). Tim kami akan segera merespons.</div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            Apakah ada minimum pemesanan? <i class="bi bi-chevron-down faq-icon"></i>
          </div>
          <div class="faq-a">Tidak ada minimum pemesanan. Kamu bisa memesan mulai dari 1 buah croissant hingga kue pernikahan 3 tingkat. Untuk pesanan dalam jumlah besar kami menyediakan harga spesial.</div>
        </div>

        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">
            Metode pembayaran apa saja yang diterima? <i class="bi bi-chevron-down faq-icon"></i>
          </div>
          <div class="faq-a">Kami menerima transfer bank (BCA, Mandiri, BRI), QRIS, serta COD untuk wilayah Sidoarjo dan sekitarnya. Pembayaran DP sebesar 50% diperlukan untuk pesanan custom.</div>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
  .kontak-info-card {
    display: flex;
    gap: 1rem;
    align-items: flex-start;
    background: var(--white);
    border-radius: var(--radius);
    padding: 1.25rem 1.5rem;
    margin-bottom: .75rem;
    border: 1px solid rgba(201,112,108,.1);
    transition: box-shadow .2s;
  }
  .kontak-info-card:hover { box-shadow: var(--shadow); }
  .kontak-icon {
    font-size: 1.5rem;
    width: 48px; height: 48px;
    background: var(--rose-light);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
  }
  .kontak-label { font-size: .78rem; font-weight: 600; color: var(--muted); text-transform: uppercase; letter-spacing: .08em; margin-bottom: .2rem; }
  .kontak-val { color: var(--text); font-size: .92rem; line-height: 1.5; }

  .kontak-form-wrap {
    background: var(--white);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: var(--shadow);
  }

  .sosmed-btn {
    display: inline-flex; align-items: center; gap: .4rem;
    border: 1.5px solid rgba(201,112,108,.3);
    color: var(--text);
    border-radius: 50px;
    padding: .4rem 1rem;
    font-size: .85rem;
    font-weight: 500;
    transition: all .2s;
  }
  .sosmed-btn:hover { background: var(--rose); border-color: var(--rose); color: var(--white); }

  .faq-item {
    background: var(--white);
    border-radius: var(--radius);
    margin-bottom: .75rem;
    border: 1px solid rgba(201,112,108,.1);
    overflow: hidden;
  }
  .faq-q {
    display: flex; align-items: center; justify-content: space-between;
    padding: 1.1rem 1.5rem;
    font-weight: 600; font-size: .95rem; color: var(--chocolate);
    cursor: pointer; transition: background .2s;
  }
  .faq-q:hover { background: var(--rose-light); }
  .faq-icon { transition: transform .3s; flex-shrink: 0; color: var(--rose); }
  .faq-q.open .faq-icon { transform: rotate(180deg); }
  .faq-a {
    max-height: 0; overflow: hidden; transition: max-height .35s ease, padding .2s;
    font-size: .9rem; color: var(--muted); line-height: 1.65;
    padding: 0 1.5rem;
  }
  .faq-a.open { max-height: 200px; padding: 0 1.5rem 1.25rem; }
</style>

<script>
  function kirimPesan() {
    const nama   = document.getElementById('kontakNama').value.trim();
    const wa     = document.getElementById('kontakWA').value.trim();
    const topik  = document.getElementById('kontakTopik').value;
    const pesan  = document.getElementById('kontakPesan').value.trim();
    const msg    = document.getElementById('formMsg');

    if (!nama || !wa || !topik || !pesan) {
      msg.className = 'alert alert-warning';
      msg.textContent = 'Semua kolom wajib diisi.';
      msg.classList.remove('d-none');
      setTimeout(() => msg.classList.add('d-none'), 3000);
      return;
    }

    const teks = `Halo Ilham Bakery! 🍰\n\nNama: ${nama}\nNo. WA: ${wa}\nTopik: ${topik}\n\nPesan:\n${pesan}`;
    window.open('https://wa.me/6281252134449?text=' + encodeURIComponent(teks), '_blank');
  }

  function toggleFaq(el) {
    const answer = el.nextElementSibling;
    const isOpen = el.classList.contains('open');
    // tutup semua
    document.querySelectorAll('.faq-q.open').forEach(q => {
      q.classList.remove('open');
      q.nextElementSibling.classList.remove('open');
    });
    if (!isOpen) {
      el.classList.add('open');
      answer.classList.add('open');
    }
  }
</script>

<?php require_once "includes/footer.php"; ?>
