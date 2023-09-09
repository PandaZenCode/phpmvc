// Hamburger

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

// Fungsi untuk menghilangkan kelas "hamburger-active"
function closeNavMenu() {
  hamburger.classList.remove("hamburger-active");
  navMenu.classList.add("hidden");
}

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navMenu.classList.toggle("hidden");
});

// Tambahkan event listener untuk menghilangkan menu saat pengguna mengklik di luar menu
document.addEventListener("click", function (event) {
  const isHamburger = event.target === hamburger;
  const isNavMenu = event.target === navMenu;

  // Jika pengguna mengklik di luar hamburger dan menu, maka tutup menu
  if (!isHamburger && !isNavMenu) {
    closeNavMenu();
  }
});

// Tambahan: Jika pengguna menekan tombol escape, maka tutup menu
document.addEventListener("keydown", function (event) {
  if (event.key === "Escape") {
    closeNavMenu();
  }
});

// Navbar fixed
window.onscroll = function () {
  const header = document.querySelector("header");
  const navbarFixed = header.offsetTop;

  if (window.pageYOffset > navbarFixed) {
    header.classList.add("navbar-fixed");
  } else {
    header.classList.remove("navbar-fixed");
  }
};

// Dapatkan tombol "Kembali ke Atas"
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Fungsi untuk menampilkan tombol ketika halaman digulir ke bawah
function showScrollToTopBtn() {
  if (window.scrollY > 300) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
}

// Tambahkan event listener untuk memanggil fungsi showScrollToTopBtn saat menggulir
window.addEventListener("scroll", showScrollToTopBtn);

// Fungsi untuk menggulir ke atas saat tombol diklik
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth", // Animasi pergerakan ke atas
  });
}

// Tambahkan event listener untuk menggulir ke atas saat tombol diklik
scrollToTopBtn.addEventListener("click", scrollToTop);
