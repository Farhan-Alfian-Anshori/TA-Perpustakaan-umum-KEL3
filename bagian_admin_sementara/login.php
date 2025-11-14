<?php
session_start();
include "koneksi.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin 
            WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $_SESSION['admin'] = $username;
        header("Location: admin/index.php");
        exit;

    } else {
        echo "<p style='color:red;'>Login gagal! Username atau password salah.</p>";
    }
}
?>

<h2>Login Admin</h2>

<form method="POST">
    Username: <br>
    <input type="text" name="username"><br><br>

    Password: <br>
    <input type="password" name="password"><br><br>

    <button type="submit" name="login">Login</button>
</form>
