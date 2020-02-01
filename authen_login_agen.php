<?php
	//CARA 3
	include "koneksi.php";

	$email_agen = $_POST['email_agen'];
	$password = $_POST['password'];

	$query = "SELECT * FROM profil_agen WHERE email_agen='$email_agen' AND password='$password'";

	$result = mysqli_query ($koneksi, $query) or die(mysqli_error($koneksi));	

	$count = mysqli_num_rows($result);
	
	if($count > 0)
	{
		session_start();

		$_SESSION['email_agen'] = $email_agen;
		$_SESSION['password'] = $password;
        $_SESSION['status'] = "login";
        
        $email_agen = $_POST['email_agen'];

		//echo "NIM Terdaftar!";
		//echo "<script type='text/javascript'>alert('NIM Terdaftar')</script>";
		header('Location: tampil_semua_properti.php'); 
	}

	/*
	else if ($nim=='root' && $password=='root') 
	{
		session_start();

		$_SESSION['nim'] = $nim;
		$_SESSION['status'] = "login";

		echo "<script type='text/javascript'>alert('Selamat Datang Kembali Admin!')
		window.location='tampil_data.php';</script>";
		//header('Location: tampil_data.php'); 
	}
	*/

	else
	{
		//echo "Email atau Password Salah!";
		echo "<script type='text/javascript'>alert('Incorrect Email or Password!')
		history.go(-1);
		</script>";

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" name="email_agen" value="<?php echo $data['email_agen']?>">
</body>
</html>