<?php 
    require '../../bootstap.php'; 
    require '../../database/function.php';
  $product_id = $_GET['id'];

  $statements = $query->show('products',$product_id);
// dd($statements);

// echo "$product_id->title";
?>
<?= $statements[0]->body; ?>