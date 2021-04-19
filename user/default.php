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
 <html>
  <body>
  <script>
    $(document).ready(function() {
    $('#data').DataTable();
    } );
  </script>
  <div class="container">
    <br>
    <h2 style="text-align: center; ">Riwayat Pembelian</h2>     
    <table class="table table-bordered" width="900" id="data">
    <thead>
    <tr>
      <td align="center">Id Pembelian</td >
      <td align="center">Nama Lengkap</td >
      <td align="center">Judul</td >
      <td align="center">Harga</td >
      <td align="center">Tanggal</td >
      <td align="center">Jumlah</td >
      <td align="center">Total</td >
      <td align="center">Status</td >
      
    </tr>
    </thead>
     <tbody>
<?php
include_once '../koneksi.php';

$sql = mysqli_query($koneksi,"SELECT 18149_pembeli.nama_lengkap, 18149_buku.judul, 18149_buku.harga, idpenjualan, tanggal, jumlah, total, status FROM 18149_pembeli, 18149_buku, 18149_penjualan WHERE 18149_penjualan.idbuku=18149_buku.idbuku AND 18149_pembeli.id_pembeli=18149_penjualan.id_pembeli AND 18149_pembeli.username='$user'");
while($data = mysqli_fetch_assoc($sql)){
      ?>
    <tr>
    <td><?php echo $data['idpenjualan']; ?></td>
    <td><?php echo $data['nama_lengkap']; ?></td>
    <td><?php echo $data['judul']; ?></td>
    <td><?php echo $data['harga']; ?></td>
    <td><?php echo $data['tanggal']; ?></td>
    <td><?php echo $data['jumlah']; ?></td>
    <td><?php echo $data['total']; ?></td>
    <td><?php echo $data['status']; ?></td>
  </tr>  

  
<?php                     
}
?>
</div>
</tbody>
</table>
</body>
</html>
