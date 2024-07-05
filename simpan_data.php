<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nama_buku = $_POST['nama_buku'];
    $display_ke = $_POST['display_ke'];

    // Data yang akan disimpan dalam format yang sesuai
    $data = "Nama Pemesan: $nama\nNama Buku: $nama_buku\nDisplay ke: $display_ke\n\n";

    // Path ke file untuk menyimpan data
    $file_path = "data_pemesanan.txt";

    // Menyimpan data ke file
    if (file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Gagal menyimpan data.";
    }
}
?>
