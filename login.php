<?php
include 'header.php';
?>
<div class="container">
  
  <div class="text-center">
	<form action="login_check.php" method="post">
		<table>
		  <tr>
		  	<td><span>username : </span></td>
		  	<!-- td><input type="text" name="username" id="username" onkeydown="if (event.keyCode == 13) document.getElementById('click').click()"/></td-->
		  	<td><input type="text" name="username" id="username"/></td>
		  </tr>
		  <tr>
		  	<td><span>password : </span></td>
		  	<!-- td><input type="text" name="password" id="password" onkeydown="if (event.keyCode == 13) document.getElementById('click').click()"/></td-->
		  	<td><input type="text" name="password" id="password"/></td>
		  </tr>
		 </table>
 	 	 <!-- button id="click" value="click" onclick="loginCheck(document.getElementById('username').value,document.getElementById('password').value)">Login</button-->	
 	 	 <input type="submit" name="submit" value="Login"/>
 	</form>
  </div>
  <div id="loginHint" class="text-center">
  <?php 
  	$empty = $_GET['empty'];
  	if($empty=="username"){
  		echo "<span class='login_alert'>username belum diisi</span>";
  	}
  	elseif ($empty=="password"){
  		echo "<span class='login_alert'>password belum diisi</span>";
  	}
  	$nopass = $_GET['nopass'];
  	if ($nopass==true) {
  		echo "<span class='login_alert'>password salah</span>";
  	}
  ?>
  </div>
</div><!-- /.container -->
<?php 
	include 'footer.php';
?>