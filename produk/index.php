<?php
  $pageTitle = "Produk – Ilham Bakery Toko Kue";
  $cssPath   = "../";
  $rootPath  = "../";
  require_once "../includes/header.php";

  // Data semua produk telah dipindahkan ke elemen div
?>
<div id="productData" style="display:none;">
  <div class="product-item" data-id="1" data-emoji="🎂" data-nama="Black Forest Supreme" data-harga="Rp 320.000" data-desc="Lapisan cokelat lembut dengan ceri segar dan krim whip premium. Ukuran 18cm." data-tag="Best Seller" data-kat="birthday" data-rating="5"></div>
  <div class="product-item" data-id="2" data-emoji="🍰" data-nama="Red Velvet Dream" data-harga="Rp 280.000" data-desc="Kue merah beludru klasik dengan cream cheese frosting yang kaya rasa." data-tag="Favorit" data-kat="birthday" data-rating="5"></div>
  <div class="product-item" data-id="3" data-emoji="🌈" data-nama="Rainbow Layer Cake" data-harga="Rp 350.000" data-desc="Kue berlapis 6 warna dengan buttercream vanilla lembut di setiap lapisannya." data-tag="Colorful" data-kat="birthday" data-rating="4"></div>
  <div class="product-item" data-id="4" data-emoji="🎪" data-nama="Wedding Tier Cake" data-harga="Rp 1.500.000" data-desc="Kue pernikahan 3 tingkat dengan dekorasi premium, bisa custom sesuai tema." data-tag="Custom" data-kat="wedding" data-rating="5"></div>
  <div class="product-item" data-id="5" data-emoji="💒" data-nama="Elegant White Cake" data-harga="Rp 850.000" data-desc="Kue putih elegan dengan hiasan bunga fondant untuk pernikahan simpel namun mewah." data-tag="Elegan" data-kat="wedding" data-rating="5"></div>
  <div class="product-item" data-id="6" data-emoji="🥐" data-nama="Butter Croissant" data-harga="Rp 35.000" data-desc="Croissant berlapis mentega premium, renyah di luar lembut di dalam." data-tag="Fresh Daily" data-kat="pastry" data-rating="4"></div>
  <div class="product-item" data-id="7" data-emoji="🥧" data-nama="Classic Apple Pie" data-harga="Rp 110.000" data-desc="Pai apel klasik dengan kayu manis, dipanggang hingga kulit keemasan sempurna." data-tag="Klasik" data-kat="pastry" data-rating="4"></div>
  <div class="product-item" data-id="8" data-emoji="🧁" data-nama="Rainbow Cupcake (6pcs)" data-harga="Rp 120.000" data-desc="Cupcake warna-warni dengan frosting lembut berbagai rasa yang menawan." data-tag="Set" data-kat="cupcake" data-rating="4"></div>
  <div class="product-item" data-id="9" data-emoji="🍩" data-nama="Glazed Donut Box (6pcs)" data-harga="Rp 95.000" data-desc="Donut empuk dengan glazing berwarna-warni, tersedia berbagai topping pilihan." data-tag="Popular" data-kat="cupcake" data-rating="4"></div>
  <div class="product-item" data-id="10" data-emoji="🍫" data-nama="Molten Lava Cake" data-harga="Rp 65.000" data-desc="Kue cokelat hangat dengan isi lelehan cokelat di tengah." data-tag="Hot Item" data-kat="specialty" data-rating="5"></div>
  <div class="product-item" data-id="11" data-emoji="🧇" data-nama="Matcha Swiss Roll" data-harga="Rp 145.000" data-desc="Bolu gulung matcha dengan krim susu lembut, dihiasi taburan matcha bubuk." data-tag="Unik" data-kat="specialty" data-rating="5"></div>
  <div class="product-item" data-id="12" data-emoji="🍪" data-nama="Almond Cookies (200g)" data-harga="Rp 75.000" data-desc="Kue kering almond renyah, cocok untuk oleh-oleh atau camilan keluarga." data-tag="Kering" data-kat="kering" data-rating="4"></div>
  <div class="product-item" data-id="13" data-emoji="🌰" data-nama="Nastar Keju Premium" data-harga="Rp 85.000" data-desc="Nastar klasik isi selai nanas dengan topping keju cheddar parut yang gurih." data-tag="Klasik" data-kat="kering" data-rating="5"></div>
  <div class="product-item" data-id="14" data-emoji="🫐" data-nama="Blueberry Cheesecake" data-harga="Rp 295.000" data-desc="Cheesecake lembut dengan topping saus blueberry segar." data-tag="Segar" data-kat="specialty" data-rating="5"></div>
  <div class="product-item" data-id="15" data-emoji="🍋" data-nama="Lemon Tart" data-harga="Rp 185.000" data-desc="Tart lemon segar dengan curd asam manis dan meringue panggang." data-tag="Segar" data-kat="pastry" data-rating="4"></div>
  <div class="product-item" data-id="16" data-emoji="🌸" data-nama="Sakura Mochi Cake" data-harga="Rp 260.000" data-desc="Inspirasi kue Jepang dengan tekstur mochi lembut dan rasa bunga sakura." data-tag="Fusion" data-kat="specialty" data-rating="5"></div>
