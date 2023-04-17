<?php
	if (empty($_POST['nama'])) {
		header("Location:redirectTugas2.php");
	}else if(empty($_POST['email'])) {
		header("Location:redirectTugas2.php");
	} else {
		echo "<center>Nama :" .$_POST['nama']. "</center><br>";
		echo "<center>Email :" .$_POST['email']. "</center><br>";
		echo "<center>Login pada : ". include('incTugas1.php'); echo $aktivitas;
	}
	
?>