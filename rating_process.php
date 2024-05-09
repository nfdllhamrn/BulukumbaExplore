<?php
$servername = "localhost";
$username = "admin12@login";
$password = "diopassword";
$dbname = "team9";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$place_name = isset($_POST['place_name']) ? $_POST['place_name'] : '';
$user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';

// Tangkap nilai peringkat sebagai array
$ratings = isset($_POST['rating']) ? (is_array($_POST['rating']) ? $_POST['rating'] : array($_POST['rating'])) : array();

// Gunakan prepared statement untuk melindungi dari SQL injection
$sql = $conn->prepare("INSERT INTO ratings (place_name, user_name, rating) VALUES (?, ?, ?)");

// Bind parameters menggunakan loop
foreach ($ratings as $rating) {
    // Tidak perlu mengonversi nilai rating ke tipe data float
    $sql->bind_param("sss", $place_name, $user_name, $rating); // Menggunakan "s" untuk string
    if ($sql->execute()) {
        echo "Penilaian berhasil disimpan.";
    } else {
        echo "Error: " . $sql->error;
    }

    // Reset parameter untuk persiapan binding ulang
    $sql->reset();
}

// Tutup prepared statement
$sql->close();

// Tutup koneksi
$conn->close();
?>
