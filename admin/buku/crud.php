<?php
include "../koneksi.php";
$username = $_SESSION['username'];

if(isset($_POST['add']))
{
		$id_kategori = $_POST['id_kategori'];
		$judul = $_POST['judul'];
		$noisbn = $_POST['noisbn'];
		$penulis = $_POST['penulis'];
		$penerbit = $_POST['penerbit'];
		$tahun = $_POST['tahun'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		$deskripsi = $_POST['deskripsi'];

		$ekstensi_diperbolehkan	= array('png', 'jpg', 'jpeg');
			$nama = $_FILES['gambar']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['gambar']['size'];
			$file_tmp = $_FILES['gambar']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){	
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$sql = mysqli_query ($koneksi," INSERT INTO 18149_buku VALUES (NULL,'$id_kategori','$judul','$nama','$noisbn','$penulis', '$penerbit','$tahun','$stok','$harga','$deskripsi')");
					if($sql){
						echo "<div class='alert alert-success alert-dismissable'>
						<a href='index.php?page=default' class='close' data-dismiss='alert'aria-label='close'>&times;</a>
						<strong>Proses tambah Success!</strong>
						</div>";
						
					}else{
						echo "<div class='alert alert-danger alert-dismissable'>
						<a href='index.php?page=default' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<strong>Proses tambah Gagal! ulangi lagi</strong>
						</div>";
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}

//edit
if(isset($_POST['edit']))
{
		$idbuku = $_POST['idbuku'];
		$id_kategori = $_POST['id_kategori'];
		$judul = $_POST['judul'];
		$noisbn = $_POST['noisbn'];
		$penulis = $_POST['penulis'];
		$penerbit = $_POST['penerbit'];
		$tahun = $_POST['tahun'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		$deskripsi = $_POST['deskripsi'];

		$ekstensi_diperbolehkan	= array('png', 'jpg', 'jpeg');
			$nama = $_FILES['gambar']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['gambar']['size'];
			$file_tmp = $_FILES['gambar']['tmp_name'];	

		

		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){	
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$sql = mysqli_query ( $koneksi," UPDATE 18149_buku set id_kategori='$id_kategori', judul='$judul', gambar='$nama', noisbn='$noisbn', penulis='$penulis', penerbit='$penerbit', tahun='$tahun', stok='$stok', harga='$harga', deskripsi='$deskripsi' where idbuku ='$idbuku'");
					if($sql){
						echo "<div class='alert alert-success alert-dismissable'>
						<a href='index.php?page=default' class='close' data-dismiss='alert'aria-label='close'>&times;</a>
						<strong>Proses edit Success!</strong>
						</div>";
					}else{
						echo "<div class='alert alert-danger alert-dismissable'>
						<a href='index.php?page=default' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<strong>Proses Edit Gagal! ulangi lagi</strong>
						</div>";
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}

if(isset($_GET['delidbuku']))
{
	$idbuku   =  $_GET['delidbuku'];
		$del=mysqli_query($koneksi,"SELECT * from 18149_buku where idbuku='$idbuku'");
		$u =mysqli_fetch_array($del);
		if(is_file("file/".$u['gambar'])) unlink("file/".$u['gambar']); 
		mysqli_query($koneksi, "DELETE FROM 18149_buku WHERE idbuku='$idbuku'");
		echo" <div class='alert alert-success alert-dismissable'>
		<a href='index.php?page=default' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<strong>Proses Hapus Success!</strong>
		</div>";
		
	
		}
		
		
?>