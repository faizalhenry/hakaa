<?php 
include '../config.php';

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login

$username = "";
$pass = "";
if ($_POST['username'] != "" && $_POST['password'] != "") { //menerima REQUEST POST dari form login
	$username = $_POST['username'];
	$password = $_POST['password']; 
} else {
	if($_SESSION['status'] !="login"){
		header("location:../index.php");
	}
	else {
		header("location:../dashboard/index.php"); // redirect admin lte
	}
}

$sql = "SELECT username, password FROM admin WHERE username like '" . $username . "' AND password like '" . $password . "';"; //query cek data ke DB
$result = $conn->query($sql); //aksi mengirim data ke DB

if ($result->num_rows > 0) { //cek apakah ada data atau tidak
	while($row = $result->fetch_assoc()) {
    	// jika ada, maka kita set session sesuai username yg login, kemudian masuk ke dashboard
		$_SESSION['status'] = 'login';
		$_SESSION['username'] = $username;
		header("location:../dashboard/index2.html"); // redirect admin lte 	
	}
} else {
	echo "Username atau password salah!";
}
$conn->close();

?>
