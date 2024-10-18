<?php
//include 'db.php'; // Koneksi ke database

// Membuat koneksi
$connection = new mysqli("localhost", "root", "", "register");

// Cek koneksi
if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}


// Memeriksa apakah ada pencarian
$search_query = '';
if (isset($_POST['search'])) {
    $search_query = $_POST['search'];
}


// Query untuk mengambil topik diskusi dari database
if ($search_query) {
  $sql = "SELECT * FROM topics WHERE judul LIKE ? ORDER BY created_at DESC";
  $stmt = $connection->prepare($sql);
  $like_query = "%" . $search_query . "%";
  $stmt->bind_param('s', $like_query);
} else {
  $sql = "SELECT * FROM topics ORDER BY created_at DESC";
  $stmt = $connection->prepare($sql);
}

$stmt->execute();
$result = $stmt->get_result();
?>


<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forum Diskusi - Ruang Budaya</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="container">
        <div class="logo">
          <h1>Ruang Budaya</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="forum.php">Forum Diskusi</a></li>
            <!-- Link lainnya -->
          </ul>
        </nav>
      </div>
    </header>

    <!-- Forum Section -->
    <main>
      <section class="forum-section">
        <div class="container">
          <h2>Forum Diskusi</h2>
          <div class="forum-header">
          <form action="" method="POST" style="display: flex; align-items: center;">
        <input type="text" name="search" placeholder="Cari topik diskusi..." required />
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
    <a href="#" class="btn-new-topic">+ Buat Topik Baru</a>
          </div>

          <!-- Modal Buat Topik Baru -->
          <!-- Form Buat Topik Baru -->
          <form id="newTopicForm" action="add_topic.php" method="POST">
            <label for="title">Judul Topik:</label>
            <input type="text" id="title" name="title" required />

            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" required></textarea>

            <button type="submit" class="btn-submit">Buat Topik</button>
          </form>

          <!-- Daftar Topik -->
          <div class="forum-topics">
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="forum-topic">';
                            echo '<h3><a href="topic.php?id=' . $row['id'] . '">' . $row['judul'] . '</a></h3>';
                            echo '<p>' . $row['deskripsi'] . '</p>';
                            echo '<div class="forum-topic-meta">';
                            echo '<span><i class="fas fa-clock"></i> ' . $row['created_at'] . '</span>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "<p>Tidak ada topik diskusi.</p>";
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Ruang Budaya. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

<?php
// Tutup koneksi
$stmt->close();
$connection->close();
?>