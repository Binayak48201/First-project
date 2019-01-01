<?php 
include '../bootstap.php'; 

// $sql = "SELECT * FROM products INNER JOIN category ON products.category_id = category.id";
// $stmt= $pdo->prepare($sql);
// $stmt->execute();
// $products = $stmt->fetchALL(PDO::FETCH_OBJ);
$products = $query->selectAll('category');
if(isset($_POST['submit']))
{
	$title = $_POST['title'];
	$discount = $_POST['discount'];
	$body = $_POST['body'];
	$category_id = $_POST['category_id'];

	$sql = "INSERT INTO products (title, body, discount,category_id)
	VALUES (?,?,?,?)";

	$stmt= $pdo->prepare($sql);
	$stmt->execute([$title, $body, $discount,$category_id]);
	redirect('/admin/view_product.php?Success');

}

include 'layouts/header.php'; 


?>
<div class="breadcrumb-holder">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active">Products</li>
		</ul>
	</div>
</div>

<section>
	<div class="container-fluid">
		<!-- Page Header-->
		<header> 
			<h1 class="text-center">Add The Product</h1>
		</header>
		<div class="row">
			<div class="col-md-12">
				<form method="POST" action="<?=getBaseUrl();?>add_product.php">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="discount">Discount</label>
						<input type="number" name="discount" class="form-control" id="discount" placeholder="Password">
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right col-form-label" 
						for="form-field-1"for="form-field-1">Category*</label>
						<select name="category_id" class="col-xs-10 col-sm-5">
							<?php foreach($products as $product): ?>
								<option value="<?= $product->id; ?>"><?=$product->name; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="body">Description</label>
						<textarea name="body" id="body" cols="30" rows="2"></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include 'layouts/footer.php' ?>