</div>

<!-- HERO PRODUK -->
<div class="produk-hero">
  <div class="container">
    <span class="section-label" style="color:var(--rose-light);">Katalog Lengkap</span>
    <h1>Semua Produk Kami</h1>
    <p>Pilih dari 80+ varian kue artisan buatan tangan yang dibuat fresh setiap hari</p>

    <!-- FILTER BAR -->
    <div class="filter-bar">
      <button class="filter-btn active" onclick="filterProduk('semua')">🍰 Semua</button>
      <button class="filter-btn" onclick="filterProduk('birthday')">🎂 Birthday Cake</button>
      <button class="filter-btn" onclick="filterProduk('wedding')">💒 Wedding Cake</button>
      <button class="filter-btn" onclick="filterProduk('pastry')">🥐 Pastry</button>
      <button class="filter-btn" onclick="filterProduk('cupcake')">🧁 Cupcake</button>
      <button class="filter-btn" onclick="filterProduk('specialty')">🍫 Specialty</button>
      <button class="filter-btn" onclick="filterProduk('kering')">🍪 Kue Kering</button>
    </div>
  </div>
</div>

<!-- DAFTAR PRODUK -->
<section class="section-py">
  <div class="container">
    <div class="row g-4" id="produkGrid"></div>
  </div>
</section>

<script>
  const imageRoot = '../img/';
  const imageNameFromName = name => {
    if (name.includes('Rainbow Cupcake')) return 'Rainbow Cupcake.jpg';
    if (name.includes('Almond Cookies')) return 'Almond Cookies.jpg';
    return `${name.replace(/ \(.*\)$/, '')}.jpg`;
  };

  const productItems = Array.from(document.querySelectorAll('#productData .product-item'));
  const products = productItems.map(el => ({
    id: Number(el.dataset.id),
    image: imageNameFromName(el.dataset.nama),
    nama: el.dataset.nama,
    harga: el.dataset.harga,
    desc: el.dataset.desc,
    tag: el.dataset.tag,
    kat: el.dataset.kat,
    rating: Number(el.dataset.rating)
  }));

  const escapeSingleQuote = text => String(text).replace(/'/g, "\\'");

  function renderProdukGrid() {
    const produkGrid = document.getElementById('produkGrid');
    if (!produkGrid) return;

    produkGrid.innerHTML = products.map(p => `
      <div class="col-xl-3 col-lg-4 col-md-6 produk-item" data-kategori="${p.kat}">
        <div class="produk-card h-100" data-nama="${escapeSingleQuote(p.nama)}" data-harga="${escapeSingleQuote(p.harga)}" data-desc="${escapeSingleQuote(p.desc)}" data-image="${encodeURI(imageRoot + p.image)}" data-kategori="${escapeSingleQuote(p.kat)}" data-rating="${p.rating}">
          <div class="produk-img" style="cursor:pointer;">
            <img src="${encodeURI(imageRoot + p.image)}" alt="${p.nama}" class="produk-card-img" />
            <span class="produk-badge-tag">${p.tag}</span>
          </div>
          <div class="produk-body">
            <div class="produk-name">${p.nama}</div>
            <div class="produk-desc">${p.desc}</div>
            <div class="produk-footer">
              <span class="produk-price">${p.harga}</span>
              <a href="detail.php?id=${p.id}" class="btn-pesan">Detail</a>
            </div>
          </div>
        </div>
      </div>
    `).join('');
  }

  document.addEventListener('DOMContentLoaded', renderProdukGrid);
</script>

<!-- CTA -->
<section style="padding: 0 0 4rem;">
  <div class="container">
    <div class="cta-banner">
      <h2>Tidak Menemukan yang Kamu Cari?</h2>
      <p>Kami menerima pesanan custom cake. Hubungi kami dan ceritakan impianmu!</p>
      <a href="https://wa.me/628252134449" target="_blank" class="btn-cta-white">
        <i class="bi bi-whatsapp me-1"></i> Chat Sekarang
      </a>
    </div>
  </div>
</section>

<?php require_once "../includes/footer.php"; ?>
