 <html>
  <body>
  <script>
    $(document).ready(function() {
    $('#data').DataTable();
    } );
  </script>
  <div class="container">
    <br>
    <h2 style="text-align: center; ">Data Penjualan</h2>     
    <table class="table table-bordered" width="900" id="data">
    <thead>
    <tr>
      <td align="center">Id Penjualan</td >
      <td align="center">Id Buku</td >
      <td align="center">Id Pembeli</td >
      <td align="center">Jumlah</td >
      <td align="center">Total</td >
      <td align="center">Tanggal</td >
      <td align="center">Statu Pembayaran</td >
      <td align="center">Action</td >
      
    </tr>
    </thead>
     <tbody>
<?php
include_once '../koneksi.php';

$sql = mysqli_query($koneksi," SELECT * FROM 18149_penjualan");
while($data = mysqli_fetch_assoc($sql)){
      ?>
    <tr>
    <td><?php echo $data['idpenjualan']; ?></td>
    <td><?php echo $data['idbuku']; ?></td>
    <td><?php echo $data['id_pembeli']; ?></td>
    <td><?php echo $data['jumlah']; ?></td>
    <td><?php echo $data['total']; ?></td>
    <td><?php echo $data['tanggal']; ?></td>
    <td><?php echo $data['status']; ?></td>
    <td><a href="index.php?page=acc&idpenjualan=<?php echo $data['idpenjualan']; ?>" 
    onClick = "return confirm('Acc <?php echo $data['idpenjualan']; ?>?')" 
    button class="btn btn-info btn-md">Acc Pembayaran</a>
    </td>
    </tr>  
<?php                     
}
?>
</div>
</tbody>
</table>
</body>
</html>
