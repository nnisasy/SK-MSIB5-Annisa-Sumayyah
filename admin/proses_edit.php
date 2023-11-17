<?php
include '../conn.php';

// get variable from form input
$nama_buket = $_POST["nama_buket"];
$kategori = $_POST["kategori"];
$sizebuket = $_POST["sizebuket"];
$status = $_POST["status"];
$harga = $_POST["harga"];

// Upload Proses
if ($_FILES["fileToUpload"]["size"] != 0) {   // Jika browse image di tekan maka $_FILES akan terisi
    $target_dir = "assets/img/"; // path directory image akan di simpan
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }

    $result = mysqli_query($conn, "UPDATE `buket` set `nama_buket` = '$nama_buket', `id_kategori` = '$kategori', `id_sizebuket` = '$sizebuket', `id_status` = '$status', `harga` = '$harga', `gambar`= '$target_file' where `id_buket` = '$_GET[id_buket]'");
}

// echo "UPDATE `buket` set `nama_buket` = '$nama_buket', `id_kategori` = '$kategori', `id_sizebuket` = '$sizebuket', `id_status` = '$status', `harga` = '$harga', `gambar`= '$target_file' where `id_buket` = '$_GET[id_buket]'";

$result = mysqli_query($conn, "UPDATE `buket` set `nama_buket` = '$nama_buket', `id_kategori` = '$kategori', `id_sizebuket` = '$sizebuket', `id_status` = '$status', `harga` = '$harga' where `id_buket` = '$_GET[id_buket]'");

header("Location:index.php");
