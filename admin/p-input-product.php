<?php
include '../koneksi.php';

$nama_product = $_POST['nama_product'];
$harga_product = $_POST['harga_product'];
$jenis_product = $_POST['jenis_product'];
$jumlah_tersedia = $_POST['jumlah_tersedia'];

$target_dir = "gambar-product/";
$target_file = $target_dir . basename($_FILES["gambar_product"]['name']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
if (move_uploaded_file($_FILES['gambar_product']['tmp_name'], $target_file)) {
    echo "The file " . basename($_FILES["gambar_product"]["name"]) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

if (eregi('.jpg' . $_FILES["gambar_product"]["tmp_name"])) {
    imagepng(imagecreatefromjpeg($_FILES["gambar_product"]["tmp_name"]) . 'gambar-poduct/' . $_FILES["gambar_product"]["name"]);
}

$image = basename($_FILES["gambar_product"]["name"] + ".jpg");
$sql = "INSERT INTO product VALUES('', '$nama_product', '$harga_product', '$jenis_product', '$jumlah_tersedia', '$image')";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location: input-product.php");
}