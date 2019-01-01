<?php 
include '../bootstap.php'; 
include 'layouts/header.php'; 
$categorys = $query->selectAll('category');
?>

<div class="breadcrumb-holder">
  <div class="container-fluid">
   <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">Category</li>
  </ul>
</div>
</div>

<section>
  <div class="container-fluid">
    <!-- Page Header-->
    <header> 
      <a href="<?=getBaseUrl();?>add_category.php">
       <button type="button" class="btn btn-success">+Add Category</button>
     </a>
   </header>
   <div class="row">
    
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Lists of Category </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>S.N</th>
                  <th> Name</th>
                </tr>
              </thead>
              <tbody>
               <?php foreach($categorys as $key=>$category): ?>
                 <tr>
                   <th scope="row"><?= ++$key; ?></th>
                   <td><?= $category->name; ?></td>
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