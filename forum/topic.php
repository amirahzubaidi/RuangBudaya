<?php
// Ambil ID topik dari URL dan validasi
if (isset($_GET['id'])) {
    $topic_id = (int)$_GET['id']; // Pastikan ID adalah integer
} else {
    die("Topik tidak ditemukan.");
}

// Koneksi ke database
$connection = new mysqli('localhost', 'root', '', 'register');

// Periksa koneksi
if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}

// Query untuk mendapatkan data topik berdasarkan ID
$sql = "SELECT * FROM topics WHERE id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param('i', $topic_id);
$stmt->execute();
$result = $stmt->get_result();
$topic = $result->fetch_assoc();

// Periksa apakah topik ditemukan
if (!$topic) {
    die("Topik tidak ditemukan.");
}

// Tampilkan detail topik
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($topic['judul']); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        .comment {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .button {
            display: inline-block;
            padding: 10px 15px;
            margin: 10px 5px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2><?php echo htmlspecialchars($topic['judul']); ?></h2>
    <p><?php echo htmlspecialchars($topic['deskripsi']); ?></p>

    <h3>Komentar:</h3>
    <?php
    // Query untuk mendapatkan komentar terkait topik
    $sql_comments = "SELECT * FROM comments WHERE topic_id = ?";
    $stmt_comments = $connection->prepare($sql_comments);
    $stmt_comments->bind_param('i', $topic_id);
    $stmt_comments->execute();
    $result_comments = $stmt_comments->get_result();

    // Tampilkan komentar
    while ($comment = $result_comments->fetch_assoc()) {
        echo "<div class='comment'>";
        echo "<p><strong>" . htmlspecialchars($comment['author']) . ":</strong> " . htmlspecialchars($comment['content']) . "</p>";
        echo "</div>";
    }
    ?>

    <!-- Form untuk menambahkan komentar baru -->
    <form action="submit_comment.php" method="POST">
        <input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>" />
        <label for="author">Nama:</label>
        <input type="text" name="author" id="author" required />

        <label for="comment">Komentar:</label>
        <textarea name="comment" id="comment" required></textarea>

        <button type="submit">Kirim</button>
    </form>

    <a class="button" href="forum.php">Kembali ke Forum Diskusi</a>
    <a class="button" href="index.html">Beranda</a>
</div>

</body>
</html>

<?php
// Tutup koneksi
$connection->close();
?>
