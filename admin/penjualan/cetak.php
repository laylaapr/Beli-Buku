<!DOCTYPE html>
<html>
<head>
 <title>Laporan</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <table>
 <tr>
 <th align="center">Tanggal</th >
 <th align="center">Id Buku</th >
 <th align="center">Id Pembeli</th >
 <th align="center">Jumlah</th >
 <th align="center">Total</th >
 </tr>
 <?php 
 include_once '../../koneksi.php';
 $total=0;
 $sql = mysqli_query($koneksi," SELECT * FROM 18149_penjualan where status='Sudah Bayar'");
 while($data = mysqli_fetch_assoc($sql)){
 ?>
 <tr>
 	<td><?php echo $data['tanggal']; ?></td>
    <td><?php echo $data['idbuku']; ?></td>
    <td><?php echo $data['id_pembeli']; ?></td>
    <td><?php echo $data['jumlah']; ?></td>
    <td><?php echo $data['total']; ?></td>
    
 </tr>
 <?php 

 $total += $data['total'];
 }
 ?>
 <tr>
    <td colspan="4" align="right"><h5>Total Bayar</h5></td>
    <td><h5>Rp. <?= number_format($total); ?></h5></td>
 </tr>
 </table>
  <script>
 window.print();
 </script>
</body>
</html>