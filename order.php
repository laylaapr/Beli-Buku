<!DOCTYPE html>
<html>
<head>
  <title>BELI BUKU</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
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
    <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="#">How to Order?</a></li>
                         </ol>
                        </nav>
                    </div>
                </div>
              <div class="col-7">
                  <div class="text-right upgrade-btn">
                   </div>
                </div>
            </div>
        </div>
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="close"><a href="#">
        <span aria-hidden="true">&times;</span></a>
      </button>
      <h4 class="modal-title">Cara Beli Buku</h4>
    </div>
    <div class="modal-body table-responsive">
      <table class="table table-bordered no-margin">
        <tbody>
          <tr>
            <td>1. Pastikan anda sudah Register dan melakukan Login<br>
            	2. Cari buku berdasarkan kategori yang ada.<br>
            	3. Masukkan produk ke keranjang, dan pastikan jumlah buku yang ingin dibeli.<br>
            	4. Klik icon disamping <b>Sum</b> untuk menghitung total pembelian
            	<img src="img/cnth.png" width="200"><br>
            	5. Jika sudah keluar total pembelian, lalu checkout.<br>
            	6. Pembayaran dilakukan Via Transfer Ke Rekening <b>BRI - 610701015635535 a/n Lailatul Badria D.A.A</b><br>
            	7. Konfirmasi pembayaran dilakukan dengan mengirim bukti transfer ke nomor <b>087758841373</b>.<br>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<hr size="10px" width="100%" align="left">

<hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-9" >
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i>2021 -  Designed by Lailatul Badria D.A.A<br>

          </div>
          </div>
          <div class="col-md-3 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="#"><img src="img/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="#"><img src="img/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="img/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
        </div>
          </div>
        </div>
      </div>
  <!-- Akhir Footer -->
 
   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
   <!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>