<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
	session_start();
    include 'koneksi.php';
	if(isset($_POST['daftar'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
        $nama_lengkap = $_POST['nama_lengkap'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
		
		$tampil = mysqli_query($koneksi," INSERT INTO 18149_pembeli set username='$username', password='$password', nama_lengkap='$nama_lengkap',alamat='$alamat',no_hp='$no_hp', email='$email'");
		if($tampil){
                echo" <div class='alert alert-success alert-dismissable'>
                <a href='login.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Proses daftar Success!</strong>
                </div>";
            $sql = mysqli_query($koneksi,"INSERT INTO 18149_user set username='$username', password='$password', level='Pembeli'");
    
    }
    else{
        echo "GAGAL";
    }
}
    ?>
        <br>
        <br>
        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="" class="inner-login" method="post">
            <h3 class="text-center title-login">Daftar</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="no_hp" placeholder="Nomor Hp (masih aktif)">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <input type="submit" class="btn btn-block btn-custom-green" name="daftar" value="DAFTAR" />
                
                <div class="text-center forget">
                    <p><a href="login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>