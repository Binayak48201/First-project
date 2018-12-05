<!-- Database Content -->
<?php 
    require 'bootstap.php';
	require 'database/function.php';
	// dd($_SERVER);

// <!-- Page Content & NavBar-->

     $allproducts = $query->selectAll('products');
     // dd($allproducts);

	require 'views/layouts/header.php';


 

    require 'views/index.php';

 


	require('views/layouts/footer.php');





