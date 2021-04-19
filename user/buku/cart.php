<?php 
// Start the session
session_start();
include '../koneksi.php';
require 'item.php';

if(isset($_GET['id']) && !isset($_POST['update']))  { 
	$sql = "SELECT * FROM 18149_buku WHERE idbuku=".$_GET['id'];
	$result = mysqli_query($koneksi, $sql);
	$product = mysqli_fetch_object($result); 
	$item = new Item();
	$item->idbuku = $product->idbuku;
	$item->id_kategori = $product->id_kategori;
	$item->judul = $product->judul;
	$item->idbuku = $product->idbuku;
    $iteminstock = $product->stok;
    $item->harga = $product->harga;
	$item->stok = 1;
	// Check product is existing in cart
	$index = -1;
	$cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
	for($i=0; $i<count($cart);$i++)
		if ($cart[$i]->idbuku == $_GET['id']){
			$index = $i;
			break;
		}
		if($index == -1) 
			$_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
		else {
			
			if (($cart[$index]->stok) < $iteminstock)
				 $cart[$index]->stok ++;
			     $_SESSION['cart'] = $cart;
		}
}
// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}
// Update quantity in cart
if(isset($_POST['update'])) {
  $arrQuantity = $_POST['stok'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->stok = $arrQuantity[$i];
  }
  $_SESSION['cart'] = $cart;
}
?>
<h2> Items in your cart: </h2> 
<form method="POST">
<table class="table table-bordered" id="t01">
<tr>
	<th align="center">Option</th >
	<th align="center">Id Buku</th >
      <th align="center">Judul</th >
      <th align="center">Harga</th >
      <th align="center">Jumlah</th >
      <th align="center">Total</th >
</tr>
<?php 
     $cart = unserialize(serialize($_SESSION['cart']));
 	 $s = 0;
 	 $index = 0;
 	for($i=0; $i<count($cart); $i++){
 		$s += $cart[$i]->harga * $cart[$i]->stok;
 ?>	
   <tr>
    	<td><a href="index.php?page=keranjang&index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a> </td>
   		<td> <?php echo $cart[$i]->idbuku; ?> </td>
   		<td> <?php echo $cart[$i]->judul; ?> </td>
   		<td>Rp. <?php echo $cart[$i]->harga; ?> </td>
        <td> <input type="number" min="1" value="<?php echo $cart[$i]->stok; ?>" name="stok[]"> </td>  
        <td> Rp.<?php echo $cart[$i]->harga * $cart[$i]->stok; ?> </td> 
   </tr>
 	<?php 
	 	$index++;
 	} ?>
 	<tr>
 		<td colspan="5" style="text-align:right; font-weight:bold">Sum 
         <input id="saveimg" type="image" src="images/save.png" name="update" alt="Save Button" width="20">
         <input type="hidden" name="update">
 		</td>
 		<td> Rp.<?php echo $s; ?> </td>
 	</tr>
</table>
</form>
<br>
<a href="index.php?page=view" button class="btn btn-info mb-2">Continue Shopping</a>
 <a href="index.php?page=checkout" button class="btn btn-danger btn-md">Checkout</a>
<?php 
if(isset($_GET["id"]) || isset($_GET["index"])){
 header('Location: index.php?page=keranjang');
} 
?>