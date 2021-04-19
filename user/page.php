<?php
if (isset($_GET['page'])){
	$page = $_GET['page'];
	switch ($page){
		case 'default':
		include "default.php";
		break;

		case 'view':
		include "buku/view.php";
		break;

		case 'detail':
		include "buku/detail.php";
		break;

		case 'keranjang':
		include "buku/cart.php";
		break;

		case 'checkout':
		include "buku/checkout.php";
		break;

		case 'about':
		include "about.php";
		break;

		case 'order':
		include "order.php";
		break;

		case 'logout':
		include "logout.php";
		break;

		default:
		echo"<center><h3>MAAF, HALAMAN TIDAK DITEMUKAN!</h3></center>";
		break;
		}
}else{
include "default.php";
}
?>	