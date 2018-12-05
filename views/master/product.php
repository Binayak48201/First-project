<?php 
	$e_id=$_GET['show'];
     $allproducts = $query->show('products',$e_id);
?>

<?php 
	echo "$allproducts->title";
 ?>