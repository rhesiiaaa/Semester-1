<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="ceklogin.php" method="post">
     	<h2>SILAHKAN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="username" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>
