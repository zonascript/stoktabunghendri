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
<div class="navbar navbar-inverse navbar-static-top">
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
        <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Barang <b class="caret"></b></a>
	        <ul class="dropdown-menu">
		        <li><a href="<?php echo $base_url;?>/barang.php">Lihat Barang</a></li>
		        <li><a href="<?php echo $base_url;?>/input_barang.php">Input Barang</a></li>
				<li><a href="<?php echo $base_url;?>/kategori.php">Jenis Barang</a></li>
	        </ul>
        </li>
        <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer <b class="caret"></b></a>
	        <ul class="dropdown-menu">
		        <li><a href="<?php echo $base_url;?>/customer.php">Lihat Customer</a></li>
		        <li><a href="<?php echo $base_url;?>/input_customer.php">Input Customer</a></li>
	        </ul>
        </li>
        <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Penjualan <b class="caret"></b></a>
	        <ul class="dropdown-menu">
	        	<li><a href="<?php echo $base_url;?>/penjualan.php">Input Penjualan</a></li>
		        <li><a href="<?php echo $base_url;?>/retur.php">Retur Penjualan</a></li>
		        <li><a href="<?php echo $base_url;?>/cek_faktur.php">Cek Faktur</a></li>
	        </ul>
        </li>
        <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Refill <b class="caret"></b></a>
	        <ul class="dropdown-menu">
	        	<li><a href="<?php echo $base_url;?>/refill.php">Input Refill Tabung</a></li>
		        <li><a href="<?php echo $base_url;?>/retur_refill.php">Retur Refill Tabung</a></li>
	        </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- li><a href="#">About</a></li-->
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