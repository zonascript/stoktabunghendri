<?php 
include 'db/pdo.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Stok Tabung Sumber Mas</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $base_url;?>">Stok Tabung</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <!--  li class="active"><a href="#">Barang</a></li-->
        <li><a href="<?php echo $base_url;?>/barang.php">Barang</a></li>
        <li><a href="<?php echo $base_url;?>/customer.php">Customer</a></li>
        <li><a href="<?php echo $base_url;?>/penjualan.php">Penjualan</a></li>
        <li><a href="<?php echo $base_url;?>/retur.php">Retur Penjualan</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">About</a></li>
        <?php 
        if($_SESSION['permission']=="admin"){
        
        ?>
        	<li><a href="<?php echo $base_url;?>/create_user.php">Create User</a></li>
        <?php 
        }
        ?>
        <li><a href="<?php echo $base_url;?>/logout.php">Logout</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>