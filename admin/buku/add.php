<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="close"><a href="index.php?page=view">
        <span aria-hidden="true">&times;</span></a>
      </button>
    </div>
<div class="row">
 <div class="col-md-4">  
  </div>
 <div class="col-md-4">  
  <div class="page-header">
   <h3>Tambah Buku</h3>
  </div>
  <?php include_once "crud.php"; ?>
  <form role="form" action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
    
  <div class="form-group">
        <label>Pilih Kategori</label>
        <select name="id_kategori" class="selectpicker form-control">
        <?php include_once '../koneksi.php'; 
        $sql = mysqli_query($koneksi," SELECT * FROM 18149_kategori");
        while($data = mysqli_fetch_assoc($sql)){?>
        <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['kategori']; ?></option>
        <?php } ?>
        </select>
    </div>
   <div class="form-group">
    <label>Judul Buku</label>
    <input type="text" name="judul" class="form-control" required>
   </div>
   <div class="form-group">
    <label>Gambar</label>
    <input type="file" name="gambar" class="form-control" required>
   </div>
   <div class="form-group">
    <label>No ISBN</label>
    <input type="text" name="noisbn" class="form-control" required>
   </div>
   <div class="form-group">
    <label>penulis</label>
    <input type="text" name="penulis" class="form-control" required>
   </div>
   <div class="form-group">
    <label>Penerbit</label>
    <input type="text" name="penerbit" class="form-control" required>
   </div>
   <div class="form-group">
    <label>Tahun</label>
    <input type="text" name="tahun" class="form-control" required>
   </div>
   <div class="form-group">
    <label>Stok</label>
    <input type="text" name="stok" class="form-control" required>
   </div>
   <div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control" required>
   </div>
   <div class="form-group">
    <label>Deskripsi</label>
    <textarea class="form-control" name="deskripsi" rows="3"></textarea>
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-primary" name="add"> <span class="glyphicon glyphicon-floppy-disk"> Save</span></button>
  <button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-ban-circle"> Reset</span></button>
   </div>
  </form>
 </div>
 <div class="col-md-4">  
  
 </div>
</div>
</div>
</div>
