<?php 
	include "header.php";
	
?>

<div class="container">
  
  <div class="text-center">
  	

  <?php 
  	if($_SESSION['permission']!="admin"){
		echo "Anda Tidak Memiliki Akses Untuk Halaman Ini!!!!";
	} else {
		//echo "selamat datang di create user.";
		$users = getAllDataUser();
		//var_dump($users);
	?>
		
		<h2>Create User</h2>
		<form name="create_user" method="post" action="user_create.php">
		
		<table>
		  <tr>
		  	<td><span>Username : </span></td>
		  	<td><input type="text" name="username" autofocus="autofocus"/></td>
		  </tr>
		  <tr>
		  	<td><span>Password : </span></td>
		  	<td><input type="text" name="password"/></td>
		  </tr>
		  <tr>
		  	<td><span>Permission : </span></td>
		  	<td>
		  		<select name="permission" id="permission">
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="owner">Owner</option>
				<option value="karyawan">Karyawan</option>
				</select>	  	
		  	</td>
		  </tr>
		</table>
			<br/>
			<span><input type="submit" name="submit" value="Submit"> </span>
		</form>
		
		<div>
			<?php 
				if ($_GET['input']=="success") {
					echo "<span class='input_success'>create user sukses</span>";
				} elseif ($_GET['empty']=="username") {
					echo "<span class='input_failed'>username belum diisi</span>";
				} elseif ($_GET['empty']=="password") {
					echo "<span class='input_failed'>password belum diisi</span>";
				} elseif ($_GET['empty']=="permission") {
					echo "<span class='input_failed'>pilih permission user</span>";
				} elseif (isset($_GET['edit'])) {
					echo "<span class='input_success'>user dengan username ".$_GET['edit']." telah diedit</span>";
				} elseif (isset($_GET['hapus'])) {
					echo "<span class='input_success'>user dengan username ".$_GET['hapus']." telah dihapus</span>";
				} else {
					
				}
			?>
		</div>
		<br/><br/>
		<div class="table">
		<table border="1" cellpadding="10" cellspacing="0" >
		  <tr>
		  	<th>No</th>
		    <th>Username</th>
		    <th>Password</th>
		    <th>Permission</th>
		    <th>Action</th>
		  </tr>
			<?php 
			foreach ($users as $user):
				$no_id = $user['no_id'];
			?>
				<tr>
			<?php 
				foreach ($user as $item):
				?>
					    <td style="border-bottom:none;"><?php echo $item; ?></td>
				<?php 
				endforeach;
			?>
						<td style="border-bottom:none;"><a href="edit_user.php?no_id=<?php echo $no_id;?>">Edit</a> | <a href="hapus_user.php?no_id=<?php echo $no_id;?>">Hapus</a></td>
			 	 </tr>
			<?php 
			endforeach;
			?>
	
	
		
		</table>
		
	<?php 
	}
  ?>
  
  </div>
  
</div><!-- /.container -->

<?php 
	include "footer.php";
?>