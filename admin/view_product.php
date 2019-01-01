<?php 
include '../bootstap.php'; 
include 'layouts/header.php'; 
$products = $query->selectAll('products');
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
            <a href="<?=getBaseUrl();?>add_product.php">
            	<button type="button" class="btn btn-success">+Add Product</button>
            </a>
          </header>
          <div class="row">
  
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Lists of products </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>S.N</th>
                          <th>Title Name</th>
                          <th>Body</th>
                          <th>Discount</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php foreach($products as $key=>$product): ?>
	                        <tr>
	                          <th scope="row"><?= ++$key; ?></th>
	                          <td><?= $product->title; ?></td>
	                          <td><?= $product->body; ?></td>
	                          <td><?= $product->discount; ?></td>
	                        </tr>
                    	<?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php include 'layouts/footer.php' ?>