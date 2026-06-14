<!-- FOOTER -->
<footer id="kontak">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4">
        <div class="footer-brand">🍰 Ilham Bakery</div>
        <p class="footer-desc">Kue artisan dengan bahan pilihan terbaik, dipanggang dengan cinta setiap harinya. Pesan sekarang, bahagia hari ini.</p>
        <div class="footer-socials">
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-tiktok"></i></a>
          <a href="#"><i class="bi bi-whatsapp"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-6">
        <h6 class="footer-heading">Menu</h6>
        <ul class="footer-links">
          <li><a href="<?= $rootPath ?? '' ?>index.php">Home</a></li>
          <li><a href="<?= $rootPath ?? '' ?>produk/index.php">Produk</a></li>
          <li><a href="<?= $rootPath ?? '' ?>testimoni.php">Testimoni</a></li>
          <li><a href="<?= $rootPath ?? '' ?>kontak.php">Kontak</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-6">
        <h6 class="footer-heading">Kategori Kue</h6>
        <ul class="footer-links">
          <li><a href="#">Birthday Cake</a></li>
          <li><a href="#">Wedding Cake</a></li>
          <li><a href="#">Pastry & Croissant</a></li>
          <li><a href="#">Kue Kering</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h6 class="footer-heading">Kontak Kami</h6>
        <ul class="footer-contact">
          <li><i class="bi bi-geo-alt"></i> Jl. Sidokepung, Kec. Buduran, Kab. Sidoarjo</li>
          <li><i class="bi bi-whatsapp"></i> +62 812-5213-4449</li>
          <li><i class="bi bi-envelope"></i> hello@ilhambakery.id</li>
          <li><i class="bi bi-clock"></i> Senin–Sabtu, 08.00–20.00</li>
        </ul>
      </div>
    </div>
    <hr class="footer-divider"/>
    <p class="footer-copy">Copyright &copy; 2026 GetsSkill. All rights reserved. | Dibuat dengan ❤️ oleh GetSkill</p>
  </div>
</footer>

<!-- MODAL LOGIN -->
<div class="modal fade" id="modalLogin" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content modal-custom">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title">Masuk ke Akun</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p id="loginMsg" class="alert d-none"></p>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" id="loginUser" placeholder="Masukkan username"/>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" id="loginPass" placeholder="Masukkan password"/>
        </div>
        <button type="button" class="btn btn-primary w-100 btn-submit" onclick="doLogin()">Login</button>
        <p class="text-center mt-3 small">Belum punya akun? <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalRegister">Daftar sekarang</a></p>
      </div>
    </div>
  </div>
</div>

<!-- MODAL REGISTER -->
<div class="modal fade" id="modalRegister" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content modal-custom">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title">Buat Akun Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p id="registerMsg" class="alert d-none"></p>
        <div class="mb-3">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="regNama" placeholder="Nama lengkap kamu"/>
        </div>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" id="regUser" placeholder="Pilih username unik"/>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="regEmail" placeholder="email@contoh.com"/>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" id="regPass" placeholder="Minimal 6 karakter"/>
        </div>
        <button class="btn btn-primary w-100 btn-submit" onclick="doRegister()">Daftar Sekarang</button>
        <p class="text-center mt-3 small">Sudah punya akun? <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalLogin">Login di sini</a></p>
      </div>
    </div>
  </div>
</div>

<!-- MODAL DETAIL PRODUK (dinamis via JS) -->
<div class="modal fade" id="modalProduk" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content modal-custom">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="modalProdukTitle">Detail Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="modalProdukBody"></div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= $rootPath ?? '' ?>js/main.js"></script>
</body>
</html>
