<?php
include_once '../koneksi.php';

	$idpenjualan =  $_GET['idpenjualan'];
	$username = $_SESSION['username'];
	$sql = mysqli_query ($koneksi," UPDATE 18149_penjualan set status='Sudah Bayar' where idpenjualan ='$idpenjualan'");
	header('Location:index.php?page=penjualan')

	
?>