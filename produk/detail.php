<?php
  $id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
  $pageTitle = "Produk – Ilham Bakery";
  $cssPath   = "../";
  $rootPath  = "../";
  require_once "../includes/header.php";
?>

<div id="productData" style="display:none;">
  <div class="product-item" data-id="1" data-img="Black Forest Supreme.jpg" data-nama="Black Forest Supreme" data-harga="Rp 320.000" data-desc="Lapisan cokelat lembut dengan ceri segar dan krim whip premium. Ukuran 18cm. Menggunakan dark chocolate Belgia dan ceri Morello asli. Tahan 3 hari dalam kulkas." data-tag="Best Seller" data-kat="Birthday Cake" data-rating="5" data-bahan="Dark chocolate, ceri morello, krim whip, tepung almond" data-berat="±1.2 kg" data-ukuran="18 cm"></div>
  <div class="product-item" data-id="2" data-img="Red Velvet Dream.jpg" data-nama="Red Velvet Dream" data-harga="Rp 280.000" data-desc="Kue merah beludru klasik dengan cream cheese frosting yang kaya rasa. Lembut di dalam dengan rasa cokelat ringan yang khas." data-tag="Favorit" data-kat="Birthday Cake" data-rating="5" data-bahan="Tepung terigu, buttermilk, cream cheese, pewarna alami" data-berat="±1.0 kg" data-ukuran="16 cm"></div>
  <div class="product-item" data-id="3" data-img="Rainbow Layer Cake.jpg" data-nama="Rainbow Layer Cake" data-harga="Rp 350.000" data-desc="Kue berlapis 6 warna dengan buttercream vanilla lembut di setiap lapisannya. Tampilan memukau saat dipotong!" data-tag="Colorful" data-kat="Birthday Cake" data-rating="4" data-bahan="Tepung terigu, pewarna alami, buttercream vanilla" data-berat="±1.4 kg" data-ukuran="18 cm"></div>
  <div class="product-item" data-id="4" data-img="Wedding Tier Cake.jpg" data-nama="Wedding Tier Cake" data-harga="Rp 1.500.000" data-desc="Kue pernikahan 3 tingkat dengan dekorasi premium, bisa custom sesuai tema. Termasuk konsultasi desain gratis." data-tag="Custom" data-kat="Wedding Cake" data-rating="5" data-bahan="Fondant, vanilla genoise, buttercream Swiss" data-berat="±5 kg" data-ukuran="10/14/18 cm (3 tier)"></div>
  <div class="product-item" data-id="5" data-img="Elegant White Cake.jpg" data-nama="Elegant White Cake" data-harga="Rp 850.000" data-desc="Kue putih elegan dengan hiasan bunga fondant untuk pernikahan simpel namun mewah." data-tag="Elegan" data-kat="Wedding Cake" data-rating="5" data-bahan="Fondant putih, vanilla sponge, white chocolate" data-berat="±2.5 kg" data-ukuran="20 cm"></div>
  <div class="product-item" data-id="6" data-img="Butter Croissant.jpg" data-nama="Butter Croissant" data-harga="Rp 35.000" data-desc="Croissant berlapis mentega premium, renyah di luar lembut di dalam. Dipanggang pagi hari, tersedia hingga habis." data-tag="Fresh Daily" data-kat="Pastry" data-rating="4" data-bahan="Tepung T55, mentega premium Prancis, ragi" data-berat="±90 g" data-ukuran="Standar"></div>
  <div class="product-item" data-id="7" data-img="Classic Apple Pie.jpg" data-nama="Classic Apple Pie" data-harga="Rp 110.000" data-desc="Pai apel klasik dengan kayu manis, dipanggang hingga kulit keemasan sempurna." data-tag="Klasik" data-kat="Pastry" data-rating="4" data-bahan="Apel Fuji, kayu manis, tepung, mentega" data-berat="±450 g" data-ukuran="18 cm"></div>
  <div class="product-item" data-id="8" data-img="Rainbow Cupcake.jpg" data-nama="Rainbow Cupcake (6pcs)" data-harga="Rp 120.000" data-desc="Cupcake warna-warni dengan frosting lembut berbagai rasa yang menawan. Cocok untuk hadiah." data-tag="Set" data-kat="Cupcake" data-rating="4" data-bahan="Tepung terigu, buttercream warna alami" data-berat="±50 g/pcs" data-ukuran="6 pcs/box"></div>
  <div class="product-item" data-id="9" data-img="Glazed Donut Box.jpg" data-nama="Glazed Donut Box (6pcs)" data-harga="Rp 95.000" data-desc="Donut empuk dengan glazing berwarna-warni, tersedia berbagai topping pilihan." data-tag="Popular" data-kat="Cupcake" data-rating="4" data-bahan="Tepung terigu, ragi, gula, glazing warna alami" data-berat="±65 g/pcs" data-ukuran="6 pcs/box"></div>
  <div class="product-item" data-id="10" data-img="Molten Lava Cake.jpg" data-nama="Molten Lava Cake" data-harga="Rp 65.000" data-desc="Kue cokelat hangat dengan isi lelehan cokelat di tengah. Disajikan fresh dari oven." data-tag="Hot Item" data-kat="Specialty" data-rating="5" data-bahan="Dark chocolate 72%, mentega, telur, gula" data-berat="±120 g" data-ukuran="Individual"></div>
  <div class="product-item" data-id="11" data-img="Matcha Swiss Roll.jpg" data-nama="Matcha Swiss Roll" data-harga="Rp 145.000" data-desc="Bolu gulung matcha dengan krim susu lembut, dihiasi taburan matcha bubuk." data-tag="Unik" data-kat="Specialty" data-rating="5" data-bahan="Matcha ceremonial grade, krim susu, telur" data-berat="±350 g" data-ukuran="±25 cm roll"></div>
  <div class="product-item" data-id="12" data-img="Almond Cookies.jpg" data-nama="Almond Cookies (200g)" data-harga="Rp 75.000" data-desc="Kue kering almond renyah, cocok untuk oleh-oleh atau camilan keluarga." data-tag="Kering" data-kat="Kue Kering" data-rating="4" data-bahan="Almond slice, tepung, mentega, vanili" data-berat="200 g" data-ukuran="Toples"></div>
  <div class="product-item" data-id="13" data-img="Nastar Keju Premium.jpg" data-nama="Nastar Keju Premium" data-harga="Rp 85.000" data-desc="Nastar klasik isi selai nanas dengan topping keju cheddar parut yang gurih." data-tag="Klasik" data-kat="Kue Kering" data-rating="5" data-bahan="Tepung, mentega, selai nanas, keju cheddar" data-berat="200 g" data-ukuran="Toples"></div>
  <div class="product-item" data-id="14" data-img="Blueberry Cheesecake.jpg" data-nama="Blueberry Cheesecake" data-harga="Rp 295.000" data-desc="Cheesecake lembut dengan topping saus blueberry segar. Ukuran 16cm." data-tag="Segar" data-kat="Specialty" data-rating="5" data-bahan="Cream cheese, blueberry segar, graham cracker" data-berat="±800 g" data-ukuran="16 cm"></div>
  <div class="product-item" data-id="15" data-img="Lemon Tart.jpg" data-nama="Lemon Tart" data-harga="Rp 185.000" data-desc="Tart lemon segar dengan curd asam manis dan meringue panggang." data-tag="Segar" data-kat="Pastry" data-rating="4" data-bahan="Lemon Amalfi, telur, mentega, pastry shell" data-berat="±500 g" data-ukuran="18 cm"></div>
  <div class="product-item" data-id="16" data-img="Sakura Mochi Cake.jpg" data-nama="Sakura Mochi Cake" data-harga="Rp 260.000" data-desc="Inspirasi kue Jepang dengan tekstur mochi lembut dan rasa bunga sakura." data-tag="Fusion" data-kat="Specialty" data-rating="5" data-bahan="Tepung mochiko, sakura bubuk, krim susu" data-berat="±700 g" data-ukuran="16 cm"></div>
