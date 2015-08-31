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
		$no_id = $_GET["no_id"];
	
		$users = getDataUserById($no_id);
		//var_dump($users);
		//var_dump($users);
	?>
		
		<h2>Edit User</h2>
		<form name="edit_user" method="post" action="user_edit.php">
		<?php foreach ($users as $row):?>
		<input type="hidden" name="no_id" value="<?php echo $row['no_id'];?>"/>
		
		<table>
		  <tr>
		  	<td><span>Username : </span></td>
		  	<td><input type="text" name="username" value="<?php echo $row['username']?>"/></td>
		  </tr>
		  <tr>
		  	<td><span>Password : </span></td>
		  	<td><input type="text" name="password" value="<?php echo $row['password']?>"/></td>
		  </tr>
		  <tr>
		  	<td><span>Permission : </span></td>
		  	<td>
		  		<select name="permission" id="permission">
				<option value=""></option>
				<option value="admin" <?php if ($row['permission']=="admin"){echo"selected";}?>>Admin</option>
				<option value="owner" <?php if ($row['permission']=="owner"){echo"selected";}?>>Owner</option>
				<option value="karyawan" <?php if ($row['permission']=="karyawan"){echo"selected";}?>>Karyawan</option>
				</select>  	
		  	</td>
		  </tr>
		</table>
		
		<?php endforeach;?>
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
				} else {
					
				}
			?>
		</div>
		
		
	<?php 
	}
  ?>
  
  </div>
  
</div><!-- /.container -->

<?php 
	include "footer.php";
?>