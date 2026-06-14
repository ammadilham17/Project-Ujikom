<?php
  $pageTitle = "Ilham Bakery – Toko Kue Artisan Terbaik";
  $cssPath   = "";
  $rootPath  = "";
  require_once "includes/header.php";
?>

<!-- ==================== HERO ==================== -->
<section id="hero">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6">
        <span class="hero-eyebrow">🌸 Kue Artisan Pilihan</span>
        <h1 class="hero-title">
          Setiap Gigitan adalah<br><em>Kebahagiaan</em>
        </h1>
        <p class="hero-sub">
          Kue premium buatan tangan dengan bahan berkualitas tinggi.
          Cocok untuk semua momen berharga dalam hidupmu.
        </p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="produk/index.php" class="btn-primary-custom">
            Lihat Produk <i class="bi bi-arrow-right"></i>
          </a>
          <a href="#mengapa" class="btn-ghost">Kenapa Kami?</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-visual">
          <div class="hero-cake-wrap">🎂</div>
          <div class="hero-badge hero-badge-1">
            <span>⭐</span> 4.9 Rating · 2.3k ulasan
          </div>
          <div class="hero-badge hero-badge-2">
            <span>🚀</span> Pengiriman Same-Day
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== STATS ==================== -->
<section class="stats-bar">
  <div class="container">
    <div class="row text-center gy-4">
      <div class="col-6 col-md-3">
        <div class="stat-num">12K+</div>
        <div class="stat-label">Pelanggan Puas</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-num">80+</div>
        <div class="stat-label">Varian Kue</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-num">7 Thn</div>
        <div class="stat-label">Pengalaman</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-num">4.9★</div>
        <div class="stat-label">Rata-rata Rating</div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== PRODUK UNGGULAN ==================== -->
