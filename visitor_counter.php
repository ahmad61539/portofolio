<?php
$counter_file = 'visitor_count.txt';

// Mengecek apakah file counter sudah ada
if (file_exists($counter_file)) {
    // Membaca jumlah pengunjung dari file counter
    $count = file_get_contents($counter_file);
    // Menambahkan 1 ke jumlah pengunjung
    $count++;
} else {
    // Jika file counter tidak ada, membuat file baru dengan nilai awal 1
    $count = 1;
}

// Menuliskan jumlah pengunjung yang baru ke file counter
file_put_contents($counter_file, $count);

// Menampilkan jumlah pengunjung di halaman web
echo '<footer class="footer">
        <div class="text-center">
            <p class="footer-title">Total Visitor: ' . $count . '</p>
        </div>
      </footer>';
?>
