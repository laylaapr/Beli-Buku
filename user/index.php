<?php
session_start();
error_reporting(0);
$user = $_SESSION['username'];
 if(empty($user) )
 {
  echo "<script>
      alert('Anda Belum Login!');
      window.location.href='../login.php'
      </script>";
 }
?>
<!DOCTYPE html>
<html>
<head>
  <title>BELI BUKU</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../js/jquery-ui/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/all.min.css">
</head>
<body>
  <div class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="http://www.malasngoding.com" class="navbar-brand">BELI BUKU</a>
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
          <li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#"><span class="glyphicon glyphicon-user">Welcome, <?php echo $_SESSION['username']; ?>!</span></a></li>
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
            <img class="img-responsive" src="../img/foto.png">
          </a>
        </div>  
    </div>

    <div class="row"></div>
    <ul class="nav nav-pills nav-stacked">
      <li class="active"><a href="index.php?page=default"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>     
      <li><a href="index.php?page=view"><span class="glyphicon glyphicon-briefcase"></span>  Buku</a></li>                              
      <li><a href="index.php?page=keranjang"><span class="glyphicon glyphicon-shopping-cart"></span> Keranjang</a></li>
      <li><a href="index.php?page=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
      <li><a href="index.php?page=order"><span class="glyphicon glyphicon-question-sign"></span> How to Order</a></li>     
      <li><a href="index.php?page=logout"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>     
    </ul>
  </div>
  <div class="col-md-10">
    <?php include 'page.php'; ?>
</div> 
</body>
</html>