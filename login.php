<?php
	include("pengguna.php");
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$pass = $_POST['password'];
		$login = new login($id,$pass);
		$login->User();
	}	
?>

<html>
    <head>
        <title> Login </title>
        <link rel="stylesheet" type="text/css" href="css/Login.css">
    </head>
    <body>
        <div class="">
            <div class="kanan"></div>
            <form method="POST" action="">
                <h1>SISTEM PERPUSTAKAAN</h1>
                <input type="text" name="id" id="id" placeholder="id"/>
                <input type="password" name="password" id="password" placeholder="Password"/>
                <input class="btn" type="submit" name="submit" value="LOG IN"/>
               
            </form>
        </div>
    </body>
</html>

