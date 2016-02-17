<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Member Login</title>
<link rel="shortcut icon" href="image/favicon.png">
<style>
* {
	margin:0;
	padding:0;
}
body {
	background:#000;
}
h1 {
	text-align:center;
    padding: 15px;
}
#content {
	width:300px;
	height:260px;
	background-color:#EBEBEB;
	margin:200px auto;
	border-radius:10px;
}
.register_masuk {
    width: 220px;
    height: 35px;
    -webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px;
    -moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px;
    border-radius: 4px;
    background-color: #fff;
    -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
    -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
    box-shadow: 1px 2px 5px rgba(0,0,0,.09);
    border: solid 1px #cbc9c9;
    margin-left: 30px;
    margin-top: 10px;
    padding-left: 10px;
}
.button {
    font-size: 14px;
    font-weight: 600;
    color: white;
    width: 220px;
    height: 40px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #03F;
    -webkit-box-shadow: 0 3px rgba(58,87,175,.75);
    -moz-box-shadow: 0 3px rgba(58,87,175,.75);
    box-shadow: 0 0px rgba(58,87,175,.75);
    transition: all 0.1s linear 0s;
    position: relative;
    margin: 20px 35px;
}
.button:hover {
	background-color: #00F;
}
#footer {
	width:100%;
	height:auto;
	position:absolute;
	bottom:20px;
}
a {
	font-size:16px;
	color:#FFF;
	text-decoration:none;
}
a:hover {
	text-decoration:underline;
}
#home {
    top: 10px;
    left: 10px;
    position: absolute;
}
#index {
    margin: 0px 48%;
    position: relative;
    top: 10px;
}
#copyright {
	color:#FFF;
	font-size:16px;
	position: relative;
    top: -10px;
	right:20px;
	float:right;
}

</style>
</head>

<body>
<div id="content">
	<h1>Member Login</h1>
    <hr>
		<form id="text_login" action="proses_login.php?proses=proses_login" method="POST">
			  <input class="register_masuk" type="text" placeholder="username" name="username">
			  <input class="register_masuk" type="password" placeholder="password" name="password">
			  <input class="button" type="submit" value="Login">
		</form>
</div>
<div id="footer">
  <a id="home" href="master.php">Halaman Utama</a>
  <a id="index" href="index.php">Home</a>
  <div id="copyright">Copyright &copy; 2015 by: InCepers</div>
</div>
</body>
</html>
