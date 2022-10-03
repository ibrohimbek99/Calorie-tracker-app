<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet"> 
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="none" 
    	      action="php/signup2.php" 
    	      method="post">

    		<h4 class="display">Entries</h4><br>

		  <div class="mb-3">
		    <label class="form-label">Food name</label>
		    <input type="text" 
		           class="form-control"
		           name="name"
		           value="<?php echo(isset($_GET['name']))?$_GET['name']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Calories</label>
		    <input type="text" 
		           class="form-control"
		           name="calories"
		           value="<?php echo (isset($_GET['calories']))?$_GET['calories']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Amount</label>
		    <input type="text" 
		           class="form-control"
		           name="amount"
		           value="<?php echo (isset($_GET['amount']))?$_GET['amount']:"" ?>">

		  </div>
		  
		  <button type="submit" class="link-secondary">Insert</button>
		  <a href="home.php" class="link-secondary">return</a>

		</form>
    </div>
</body>
</html>