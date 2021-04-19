<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="close"><a href="index.php?page=view">
        <span aria-hidden="true">&times;</span></a>
      </button>
    </div>
<div class="row">
 <div class="col-md-2">  
  </div>
 <div class="col-md-8">  
  <div class="page-header">
   <h3>Tambah Kategori</h3>
  </div>
  <?php 
  include '../koneksi.php';
  if(isset($_POST['add']))
  {
    $kategori = $_POST['kategori']; 
    $sql = mysqli_query ($koneksi," INSERT INTO 18149_kategori VALUES (NULL,'$kategori')");
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
        }
          ?>
  <form role="form" action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
   <div class="form-group">
    <label>Kategori</label>
    <input type="text" name="kategori" class="form-control" required>
   </div>
   <div class="form-group">
    <button type="submit" class="btn btn-primary" name="add"> <span class="glyphicon glyphicon-floppy-disk"> Save</span></button>
  <button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-ban-circle"> Reset</span></button>
   </div>
  </form>
 </div>
 <div class="col-md-2">  
  
 </div>
</div>
</div>
</div>
