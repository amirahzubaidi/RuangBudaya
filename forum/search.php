<?php
// Koneksi ke database
$connection = new mysqli('localhost', 'root', '', 'forum_diskusi');

// Ambil kata kunci pencarian
$search_query = $_GET['query'];

// Query untuk mencari topik yang cocok
$sql = "SELECT * FROM topics WHERE judul LIKE '%$search_query%'";
$result = $connection->query($sql);

// Tampilkan hasil pencarian
while($topic = $result->fetch_assoc()) {
    echo "<h3><a href='topic.php?id={$topic['id']}'>{$topic['judul']}</a></h3>";
    echo "<p>{$topic['deskripsi']}</p>";
}
?>
