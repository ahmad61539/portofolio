function addVisitor() {
  if (localStorage.getItem('visitorCount')) {
      // Jika data sudah ada di localStorage, tambahkan 1 ke nilai yang ada
      localStorage.setItem('visitorCount', parseInt(localStorage.getItem('visitorCount')) + 1);
  } else {
      // Jika belum ada data di localStorage, setel nilai pertama menjadi 1
      localStorage.setItem('visitorCount', 1);
  }

  // Perbarui tampilan jumlah pengunjung di halaman
  document.getElementById('visitor-count').textContent = localStorage.getItem('visitorCount');
}

// Panggil fungsi addVisitor saat halaman dimuat
addVisitor();