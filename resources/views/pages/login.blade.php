<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nrp = $_POST['nrp'];
    $password = $_POST['password'];

    // Koneksi ke database
    $host = 'localhost';  // Ganti dengan host database Anda
    $user = 'root';  // Ganti dengan username database Anda
    $pass = '';  // Ganti dengan password database Anda
    $dbname = 'sistem_kp';  // Ganti dengan nama database Anda

    $conn = new mysqli($host, $user, $pass, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi database gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data pengguna dari tabel "user"
    $sql = "SELECT * FROM user WHERE nrp='$nrp'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Login berhasil
            echo "Login berhasil. Selamat datang, " . $nrp;
        } else {
            // Password salah
            echo "Login gagal. Password salah.";
        }
    } else {
        // Pengguna tidak ditemukan
        echo "Login gagal. Pengguna tidak ditemukan.";
    }

    // Tutup koneksi ke database
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('') }}assets/css/login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-left"></div>
        <div class="login-right">
            <div class="login-form">
                <h1>Sistem KP ITENAS</h1>
                <h2>Login User</h2>

                <form action="home.php" method="post">
                    <div class="form-group">
                        <label for="username">NRP</label>
                        <input type="text" name="username" id="username" placeholder="Masukkan NRP" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
                    </div>
                    <button type="submit">Login</button>
                    <p>Belum punya akun? <a href="register.php">Register</a></p>
                    <a class="level" id="on">User</a>
                    <a class="level" href="loginA.php" id="off">Admin</a>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
