<body>
  <form role="form" action="" method="POST" class="form-horizontal">
    <div class="form-group">
        <label>Pilih Kategori</label>
        <select name="kategori" class="selectpicker form-control">
        <?php include_once '../koneksi.php'; 
        $sql = mysqli_query($koneksi," SELECT * FROM 18149_kategori");
        while($data = mysqli_fetch_assoc($sql)){?>
        <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['kategori']; ?></option>
        <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Pilih">
    </div>
    </form>
  <section class="konten">
    <div class="container">
  <div class="row">
   <?php
     include('koneksi.php');
      if (isset($_POST['kategori'])) {
      $kategori=$_POST["kategori"];
      $sql=mysqli_query($koneksi,"SELECT * from 18149_buku where id_kategori=$kategori");
      
    }else {
      $sql = mysqli_query($koneksi,"SELECT * FROM 18149_buku");
  }
  while($data = mysqli_fetch_assoc($sql)){
    ?>
      <div class="col-md-3">
        <div class="thumbnail">
          <img src="../admin/file/<?php echo $data['gambar']; ?>" width="100" width="150"/>
        <div class="caption"><h4><?php echo $data['judul']; ?></h4>
          <h5>Rp.<?php echo $data['harga'];?></h5>
          <?php if ($data['stok'] > 0) {
            echo "<h5 style='color:green;'><i>In Stock</i></h5>";
           }else{
            echo "Habis";
           }
           ?></h5>
          <a href="index.php?page=keranjang&id=<?php echo $data['idbuku']; ?>" button class="btn btn-info mb-2">
    <span class="glyphicon glyphicon-shopping-cart"> </span></a>
    <a href="index.php?page=detail&idbuku=<?php echo $data['idbuku']; ?>" button class="btn btn-danger btn-md">Detail</a>
  </form>
          </div>
          
        </div>
        </div>
        <?php }
        ?>
</div>
</div>
</section>
 
   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>