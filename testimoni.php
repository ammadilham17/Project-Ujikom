<?php
  $pageTitle = "Testimoni – Ilham Bakery";
  $cssPath   = "";
  $rootPath  = "";
  require_once "includes/header.php";
?>

<!-- HERO TESTIMONI -->
<section style="background: linear-gradient(135deg, var(--chocolate), #5C2E1C); padding: 8rem 0 4rem; text-align:center;">
  <div class="container">
    <span class="section-label" style="color:var(--rose-light);">Kata Mereka</span>
    <h1 style="color:var(--white); font-size:clamp(2rem,5vw,3.2rem); margin-bottom:.75rem;">Pelanggan Kami Berbicara</h1>
    <p style="color:rgba(255,255,255,.7); max-width:500px; margin:0 auto;">Lebih dari 12.000 pelanggan setia telah merasakan kelezatan dan kualitas Ilham Bakery.</p>

    <!-- Rata-rata rating -->
    <div style="margin-top:2.5rem; display:inline-flex; gap:3rem; background:rgba(255,255,255,.08); border-radius:16px; padding:1.5rem 2.5rem; flex-wrap:wrap; justify-content:center;">
      <div style="text-align:center;">
        <div style="font-family:var(--ff-display); font-size:3rem; font-weight:700; color:var(--rose-light); line-height:1;">4.9</div>
        <div style="color:#F6C90E; font-size:1.1rem; margin:.2rem 0;">★★★★★</div>
        <div style="color:rgba(255,255,255,.6); font-size:.82rem;">Rata-rata Rating</div>
      </div>
      <div style="width:1px; background:rgba(255,255,255,.12);"></div>
      <div style="text-align:center;">
        <div style="font-family:var(--ff-display); font-size:3rem; font-weight:700; color:var(--rose-light); line-height:1;">2.3K</div>
        <div style="color:rgba(255,255,255,.6); font-size:.82rem; margin-top:.5rem;">Total Ulasan</div>
      </div>
      <div style="width:1px; background:rgba(255,255,255,.12);"></div>
      <div style="text-align:center;">
        <div style="font-family:var(--ff-display); font-size:3rem; font-weight:700; color:var(--rose-light); line-height:1;">98%</div>
        <div style="color:rgba(255,255,255,.6); font-size:.82rem; margin-top:.5rem;">Pelanggan Puas</div>
      </div>
    </div>
  </div>
</section>

