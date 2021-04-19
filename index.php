<!DOCTYPE html>
<html>
<head>
  <title>BELI BUKU</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
  <!-- end: CSS -->

</head>
<body>
  <div class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="" class="navbar-brand">BELI BUKU</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">        
        <ul class="nav navbar-nav navbar-right">
          <li><a id="pesan_sedia" href="#" data-toggle="modal" data-target="#modalpesan"><span class='glyphicon glyphicon-comment'></span>  Pesan</a></li>
         <li><a class="dropdown-toggle" role="button" href="login.php"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- modal input -->
  <div id="modalpesan" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Pesan Notification</h4>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>           
        </div>
        
      </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="row">
      <div class="col-xs-6 col-md-12">
          <a class="thumbnail">
            <img class="img-responsive" src="img/foto.png">
          </a>
        </div>  
    </div>

    <div class="row"></div>
    <ul class="nav nav-pills nav-stacked">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>
      <li><a href="user/"><span class="glyphicon glyphicon-shopping-cart"></span> Keranjang</a></li>
      <li><a href="about.php"><span class="glyphicon glyphicon-user"></span> About</a></li>
      <li><a href="order.php"><span class="glyphicon glyphicon-question-sign"></span> How to Order</a></li>     
    </ul>
  </div>
  <div class="col-md-10">
  <body>
  <form role="form" action="" method="POST" class="form-horizontal">
    <div class="form-group">
        <label>Pilih Kategori</label>
        <select name="kategori" class="selectpicker form-control">
        <?php include_once 'koneksi.php'; 
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
          <img src="admin/file/<?php echo $data['gambar']; ?>" width="150"/>
        <div class="caption"><h4><?php echo $data['judul']; ?></h4>
          <h5>Rp.<?php echo $data['harga'];?></h5>
          <?php if ($data['stok'] > 0) {
            echo "<h5 style='color:green;'><i>In Stock</i></h5>";
           }else{
            echo "Habis";
           }
           ?></h5>
          <a href="login.php"  onClick = "return confirm('Anda belum Login, Login sekarang?')" button class="btn btn-info btn-md">
    <span class="glyphicon glyphicon-shopping-cart"> </span></a>
    <a href="detail.php?idbuku=<?php echo $data['idbuku']; ?>" button class="btn btn-danger btn-md">Detail</a>
          </div>
          
        </div>
        </div>
        <?php }
        ?>

</div>
</div>
</div>
</div>

</body>
</html>