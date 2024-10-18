<?php

// Konfigurasi database
$servername = "localhost"; // atau bisa gunakan "127.0.0.1"
$username = "root";
$password = "";
$dbname = "forum_diskusi"; // Ganti dengan nama database yang kamu gunakan

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Setelah koneksi berhasil, lakukan insert atau query lainnya
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $judul = $_POST['title'];
    $deskripsi = $_POST['description'];

    // Cek apakah input tidak kosong
    if (!empty($judul) && !empty($deskripsi)) {
        // Siapkan query untuk menyimpan data ke database
        $sql = "INSERT INTO topics (judul, deskripsi) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        // Cek apakah statement berhasil disiapkan
        if ($stmt === false) {
            die('Kesalahan saat menyiapkan statement: ' . htmlspecialchars($conn->error));
        }

        // Bind parameter
        $stmt->bind_param("ss", $judul, $deskripsi);

        // Jalankan statement
        if ($stmt->execute()) {
            // Jika berhasil, redirect ke halaman forum
            header("Location: forum.php");
            exit;
        } else {
            echo "Gagal menambahkan topik: " . htmlspecialchars($stmt->error);
        }

        // Tutup statement
        $stmt->close();
    } else {
        echo "Judul dan deskripsi tidak boleh kosong!";
    }
}

// Tutup koneksi
$conn->close();

?>
