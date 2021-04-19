<?php
session_start();
//error_reporting(0);
$user = $_SESSION['username'];
 if(empty($user) )
 {
  echo "<script>
      alert('Anda Belum Login!');
      window.location.href='../login.php'
      </script>";
 }

$idbuku = $_GET['idbuku'];
//error_reporting(0);
include_once '../koneksi.php'; 

		$query = mysqli_query ($koneksi,"select * from 18149_buku where idbuku='$idbuku' ");
		while ($row = mysqli_fetch_assoc($query))
		{
?>
<div class="row">
 <div class="col-md-4">  
  </div>
 <div class="col-md-4">  
  <div class="page-header">
   <h3>Edit Buku</h3>
  </div>
  <?php include_once "crud.php"; ?>
  <form role="form" action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
    <input type="hidden" name="idbuku" class="form-control" value="<?php echo $row['idbuku']; ?>">
  <div class="form-group">
        <label>Pilih Kategori</label>
        <input type="text" class="form-control" value="<?php echo $row['id_kategori']; ?>" readonly><br>
        <select name="id_kategori" class="selectpicker form-control">
        <?php 
        $sql = mysqli_query($koneksi," SELECT * FROM 18149_kategori");
        while($data = mysqli_fetch_assoc($sql)){?>
        <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['kategori']; ?></option>
        <?php } ?>
        </select>
    </div>
   <div class="form-group">
    <label>Judul Buku</label>
    <input type="text" name="judul" class="form-control" value="<?php echo $row['judul']; ?>" required>
   </div>
   <div class="form-group">
    <label>Gambar</label>
    <input type="file" name="gambar" class="form-control" required>
   </div>
   <div class="form-group">
    <label>No ISBN</label>
    <input type="text" name="noisbn" class="form-control" value="<?php echo $row['noisbn']; ?>" required>
   </div>
   <div class="form-group">
    <label>penulis</label>
    <input type="text" name="penulis" class="form-control" value="<?php echo $row['penulis']; ?>" required>
   </div>
   <div class="form-group">
    <label>Penerbit</label>
    <input type="text" name="penerbit" class="form-control" value="<?php echo $row['penerbit']; ?>" required>
   </div>
   <div class="form-group">
    <label>Tahun</label>
    <input type="text" name="tahun" class="form-control" value="<?php echo $row['tahun']; ?>" required>
   </div>
   <div class="form-group">
    <label>Stok</label>
    <input type="text" name="stok" class="form-control" value="<?php echo $row['stok']; ?>" required>
   </div>
   <div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control" value="<?php echo $row['harga']; ?>" required>
   </div>
   <div class="form-group">
    <label>Deskripsi</label>
    <textarea class="form-control" name="deskripsi" value="<?php echo $row['deskripsi']; ?>" rows="3"></textarea>
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-primary" name="edit"> <span class="glyphicon glyphicon-floppy-disk"> Save</span></button>
  <button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-ban-circle"> Reset</span></button>
   </div>
  </form>
 </div>
 <div class="col-md-4">  
  
 </div>
</div>
 <?php } ?>