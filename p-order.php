<?php
include 'koneksi.php';

$id_user = $_POST['id_user'];
$nama_product = $_POST['nama_product'];
$quantity = $_POST['quantity'];
$alamat = $_POST['alamat'];
$jenis_pembayaran = $_POST['jenis_pembayaran'];
$price = $_POST['price'];
$full_price = $quantity * $price;

$sql = "INSERT INTO order_list VALUES ('$id_order', '$id_user', '$nama_product', '$quantity','$full_price', '$alamat','$jenis_pembayaran' )";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location:lihatorder.php");
} else {
    header("location:products.php?$id_order&$id_user&$nama_product&$quantity&$full_price&$alamat&$jenis_pembayaran");
}