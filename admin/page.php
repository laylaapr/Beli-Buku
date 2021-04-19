<?php
if (isset($_GET['page'])){
	$page = $_GET['page'];
	switch ($page){
		case 'buku':
		include "buku/view.php";
		break;

		case 'view':
		include "buku/view.php";
		break;

		case 'tambah':
		include "buku/add.php";
		break;

		case 'edit':
		include "buku/edit.php";
		break;
		
		case 'hapus':
		include "buku/proses.php";
		break;

		case 'tambah_kat':
		include "kategori/tambah.php";
		break;

		case 'user':
		include "user/view.php";
		break;

		case 'tambah_us':
		include "user/add.php";
		break;

		case 'penjualan':
		include "penjualan/view.php";
		break;

		case 'laporan':
		include "penjualan/laporan.php";
		break;

		case 'acc':
		include "penjualan/acc.php";
		break;

		case 'logout':
		include "logout.php";
		break;

		default:
		echo"<center><h3>MAAF, HALAMAN TIDAK DITEMUKAN!</h3></center>";
		break;
		}
}else{
include "buku/view.php";
}
?>	