</div>

<section class="detail-hero" style="padding-top: 90px;">
  <div class="container">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php" style="color:var(--rose);">Home</a></li>
        <li class="breadcrumb-item"><a href="index.php" style="color:var(--rose);">Produk</a></li>
        <li class="breadcrumb-item active" id="breadcrumbName"></li>
      </ol>
    </nav>

    <div class="row g-5 align-items-start">
      <!-- Gambar -->
      <div class="col-lg-5">
        <div class="detail-image-wrap">
          <img id="detailImage" alt="" class="detail-image" />
        </div>
        <div class="mt-3 d-flex gap-2 flex-wrap">
          <span class="detail-badge" id="detailKat"></span>
          <span class="detail-badge" id="detailTag"></span>
        </div>
      </div>

      <!-- Info -->
      <div class="col-lg-7">
        <h1 style="font-family:var(--ff-display);color:var(--chocolate);font-size:clamp(1.6rem,4vw,2.4rem);margin-bottom:.5rem;" id="detailName"></h1>
        <div class="rating-stars mb-3" id="detailRatingStars"></div>
        <div class="detail-price mb-4" id="detailPrice"></div>

        <p style="color:var(--muted);font-size:.95rem;line-height:1.7;margin-bottom:1.5rem;" id="detailDesc"></p>

        <!-- Spesifikasi -->
        <div class="row g-3 mb-4">
          <div class="col-4">
            <div class="why-card text-center py-3">
              <div style="font-size:1.5rem;">⚖️</div>
              <div style="font-size:.75rem;color:var(--muted);margin-top:.25rem;">Berat</div>
              <div style="font-weight:600;font-size:.88rem;color:var(--chocolate);" id="detailBerat"></div>
            </div>
          </div>
          <div class="col-4">
            <div class="why-card text-center py-3">
              <div style="font-size:1.5rem;">📐</div>
              <div style="font-size:.75rem;color:var(--muted);margin-top:.25rem;">Ukuran</div>
              <div style="font-weight:600;font-size:.88rem;color:var(--chocolate);" id="detailUkuran"></div>
            </div>
          </div>
          <div class="col-4">
            <div class="why-card text-center py-3">
              <div style="font-size:1.5rem;">⏱️</div>
              <div style="font-size:.75rem;color:var(--muted);margin-top:.25rem;">Estimasi</div>
              <div style="font-weight:600;font-size:.88rem;color:var(--chocolate);">1–2 Hari</div>
            </div>
          </div>
        </div>

        <div class="mb-4">
          <div style="font-size:.8rem;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:var(--muted);margin-bottom:.4rem;">Bahan Utama</div>
          <p style="font-size:.9rem;color:var(--text);" id="detailBahan"></p>
        </div>

        <div class="d-flex gap-3 flex-wrap">
          <a href="#" target="_blank" class="btn-primary-custom" id="detailWhatsApp">
            <i class="bi bi-whatsapp"></i> Pesan via WhatsApp
          </a>
          <a href="index.php" class="btn-ghost">
            <i class="bi bi-arrow-left me-1"></i> Kembali
          </a>
        </div>
      </div>
    </div>

    <!-- Produk Lainnya -->
    <div class="mt-5 pt-4" style="border-top:1px solid rgba(201,112,108,.15);">
      <h3 style="font-family:var(--ff-display);color:var(--chocolate);margin-bottom:1.5rem;">Produk Lainnya</h3>
      <div class="row g-4" id="otherProducts"></div>
    </div>

  </div>
