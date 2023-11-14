<?php
include '../conn.php';

// get variable from form input
$nama_buket = $_POST["nama_buket"];
$kategori = $_POST["kategori"];
$sizebuket = $_POST["sizebuket"];
$status = $_POST["status"];
$harga = $_POST["harga"];

// Upload Proses
$target_dir = "assets/img/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

// echo "INSERT INTO `buket` (`nama_buket`, `id_kategori`, `id_sizebuket`, `id_status`, `harga`, `gambar`) 
// VALUES ('$nama_buket', '$kategori', '$sizebuket', '$status', '$harga', '$target_file');";

$result = mysqli_query($conn, "INSERT INTO `buket` (`nama_buket`, `id_kategori`, `id_sizebuket`, `id_status`, `harga`, `gambar`) 
VALUES ('$nama_buket', '$kategori', '$sizebuket', '$status', '$harga', '$target_file');");

header("Location:index.php");
