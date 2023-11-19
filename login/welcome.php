<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Selamat datang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&family=Plus+Jakarta+Sans:wght@500;600&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&display=swap');
        body {
            font-family: 'Poppins';
            font: 14px;
            text-align: center;
            background-color: #004225; /* Warna latar belakang hijau tua */
            color: #fff; /* Warna teks putih */
            padding: 20px;
        }

        h1 {
            font-size: 36px;
        }

        .btn {
            background-color: #935900; /* Warna tombol hijau tua */
            border: none;
        }

        .btn-warning {
            background-color: #FFD700; /* Warna tombol reset password (kuning) */
            color: #000; /* Warna teks tombol reset password (hitam) */
        }

        .btn-danger {
            background-color: #FF0000; /* Warna tombol logout (merah) */
        }

        .btn-danger:hover, .btn-warning:hover {
            background-color: #935900; /* Warna tombol saat di-hover (hijau tua) */
        }

        .my-5 {
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <h1 class="my-5">Hallo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Selamat datang di website kami.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
        <a href="http://localhost/project/final/card/card.php" class="btn btn-primary ml-3">Card</a>
        <a href="http://localhost/snj-crud/index.php" class="btn btn-success ml-3">CRUD</a>
    </p>
</body>

</html>
