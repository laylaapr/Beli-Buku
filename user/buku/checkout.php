<?php
session_start();
error_reporting(E_ALL);
//error_reporting(0);
$user = $_SESSION['username'];
 if(empty($user) )
 {
  echo "<script>
      alert('Anda Belum Login!');
      window.location.href='../login.php'
      </script>";
 }
 include '../koneksi.php';

$dt=mysqli_query($koneksi,"SELECT * from 18149_pembeli where username='$user'");
while ($row=mysqli_fetch_assoc($dt)) {
 ?>
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="close"><a href="index.php?page=view">
        <span aria-hidden="true">&times;</span></a>
      </button>
      <h4 class="modal-title">Checkout</h4>
    </div>
<div class="row">
 <div class="col-md-2">  
  </div>
 <div class="col-md-4">  
<?php
include '../koneksi.php';
require 'item.php';

if (!isset($_SESSION['cart'])) {
 header('Location: index.php?page=keranjang');
}

if(isset($_POST['add']))
{
// Save order details for new orders
  $id_pembeli=$_POST['id_pembeli'];
  $username = $_SESSION['username'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
  $sql = mysqli_query($koneksi,'INSERT INTO 18149_penjualan (idpenjualan, idbuku, id_pembeli, jumlah, total, tanggal, status) VALUES (NULL,'.$cart[$i]->idbuku.', '.$id_pembeli.', '.$cart[$i]->stok.', '.$cart[$i]->harga*$cart[$i]->stok.',now(), "Belum Bayar")')or die($koneksi->error);

}
unset($_SESSION['cart']);
header('Location: index.php?page=keranjang');
}
  ?>
  <form role="form" action="" method="POST" class="form-horizontal">
    <br>
   <div class="form-group">
   	<label>Id User</label>
    <input type="text" name="id_pembeli" class="form-control" value="<?php echo $row['id_pembeli'] ?>" readonly>
   </div>
   <button type="submit" class="btn btn-primary" name="add"> Konfirmasi</button>
   <br>
   <br>
   <?php } ?>
</form>
</div>
</div>
</div>
</div>
