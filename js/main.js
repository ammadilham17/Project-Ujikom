/* ===========================
   LA DOUCEUR – main.js
   =========================== */

// ---- NAVBAR SCROLL ----
window.addEventListener("scroll", () => {
  const nav = document.getElementById("mainNav");
  if (nav) nav.classList.toggle("scrolled", window.scrollY > 60);
});

// ---- HARDCODED AUTH (no database) ----
const VALID_USER = "admin";
const VALID_PASS = "kue2026";

function showMsg(elId, msg, type) {
  const el = document.getElementById(elId);
  if (!el) return;
  el.className = `alert alert-${type}`;
  el.textContent = msg;
  el.classList.remove("d-none");
  setTimeout(() => el.classList.add("d-none"), 3500);
}

// ---- LOGIN ----
function doLogin() {
  const user = document.getElementById("loginUser").value.trim();
  const pass = document.getElementById("loginPass").value.trim();

  if (!user || !pass) {
    showMsg("loginMsg", "Username dan password wajib diisi.", "warning");
    return;
  }
  if (user === VALID_USER && pass === VALID_PASS) {
    showMsg(
      "loginMsg",
      "✅ Login berhasil! Selamat datang, " + user + ".",
      "success",
    );
    document.getElementById("loginUser").value = "";
    document.getElementById("loginPass").value = "";
  } else {
    showMsg("loginMsg", "❌ Username atau password salah.", "danger");
  }
}

// ---- REGISTER (DOM manipulation → Tabel) ----
let registeredUsers = [];

function doRegister() {
  const nama = document.getElementById("regNama").value.trim();
  const user = document.getElementById("regUser").value.trim();
  const email = document.getElementById("regEmail").value.trim();
  const pass = document.getElementById("regPass").value.trim();

  if (!nama || !user || !email || !pass) {
    showMsg("registerMsg", "Semua kolom wajib diisi.", "warning");
    return;
  }
  if (pass.length < 6) {
    showMsg("registerMsg", "Password minimal 6 karakter.", "warning");
    return;
  }
  if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
    showMsg("registerMsg", "Format email tidak valid.", "warning");
    return;
  }
  if (registeredUsers.find((u) => u.username === user)) {
    showMsg("registerMsg", "Username sudah digunakan.", "danger");
    return;
  }

  const newUser = {
    no: registeredUsers.length + 1,
    nama,
    username: user,
    email,
    waktu: new Date().toLocaleString("id-ID"),
  };
  registeredUsers.push(newUser);
  updateUserTable();

  showMsg(
    "registerMsg",
    "✅ Pendaftaran berhasil! Akun kamu sudah dibuat.",
    "success",
  );

  // Reset form
  ["regNama", "regUser", "regEmail", "regPass"].forEach((id) => {
    document.getElementById(id).value = "";
  });
}

function updateUserTable() {
  const tbody = document.getElementById("userTableBody");
  if (!tbody) return;

  tbody.innerHTML = "";
  registeredUsers.forEach((u) => {
    const tr = document.createElement("tr");
    tr.innerHTML = `
      <td>${u.no}</td>
      <td>${u.nama}</td>
      <td>${u.username}</td>
      <td>${u.email}</td>
      <td>${u.waktu}</td>
    `;
    tbody.appendChild(tr);
  });

  const emptyRow = document.getElementById("emptyRow");
  if (emptyRow) emptyRow.style.display = registeredUsers.length ? "none" : "";
}

// ---- MODAL DETAIL PRODUK ----
function bukaModalProduk(nama, harga, desc, image, kategori, rating) {
  document.getElementById("modalProdukTitle").textContent = nama;
  document.getElementById("modalProdukBody").innerHTML = `
    <div class="row g-4 align-items-center">
      <div class="col-md-5">
        <img src="${image}" alt="${nama}" class="modal-produk-img" />
      </div>
      <div class="col-md-7">
        <span class="detail-badge">${kategori}</span>
        <h3 style="font-family:var(--ff-display);color:var(--chocolate);margin:.5rem 0;">${nama}</h3>
        <div class="rating-stars mb-2">${"★".repeat(rating)}${"☆".repeat(5 - rating)} <small class="text-muted">(${rating}.0/5)</small></div>
        <p style="color:var(--muted);font-size:.92rem;margin-bottom:1rem;">${desc}</p>
        <div class="detail-price">${harga}</div>
        <div class="mt-3 d-flex gap-2 flex-wrap">
          <a href="https://wa.me/6281234567890?text=Halo, saya mau pesan ${nama}" target="_blank" class="btn btn-primary-custom btn-sm">
            <i class="bi bi-whatsapp"></i> Pesan via WhatsApp
          </a>
        </div>
      </div>
    </div>
  `;
  new bootstrap.Modal(document.getElementById("modalProduk")).show();
}

// ---- FILTER PRODUK (halaman produk) ----
function filterProduk(kategori) {
  document
    .querySelectorAll(".filter-btn")
    .forEach((btn) => btn.classList.remove("active"));
  event.target.classList.add("active");

  document.querySelectorAll(".produk-item").forEach((card) => {
    const kat = card.dataset.kategori;
    card.style.display = kategori === "semua" || kat === kategori ? "" : "none";
  });
}

// ---- INIT ----
document.addEventListener("DOMContentLoaded", () => {
  updateUserTable();
  // Delegated click handler for product cards (works across pages)
  document.addEventListener("click", (e) => {
    if (e.target.closest(".modal")) return; // ignore clicks inside modals
    if (e.target.closest(".produk-footer")) return; // ignore footer buttons/links
    const card = e.target.closest(".produk-card");
    if (!card) return;
    const nama =
      card.dataset.nama ||
      card.querySelector(".produk-name")?.textContent?.trim();
    if (!nama) return;
    const harga =
      card.dataset.harga ||
      card.querySelector(".produk-price")?.textContent?.trim() ||
      "";
    const desc =
      card.dataset.desc ||
      card.querySelector(".produk-desc")?.textContent?.trim() ||
      "";
    const image =
      card.dataset.image ||
      card.querySelector("img")?.getAttribute("src") ||
      "";
    const kategori = card.dataset.kategori || "";
    const rating = Number(card.dataset.rating || 5);
    if (image) bukaModalProduk(nama, harga, desc, image, kategori, rating);
  });
});
