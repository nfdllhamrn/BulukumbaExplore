<?php
$koneksi = mysqli_connect("localhost", "admin12@login", "diopassword", "team9");

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_email = $_POST['last_email'];
    $last_password = $_POST['last_password'];
    $new_email = $_POST['new_email'];
    $new_password = $_POST['new_password'];

    $query = "UPDATE user SET email='$new_email', password='$new_password' WHERE email='$last_email' AND password='$last_password'";
    if (mysqli_query($koneksi, $query)) {
        $message = "Data updated successfully";
        header("Location: login.php");
        exit();
    } else {
        $message = "Gagal mengubah data. Silakan coba lagi.";
        echo '<script type="text/javascript">
        window.location = "renameaccount.php";
        </script>';
    }
}

mysqli_close($koneksi);
?>