</section>

<script>
  const productElements = Array.from(document.querySelectorAll('#productData .product-item'));
  const products = productElements.map(el => ({
    id: Number(el.dataset.id),
    image: el.dataset.img,
    nama: el.dataset.nama,
    harga: el.dataset.harga,
    desc: el.dataset.desc,
    tag: el.dataset.tag,
    kat: el.dataset.kat,
    rating: Number(el.dataset.rating),
    bahan: el.dataset.bahan,
    berat: el.dataset.berat,
    ukuran: el.dataset.ukuran,
  }));

  const params = new URLSearchParams(window.location.search);
  const selectedId = Number(params.get('id')) || 1;
  const product = products.find(item => item.id === selectedId) || products[0];

  const imageRoot = '<?= $rootPath ?? '' ?>img/';
  const detailImage = document.getElementById('detailImage');
  const detailImageWrap = document.querySelector('.detail-image-wrap');
  const detailKat = document.getElementById('detailKat');
  const detailTag = document.getElementById('detailTag');
  const detailName = document.getElementById('detailName');
  const detailRatingStars = document.getElementById('detailRatingStars');
  const detailPrice = document.getElementById('detailPrice');
  const detailDesc = document.getElementById('detailDesc');
  const detailBerat = document.getElementById('detailBerat');
  const detailUkuran = document.getElementById('detailUkuran');
  const detailBahan = document.getElementById('detailBahan');
  const breadcrumbName = document.getElementById('breadcrumbName');
  const detailWhatsApp = document.getElementById('detailWhatsApp');
  const otherProductsContainer = document.getElementById('otherProducts');

  const ratingStars = '★'.repeat(product.rating) + '☆'.repeat(5 - product.rating);
  detailImage.src = encodeURI(imageRoot + product.image);
  detailImage.alt = product.nama;
  detailImage.style.cursor = 'pointer';
  const openProductModal = () => bukaModalProduk(
    product.nama,
    product.harga,
    product.desc,
    encodeURI(imageRoot + product.image),
    product.kat,
    product.rating
  );
  detailImage.onclick = openProductModal;
  if (detailImageWrap) {
    detailImageWrap.style.cursor = 'pointer';
    detailImageWrap.onclick = openProductModal;
  }
  detailKat.textContent = product.kat;
  detailTag.textContent = product.tag;
  detailName.textContent = product.nama;
  detailRatingStars.innerHTML = `${ratingStars} <span style="color:var(--muted);font-size:.85rem;"> (${product.rating}.0 / 5.0 · 120+ ulasan)</span>`;
  detailPrice.textContent = product.harga;
  detailDesc.textContent = product.desc;
  detailBerat.textContent = product.berat;
  detailUkuran.textContent = product.ukuran;
  detailBahan.textContent = product.bahan;
  breadcrumbName.textContent = product.nama;
  detailWhatsApp.href = `https://wa.me/6281252134449?text=${encodeURIComponent('Halo, saya mau pesan ' + product.nama)}`;
  document.title = `${product.nama} – La Douceur`;

  const otherProducts = products.filter(item => item.id !== product.id);
  for (let i = otherProducts.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [otherProducts[i], otherProducts[j]] = [otherProducts[j], otherProducts[i]];
  }

  otherProductsContainer.innerHTML = otherProducts.slice(0, 4).map(item => {
    const safeName = item.nama.replace(/'/g, "\\'");
    const safeDesc = item.desc.replace(/'/g, "\\'");
    const safeKat = item.kat.replace(/'/g, "\\'");
    return `
      <div class="col-lg-3 col-md-6">
        <div class="produk-card h-100">
          <div class="produk-img" onclick="bukaModalProduk('${safeName}','${item.harga}','${safeDesc}','${encodeURI(imageRoot + item.image)}','${safeKat}',${item.rating})" style="cursor:pointer;">
            <img src="${encodeURI(imageRoot + item.image)}" alt="${item.nama}" class="produk-card-img" />
            <span class="produk-badge-tag">${item.tag}</span>
          </div>
          <div class="produk-body">
            <div class="produk-name">${item.nama}</div>
            <div class="produk-footer">
              <span class="produk-price">${item.harga}</span>
              <a href="detail.php?id=${item.id}" class="btn-pesan">Detail</a>
            </div>
          </div>
        </div>
      </div>
    `;
  }).join('');
</script>

<?php require_once "../includes/footer.php"; ?>
