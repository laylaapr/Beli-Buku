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
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="close"><a href="#">
        <span aria-hidden="true">&times;</span></a>
      </button>
      <h4 class="modal-title">About Me</h4>
    </div>
    <div class="modal-body table-responsive">
      <table class="table table-bordered no-margin">
        <tbody>
          <tr>
           <td rowspan="5" ><img src="img/foto.jpg" width="200" class="img-thumbnail"></td>
           <td>
           Nama : Lailatul Badria D.A.A<br>
           Nomor Hp : 087758841373<br>
           Alamat : Jl. KhH Abd. Muin No.66, Bangkalan.<br>
           <br>
           <br>

           <p>Aplikasi ini dibuat untuk memenuhi Nilai tugas akhir Pengembangan Aplikasi Web</p>
           <label class="font-weight-bold">Sosial Media </label><br>
          <a href="https://www.facebook.com/laylaapr"><img src="img/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="https://www.instagram.com/laylaapr/"><img src="img/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="img/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
         </td>

          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>