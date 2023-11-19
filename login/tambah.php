<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $deskripsi = $_POST["deskripsi"];
    $penulis = $_POST["penulis"];
    $penerbit = $_POST["penerbit"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $jumlah_tersisa = $_POST["jumlah_tersisa"];

    // Handle file upload for the book cover (gambar)
    $gambar = $_FILES["gambar"]["name"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($gambar);

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO buku (judul, gambar, deskripsi, penulis, penerbit, tahun_terbit, jumlah_tersisa) VALUES ('$judul', '$gambar', '$deskripsi', '$penulis', '$penerbit', $tahun_terbit, $jumlah_tersisa)";
        if ($conn->query($sql) === TRUE) {
            echo "Buku berhasil ditambahkan!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the image.";
    }
}
?>
