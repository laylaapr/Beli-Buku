<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
<?php session_start();

include "koneksi.php";

if(isset($_POST['login'])){
		$username  = $_POST['username'];
		$password  = md5($_POST['password']);

$cekuser = mysqli_query($koneksi,"SELECT * FROM 18149_user WHERE username = '$username' and password = '$password'") or die (mysqli_error());

$login = mysqli_fetch_array($cekuser);
$USERNAME = $login['username'];
$PASS     = $login ['password'];

if ($login['level']  == "Admin"){
	$_SESSION['username']   = $USERNAME ;
	$_SESSION['level'] = "Admin";
	
echo "<script language='javascript'>
	alert('Anda berhasil Login Admin!'); document.location='admin/index.php';</script>
	";
} elseif ($login['level'] == "Pembeli"){
	$_SESSION['username']   = $USERNAME ;
	$_SESSION['level'] = "Pembeli";
echo "<script>
	alert('DATA VALID, SELAMAT DATANG USER'); document.location='user/index.php';
	</script>
	";
	
}else{
	echo "DATA TIDAK VALID";
}
}
?>
        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="" class="inner-login" method="post">
            <h3 class="text-center title-login">Login</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-block btn-custom-green" name="login" value="LOGIN" />
                
                <div class="text-center forget">
                    <a href="daftar.php"><p>Daftar?</p></a>
                </div>
            </form>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>