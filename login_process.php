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

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("Location: Rating.html");
        exit();
    } else {
        $message = "Login gagal. Nama pengguna atau kata sandi salah.";
        echo '<script type="text/javascript">
        window.location = "login.php";
        </script>';
    }
}

if ($row = mysqli_fetch_assoc($result)) {
    if (password_verify($password, $row['password'])) {
        header("Location: Rating.html");
        exit();
    } else {
        $message = "Login gagal. Nama pengguna atau kata sandi salah.";
        echo '<script type="text/javascript">
        window.location = "login.php";
        </script>';
    }
} else {
    $message = "Login gagal. Nama pengguna atau kata sandi salah.";
        echo '<script type="text/javascript">
        window.location = "login.php";
        </script>';
}

mysqli_close($connect);
?>