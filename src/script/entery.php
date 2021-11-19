<!-- Entery-->
<?php
	session_start();
	include 'connection.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user WHERE email = '$email'";

	$hasil = mysqli_query($konek, $query);
	$data = mysqli_fetch_array($hasil);
	$level = $data['level'];
	
	// Condition entry password
	if ($password == $data['password']) {

		// Login with authority
		$_SESSION['foto'] = $data['foto'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['email'] = $data['email'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['level'] = $data['level'];
		$_SESSION['nisn'] = $data['nisn'];
		$_SESSION['gender'] = $data['gender'];
		$_SESSION['place'] = $data['place'];
		$_SESSION['date'] = $data['date'];

		if ($level == '1') {
			echo "<html><body  onLoad=javascript:window.location.href='../../psb_2021_admin.php'></body></html>";
		} elseif ($level == '2') {
			echo "<html><body  onLoad=javascript:window.location.href='../../psb_2021_user.php'></body></html>";
		}

	} else {
?>
		<script language="JavaScript">
			alert('Password yang Anda masukkan salah');
			document.location = '../../login.php';
		</script>
<?php
	} 
?>