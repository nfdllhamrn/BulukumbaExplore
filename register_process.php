<?php
$connect = mysqli_connect('localhost', 'admin12@login', 'diopassword', 'team9');

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (email, password) VALUES ('$email', '$hashed_password')";
    if (mysqli_query($connect, $sql)) {
        echo "Pendaftaran berhasil. Silakan login dengan akun Anda.";
        header("Location: Login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}

mysqli_close($connect);
?>