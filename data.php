<?php
// Simpan jumlah request dalam file (atau database untuk pendekatan lebih kompleks)
$file = 'requests.txt';

// Jika file belum ada, buat file dengan nilai awal 0
if (!file_exists($file)) {
    file_put_contents($file, '0');
}

// Baca jumlah request dari file
$requests = (int)file_get_contents($file);

// Tambah 1 untuk setiap request
$requests++;

// Simpan kembali jumlah request yang diperbarui
file_put_contents($file, $requests);

// Kirim data sebagai JSON
echo json_encode([
    'time' => date('H:i:s'),
    'requests' => $requests
]);
?>