<section class="section-py" id="produk-unggulan">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Menu Terlaris</span>
      <h2 class="section-title">Produk Unggulan Kami</h2>
      <p class="section-sub mx-auto">Kue-kue terbaik yang paling banyak dipesan oleh pelanggan setia Ilham Bakery</p>
    </div>
    <div class="row g-4">

      <div class="col-lg-4 col-md-6">
        <div class="produk-card h-100" onclick="bukaModalProduk('Black Forest Supreme','Rp 320.000','Lapisan cokelat lembut dengan ceri segar dan krim whip premium. Ukuran 18cm.','img/Black%20Forest%20Supreme.jpg','Birthday Cake',5)">
          <div class="produk-img">
            <img src="img/Black%20Forest%20Supreme.jpg" alt="Black Forest Supreme" class="produk-card-img" onclick="bukaModalProduk('Black Forest Supreme','Rp 320.000','Lapisan cokelat lembut dengan ceri segar dan krim whip premium. Ukuran 18cm.','img/Black%20Forest%20Supreme.jpg','Birthday Cake',5)" />
            <span class="produk-badge-tag">Best Seller</span>
          </div>
          <div class="produk-body">
            <div class="produk-name">Black Forest Supreme</div>
            <div class="produk-desc">Lapisan cokelat lembut dengan ceri segar dan krim whip premium. Ukuran 18cm.</div>
            <div class="produk-footer">
              <span class="produk-price">Rp 320.000</span>
              <button class="btn-pesan">Pesan</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="produk-card h-100" onclick="bukaModalProduk('Red Velvet Dream','Rp 280.000','Kue merah beludru klasik dengan cream cheese frosting yang kaya rasa.','img/Red%20Velvet%20Dream.jpg','Birthday Cake',5)">
          <div class="produk-img">
            <img src="img/Red%20Velvet%20Dream.jpg" alt="Red Velvet Dream" class="produk-card-img" onclick="bukaModalProduk('Red Velvet Dream','Rp 280.000','Kue merah beludru klasik dengan cream cheese frosting yang kaya rasa.','img/Red%20Velvet%20Dream.jpg','Birthday Cake',5)" />
            <span class="produk-badge-tag">Favorit</span>
          </div>
          <div class="produk-body">
            <div class="produk-name">Red Velvet Dream</div>
            <div class="produk-desc">Kue merah beludru klasik dengan cream cheese frosting yang kaya rasa.</div>
            <div class="produk-footer">
              <span class="produk-price">Rp 280.000</span>
              <button class="btn-pesan">Pesan</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="produk-card h-100" onclick="bukaModalProduk('Butter Croissant','Rp 35.000','Croissant berlapis mentega premium, renyah di luar lembut di dalam.','img/Butter%20Croissant.jpg','Pastry',4)">
          <div class="produk-img">
            <img src="img/Butter%20Croissant.jpg" alt="Butter Croissant" class="produk-card-img" onclick="bukaModalProduk('Butter Croissant','Rp 35.000','Croissant berlapis mentega premium, renyah di luar lembut di dalam.','img/Butter%20Croissant.jpg','Pastry',4)" />
            <span class="produk-badge-tag">Fresh Daily</span>
          </div>
          <div class="produk-body">
            <div class="produk-name">Butter Croissant</div>
            <div class="produk-desc">Croissant berlapis mentega premium, renyah di luar lembut di dalam.</div>
            <div class="produk-footer">
              <span class="produk-price">Rp 35.000</span>
              <button class="btn-pesan">Pesan</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="produk-card h-100" onclick="bukaModalProduk('Rainbow Cupcake (6pcs)','Rp 120.000','Cupcake warna-warni dengan frosting lembut berbagai rasa yang menawan.','img/Rainbow%20Cupcake.jpg','Cupcake',4)">
          <div class="produk-img">
            <img src="img/Rainbow%20Cupcake.jpg" alt="Rainbow Cupcake" class="produk-card-img" onclick="bukaModalProduk('Rainbow Cupcake (6pcs)','Rp 120.000','Cupcake warna-warni dengan frosting lembut berbagai rasa yang menawan.','img/Rainbow%20Cupcake.jpg','Cupcake',4)" />
            <span class="produk-badge-tag">Colorful</span>
          </div>
          <div class="produk-body">
            <div class="produk-name">Rainbow Cupcake (6pcs)</div>
            <div class="produk-desc">Cupcake warna-warni dengan frosting lembut berbagai rasa yang menawan.</div>
            <div class="produk-footer">
              <span class="produk-price">Rp 120.000</span>
              <button class="btn-pesan">Pesan</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="produk-card h-100" onclick="bukaModalProduk('Molten Lava Cake','Rp 65.000','Kue cokelat hangat dengan isi lelehan cokelat di tengah. Disajikan fresh.','img/Molten%20Lava%20Cake.jpg','Specialty',5)">
          <div class="produk-img">
            <img src="img/Molten%20Lava%20Cake.jpg" alt="Molten Lava Cake" class="produk-card-img" onclick="bukaModalProduk('Molten Lava Cake','Rp 65.000','Kue cokelat hangat dengan isi lelehan cokelat di tengah. Disajikan fresh.','img/Molten%20Lava%20Cake.jpg','Specialty',5)" />
            <span class="produk-badge-tag">Hot Item</span>
          </div>
          <div class="produk-body">
            <div class="produk-name">Molten Lava Cake</div>
            <div class="produk-desc">Kue cokelat hangat dengan isi lelehan cokelat di tengah. Disajikan fresh.</div>
            <div class="produk-footer">
              <span class="produk-price">Rp 65.000</span>
              <button class="btn-pesan">Pesan</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="produk-card h-100" onclick="bukaModalProduk('Wedding Tier Cake','Rp 1.500.000','Kue pernikahan 3 tingkat dengan dekorasi premium, bisa custom sesuai tema.','img/Wedding%20Tier%20Cake.jpg','Wedding Cake',5)">
          <div class="produk-img">
            <img src="img/Wedding%20Tier%20Cake.jpg" alt="Wedding Tier Cake" class="produk-card-img" onclick="bukaModalProduk('Wedding Tier Cake','Rp 1.500.000','Kue pernikahan 3 tingkat dengan dekorasi premium, bisa custom sesuai tema.','img/Wedding%20Tier%20Cake.jpg','Wedding Cake',5)" />
            <span class="produk-badge-tag">Custom</span>
          </div>
          <div class="produk-body">
            <div class="produk-name">Wedding Tier Cake</div>
            <div class="produk-desc">Kue pernikahan 3 tingkat dengan dekorasi premium, bisa custom sesuai tema.</div>
            <div class="produk-footer">
              <span class="produk-price">Rp 1.500.000</span>
              <button class="btn-pesan">Pesan</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="text-center mt-5">
      <a href="produk/index.php" class="btn-primary-custom">
        Lihat Semua Produk <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- ==================== MENGAPA KAMI ==================== -->