<!-- GRID TESTIMONI -->
<section class="section-py" style="background:var(--chocolate);">
  <div class="container">

    <!-- Filter Kategori -->
    <div class="filter-bar mb-5">
      <button class="filter-btn active" onclick="filterTesti('semua', this)">⭐ Semua</button>
      <button class="filter-btn" onclick="filterTesti('birthday', this)">🎂 Birthday Cake</button>
      <button class="filter-btn" onclick="filterTesti('wedding', this)">💒 Wedding Cake</button>
      <button class="filter-btn" onclick="filterTesti('pastry', this)">🥐 Pastry</button>
      <button class="filter-btn" onclick="filterTesti('specialty', this)">🍫 Specialty</button>
    </div>

    <div class="row g-4" id="testiGrid">

      <div class="col-lg-4 col-md-6 testi-item" data-kat="birthday">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Black Forest-nya benar-benar juara! Lapisan cokelat dan ceri-nya pas banget. Sudah order lebih dari 5 kali dan selalu puas!"</p>
          <div class="testi-meta">🎂 Black Forest Supreme</div>
          <div class="testi-author">
            <div class="testi-avatar">A</div>
            <div>
              <div class="testi-name">Anisa Rahmawati</div>
              <div class="testi-kota">Pasuruan · Januari 2026</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 testi-item" data-kat="wedding">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Pesan wedding cake buat nikahan kemarin. Hasilnya melebihi ekspektasi, cantik banget dan rasanya enak. Semua tamu suka!"</p>
          <div class="testi-meta">💒 Wedding Tier Cake</div>
          <div class="testi-author">
            <div class="testi-avatar">B</div>
            <div>
              <div class="testi-name">Budi Santoso</div>
              <div class="testi-kota">Surabaya · Maret 2026</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 testi-item" data-kat="pastry">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Croissant-nya fresh dan renyah setiap hari. Jadi langganan tetap buat sarapan pagi sekeluarga. Recommended banget!"</p>
          <div class="testi-meta">🥐 Butter Croissant</div>
          <div class="testi-author">
            <div class="testi-avatar">R</div>
            <div>
              <div class="testi-name">Rina Oktavia</div>
              <div class="testi-kota">Blitar · Februari 2026</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 testi-item" data-kat="birthday">
        <div class="testi-card">
          <div class="testi-stars">★★★★☆</div>
          <p class="testi-text">"Red Velvet-nya enak banget, cream cheese frost-nya tidak terlalu manis. Packaging-nya juga rapi dan elegan."</p>
          <div class="testi-meta">🍰 Red Velvet Dream</div>
          <div class="testi-author">
            <div class="testi-avatar">F</div>
            <div>
              <div class="testi-name">Fauzan Akbar</div>
              <div class="testi-kota">Batu · April 2026</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 testi-item" data-kat="specialty">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Molten lava cake-nya amazing! Cokelat lelehannya pas banget. Cocok untuk date night di rumah. Pasti order lagi!"</p>
          <div class="testi-meta">🍫 Molten Lava Cake</div>
          <div class="testi-author">
            <div class="testi-avatar">D</div>
            <div>
              <div class="testi-name">Dewi Kusuma</div>
              <div class="testi-kota">Malang · Mei 2026</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 testi-item" data-kat="birthday">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Custom birthday cake untuk anak saya hasilnya persis seperti yang diminta, bahkan lebih bagus. Anak saya senang banget!"</p>
          <div class="testi-meta">🎂 Custom Birthday Cake</div>
          <div class="testi-author">
            <div class="testi-avatar">H</div>
            <div>
              <div class="testi-name">Hendra Wijaya</div>
              <div class="testi-kota">Surabaya · Maret 2026</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 testi-item" data-kat="specialty">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Matcha Swiss Roll-nya lembut banget teksturnya, dan rasanya pas tidak terlalu manis. Jadi favorit keluarga sekarang!"</p>
          <div class="testi-meta">🧇 Matcha Swiss Roll</div>
          <div class="testi-author">
            <div class="testi-avatar">S</div>
            <div>
              <div class="testi-name">Siti Nurhayati</div>
              <div class="testi-kota">Sidoarjo · April 2026</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 testi-item" data-kat="wedding">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Elegant White Cake-nya sempurna! Dekorasi bunga fondant-nya detail banget, semua tamu terkesima. Terima kasih Ilham Bakery!"</p>
          <div class="testi-meta">💒 Elegant White Cake</div>
          <div class="testi-author">
            <div class="testi-avatar">M</div>
            <div>
              <div class="testi-name">Maya Sari</div>
              <div class="testi-kota">Gresik · Februari 2026</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 testi-item" data-kat="specialty">
        <div class="testi-card">
          <div class="testi-stars">★★★★★</div>
          <p class="testi-text">"Blueberry Cheesecake-nya segar dan creamy. Tidak terlalu padat, pas banget untuk pencuci mulut setelah makan besar."</p>
          <div class="testi-meta">🫐 Blueberry Cheesecake</div>
          <div class="testi-author">
            <div class="testi-avatar">A</div>
            <div>
              <div class="testi-name">Agus Prasetyo</div>
              <div class="testi-kota">Mojokerto · Mei 2026</div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- CTA Tulis Ulasan -->
    <div class="text-center mt-5 pt-3">
      <p style="color:rgba(255,255,255,.6); margin-bottom:1rem;">Sudah pernah mencoba produk kami?</p>
      <a href="https://wa.me/6281252134449?text=Halo, saya ingin memberikan ulasan untuk produk Ilham Bakery" target="_blank" class="btn-primary-custom">
        <i class="bi bi-chat-heart me-1"></i> Tulis Ulasan via WhatsApp
      </a>
    </div>

  </div>
</section>

<style>
  .testi-meta {
    font-size: .78rem;
    font-weight: 600;
    color: var(--rose-light);
    margin-bottom: 1rem;
    background: rgba(201,112,108,.2);
    display: inline-block;
    padding: .2rem .7rem;
    border-radius: 50px;
  }
  .filter-btn {
    border-color: rgba(255,255,255,.2);
    color: rgba(255,255,255,.7);
  }
  .filter-btn.active, .filter-btn:hover {
    background: var(--rose);
    border-color: var(--rose);
    color: var(--white);
  }
  .testi-item.hidden { display: none !important; }
</style>

<script>
  function filterTesti(kat, btn) {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('.testi-item').forEach(item => {
      if (kat === 'semua' || item.dataset.kat === kat) {
        item.classList.remove('hidden');
      } else {
        item.classList.add('hidden');
      }
    });
  }
</script>

<?php require_once "includes/footer.php"; ?>
