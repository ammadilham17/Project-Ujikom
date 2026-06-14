<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= $pageTitle ?? 'Ilham Bakery – Toko Kue' ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,500&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="<?= $cssPath ?? '' ?>css/style.css"/>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="<?= $rootPath ?? '' ?>index.php">
      <span class="brand-icon">🍰</span> Ilham Bakery
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
        <li class="nav-item"><a class="nav-link" href="<?= $rootPath ?? '' ?>index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $rootPath ?? '' ?>produk/index.php">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $rootPath ?? '' ?>testimoni.php">Testimoni</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $rootPath ?? '' ?>kontak.php">Kontak</a></li>
        <li class="nav-item ms-lg-2">
          <a class="btn btn-login" href="#" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-register" href="#" data-bs-toggle="modal" data-bs-target="#modalRegister">Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
