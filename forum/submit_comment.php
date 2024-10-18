<?php

// Konfigurasi database
$servername = "localhost";
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
    $author = trim($_POST['author']); // Pastikan input form sesuai
    $content = trim($_POST['comment']);
    $topic_id = (int)$_POST['topic_id']; // ID dari topik yang dikomentari

    // Cek apakah input tidak kosong
    if (!empty($author) && !empty($content) && !empty($topic_id)) {
        // Siapkan query untuk menyimpan data ke database
        $sql = "INSERT INTO comments (author, content, topic_id) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Cek apakah statement berhasil disiapkan
        if ($stmt === false) {
            die('Kesalahan saat menyiapkan statement: ' . htmlspecialchars($conn->error));
        }

        // Bind parameter
        $stmt->bind_param("ssi", $author, $content, $topic_id);

        // Jalankan statement
        if ($stmt->execute()) {
            // Jika berhasil, redirect ke halaman topik
            header("Location: topic.php?id=" . $topic_id);
            exit;
        } else {
            echo "Gagal menambahkan komentar: " . htmlspecialchars($stmt->error);
        }

        // Tutup statement
        $stmt->close();
    } else {
        echo "Author, komentar, dan topik ID tidak boleh kosong!";
    }
}

// Tutup koneksi
$conn->close();

?>
