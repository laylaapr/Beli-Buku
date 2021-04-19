<?php

$idbuku = $_GET['idbuku'];
//error_reporting(0);
include "koneksi.php";

		$query = mysqli_query ($koneksi,"select * from 18149_buku where idbuku='$idbuku' ");
		while ($row = mysqli_fetch_assoc($query))
		{
	?>
<!DOCTYPE html>
<html>
<head>
  <title>BELI BUKU</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
</head>
<body>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="close"><a href="index.php?page=view">
				<span aria-hidden="true">&times;</span></a>
			</button>
			<h4 class="modal-title">Detail Buku</h4>
		</div>
		<div class="modal-body table-responsive">
			<table class="table table-bordered no-margin">
				<tbody>
					<tr>
					<th colspan="2"><?php echo $row['judul'] ?><br>
					<h5>Rp.<?php echo $row['harga'];?></h5></th>
					</tr>
					<tr>
						<th rowspan="5"><img src="admin/file/<?php echo $row['gambar']?>" width="120"><br>
						<?php if ($row['stok'] > 0) {
							echo "<h5 style='color:green;'><i>In Stock</i></h5>";
						}else{
							echo "Habis";
						}
						?></h5></td></th>
						
					</tr>
					
					<td style="text-align: justify;"><strong>Sinopsis</strong><br><h5><?php echo $row['deskripsi'];?></h5></td>
					<tr>

					</tr>
				</tbody>
				 <?php } ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>