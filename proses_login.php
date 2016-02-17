<div class="cont_header"><span>Form Login</span></div>

<?php
require_once "konfigurasi.php";
require_once "functions.php";
@ $proses = $_GET['proses'];
@ session_start();
if(cek_session('username')){
	echo '<p>Selamat datang '.$_SESSION['username'].'.<br>Anda login sebagai '.$_SESSION['userlevel'].'</p>';
	echo '<p><a href="logout.php">logout</a></p>';
}
else {
	if($proses == "proses_login"){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!login('tuser', $username, $password))
		  echo '<p style="color: #F00;text-indent: 0;padding: 5px;margin-top: 0;">username dan password salah!</p>';
		else {
			$query = "SELECT * FROM tuser WHERE username='$username' AND password='$password'";
			$result = $conn->query($query);
			$row = $result->fetch_assoc();
			$_SESSION['iduser'] = $row["IdUser"];
			$_SESSION['username'] = $row["username"];
			if($row["level"] == 1)
				$_SESSION['userlevel'] = "administrator";
			elseif($row["level"] == 2)
				$_SESSION['userlevel'] = "anggota";
			header("location:master.php");
		}
	}
	else {
		echo '<form id="text_login" action="?proses=proses_login" method="POST">'
			  .'<input class="register_masuk" type="text" placeholder="username" name="username">'
			  .'<input class="register_masuk" type="password" placeholder="password" name="password">'
			  .'<input class="button" type="submit" value="Login">'
			.'</form>';
	}

}
?>
