<?php
session_start();
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['experience'] = $user['experience'];
        $_SESSION['gender']=$user['gender'];
        header("Location: profile.php");
    } else {
        echo '<script>
        window.location.href ="login.php";
        alert("Login failed.Invalid username or password!!! ")
        </script>';
    }
}
?>
