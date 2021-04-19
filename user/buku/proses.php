<?php
include '../koneksi.php';
require 'buku/item.php';

if(isset($_POST['add']))
{
// Save order details for new orders
	$id_pembeli=$_POST['id_pembeli'];
	$cart = unserialize(serialize($_SESSION['cart']));
	
	for($i=0; $i<count($cart);$i++) {
	$sql = mysqli_query($koneksi,"INSERT INTO 18149_penjualan (idpenjualan, idbuku, id_pembeli, jumlah, total, tanggal, status) VALUES (NULL,'$cart[$i]->idbuku', '$id_pembeli', '$cart[$i]->stok', '$cart[$i]->harga * $cart[$i]->stok', now(), 'Belum Bayar')")or die($koneksi->error);
}
unset($_SESSION['cart']);
}
	?>