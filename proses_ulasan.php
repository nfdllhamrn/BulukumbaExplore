<?php
$servername = "localhost";
$username = "admin12@login";
$password = "diopassword";
$dbname = "team9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $place_name = $_POST["place_name"];
    $user_name = $_POST["user_name"];
    $ulasan = $_POST["ulasan"];

    $sql = "INSERT INTO ulasan (place_name, user_name, ulasan) VALUES ('$place_name', '$user_name', '$ulasan')";

    if ($conn->query($sql) === TRUE) {
        echo "Ulasan berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>