<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="none">
            <h3 class="display-4 ">Hello, <?=$_SESSION['fname']?></h3>
  			<a href="entries.php" class="link-secondary">Enter calories</a>
            <a href="personal.php" class="link-secondary"> Your Entries</a>
            <p><a href="logout.php" class="link-secondary"> Logout</a></p>
		</div>
    </div>


</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>