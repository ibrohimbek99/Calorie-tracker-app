<?php 

if(isset($_POST['name']) && 
   isset($_POST['calories']) && 
   isset($_POST['amount'])){

    include "../db_conn.php";

    $name = $_POST['name'];
    $calories = $_POST['calories'];
    $amount = $_POST['amount'];
    //$id = $_SESSION['id'];//$_POST['id'];//"SELECT id FROM users;";

    $data = "name=".$name."&calories=".$calories."&amount=".$amount;
    // echo "stop 1";
    if (empty($name)) {
    	// $em = "Food is required";
    	header("Location: ../entries.php?error=$em&$data");
	    exit;
    }else if(empty($calories)){
    	// $em = "Calories is required";
    	header("Location: ../entries.php?error=$em&$data");
	    exit;
    }else if(empty($amount)){
    	//$em = "Amount is required";
    	header("Location: ../entries.php?error=$em&$data");
	    exit;
    }else {

      // hashing the password
      // $pass = password_hash($pass, PASSWORD_DEFAULT);

// (name, calories, amount) 
    	 $sql = "INSERT INTO food(name, calories, amount) VALUES(?, ?, ?)";
    	 $stmt = $conn->prepare($sql);
    	 $stmt->execute([$name, $calories, $amount]);

    	header("Location: ../entries.php?success=Your account has been created successfully");
	    exit;
    }


}else {
	header("Location: ../entries.php?error=error");
	exit;
}