<?php 

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'database/function.php';
require 'database/helper.php';
require 'path.php';

// Calling the urlBasePath function to execute it
$path = getBaseUrl();

// Connection Making
$pdo = Connection::make();

$query =  new QueryBuilder($pdo);