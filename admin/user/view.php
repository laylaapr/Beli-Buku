<?php
session_start();
error_reporting(0);
$user = $_SESSION['username'];
 if(empty($user) )
 {
	echo "<script>
			alert('Anda Bukan Admin!');
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
		<div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-5">
                    <h4 class="page-title">USER</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                         <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="index.php?page=tambah_us">Tambah Admin</a></li>
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
		<table class="table table-bordered" style="width:850px;" id="data">
		<thead>
		<tr>
			<td align="center">Id User</td >
			<td align="center">Username</td >
			<td align="center">Level</td >
			
		</tr>
		</thead>
<tbody>
		  
<?php
include_once "../koneksi.php";
error_reporting(0);

$sql = mysqli_query($koneksi," SELECT * FROM 18149_user");
if(!$sql){
echo mysqli_error();
}
while($data = mysqli_fetch_assoc($sql)){
	?>
	
		<tr>
		<td><?php echo $data['id_user']; ?></td>
		<td><?php echo $data['username']; ?></td>
		<td><?php echo $data['level']; ?></td>
		</tr>
	
<?php
                      
}
?>
</tbody>
</table>
</body>
</html>