<section class="section-py" id="mengapa" style="background: var(--gray);">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-5">
        <span class="section-label">Keunggulan Kami</span>
        <h2 class="section-title">Mengapa Memilih Ilham Bakery?</h2>
        <p style="color:var(--muted);margin-bottom:1.5rem;">Kami bukan sekadar toko kue biasa. Setiap produk kami dibuat dengan dedikasi penuh untuk memastikan pengalaman terbaik buat kamu.</p>
        <a href="produk/index.php" class="btn-primary-custom">Coba Sekarang</a>
      </div>
      <div class="col-lg-7">
        <div class="row g-3">
          <div class="col-sm-6">
            <div class="why-card">
              <div class="why-icon">🌾</div>
              <div class="why-title">Bahan Alami Premium</div>
              <div class="why-desc">Kami hanya menggunakan bahan pilihan berkualitas tinggi tanpa pengawet buatan.</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="why-card">
              <div class="why-icon">👩‍🍳</div>
              <div class="why-title">Chef Berpengalaman</div>
              <div class="why-desc">Tim kami terdiri dari pastry chef profesional dengan pengalaman internasional.</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="why-card">
              <div class="why-icon">⚡</div>
              <div class="why-title">Pengiriman Cepat</div>
              <div class="why-desc">Layanan same-day delivery ke seluruh Jakarta dan sekitarnya.</div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="why-card">
              <div class="why-icon">🎨</div>
              <div class="why-title">Bisa Custom Desain</div>
              <div class="why-desc">Pesan kue sesuai tema impianmu — ulang tahun, pernikahan, atau acara apapun.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== TESTIMONI ==================== -->
<section class="section-py" id="testimoni">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Kata Pelanggan</span>
      <h2 class="section-title">Mereka Sudah Merasakan Perbedaannya</h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Black Forest-nya benar-benar juara! Lapisan coke dan crinya pas banget. Sudah order lebih dari 5 kali dan selalu puas!"</p>
          <div class="testi-author">
            <div class="testi-avatar">A</div>
            <div>
              <div class="testi-name">Anisa Rahmawati</div>
              <div class="testi-kota">Pasuruan</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Pesan wedding cake buat nikahan kemarin. Hasilnya melebihi ekspektasi, cantik banget dan rasanya enak. Semua tamu suka!"</p>
          <div class="testi-author">
            <div class="testi-avatar">B</div>
            <div>
              <div class="testi-name">Budi Santoso</div>
              <div class="testi-kota">Surabaya</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Croissant-nya fresh dan renyah setiap hari. Jadi langganan tetap buat sarapan pagi sekeluarga. Recommended!"</p>
          <div class="testi-author">
            <div class="testi-avatar">R</div>
            <div>
              <div class="testi-name">Rina Oktavia</div>
              <div class="testi-kota">Blitar</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="testi-card">
          <div class="testi-stars">★★★★☆</div>
          <p class="testi-text">"Red Velvet-nya enak banget, cream cheese frost-nya tidak terlalu manis. Packaging-nya juga rapi dan elegan."</p>
          <div class="testi-author">
            <div class="testi-avatar">F</div>
            <div>
              <div class="testi-name">Fauzan Akbar</div>
              <div class="testi-kota">Batu</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Molten lava cake-nya amazing! Cocoa lelehannya pas. Cocok banget buat date night di rumah. Akan order lagi!"</p>
          <div class="testi-author">
            <div class="testi-avatar">D</div>
            <div>
              <div class="testi-name">Dewi Kusuma</div>
              <div class="testi-kota">Malang</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Custom birthday cake untuk anak saya hasilnya persis seperti yang diminta, bahkan lebih bagus. Anak saya senang banget!"</p>
          <div class="testi-author">
            <div class="testi-avatar">H</div>
            <div>
              <div class="testi-name">Hendra Wijaya</div>
              <div class="testi-kota">Surabaya</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== CTA ==================== -->
<section class="section-py">
  <div class="container">
    <div class="cta-banner">
      <h2>Siap Memesan Kue Impianmu?</h2>
      <p>Hubungi kami sekarang dan dapatkan konsultasi gratis untuk custom cake sesuai keinginanmu!</p>
      <a href="https://wa.me/6281252134449?text=Halo, saya mau pesan kue" target="_blank" class="btn-cta-white">
        <i class="bi bi-whatsapp me-1"></i> Hubungi via WhatsApp
      </a>
    </div>
  </div>
</section>

<!-- ==================== TABEL USER ==================== -->
<section class="section-py tabel-section">
  <div class="container">
    <div class="text-center mb-4">
      <span class="section-label">Data Anggota</span>
      <h2 class="section-title">Daftar Pengguna Terdaftar</h2>
      <p class="section-sub mx-auto">Pengguna yang mendaftar akan tampil di tabel ini secara real-time.</p>
    </div>
    <div class="tabel-wrap">
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Username</th>
              <th>Email</th>
              <th>Waktu Daftar</th>
            </tr>
          </thead>
          <tbody id="userTableBody">
            <tr id="emptyRow">
              <td colspan="5" class="text-center text-muted py-4">
                <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                Belum ada pengguna yang mendaftar. Coba klik tombol <strong>Daftar</strong> di atas!
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?php require_once "includes/footer.php"; ?>
