<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body style="margin: 30px;">
    <h1>Foods Inserted</h1>
    <br>
    <table class="table">
        <thead>
      <tr>
        <th>food_ID</th>
        <th>Name</th>
        <th>Calories</th>
        <th>Amount</th>
      </tr>
    </thead>
        <tbody>
<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "auth_db";

      // Create connection
      $connection = new mysqli($servername, $username, $password, $database);

            // Check connection
      if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
      }

            // read all row from database table
      $sql = "SELECT * FROM food";
      $result = $connection->query($sql);
  

      if (!$result){
        die("Invalid query: " . $connection->error);
      }

            // read data of each row
      while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["food_ID"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["calories"] . "</td>
                    <td>" . $row["amount"] . "</td>
                    <td>
                    </td>
                </tr>";
      }
?>
      </tbody>
    </table>
  <div> <br>
<?php

    $query = "SELECT sum(calories * amount) FROM food";
    $yourmom = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($yourmom);
    $total_calories = $row[0];

    echo "The total calories consumed is: $total_calories Calories";
    $connection->close();
            
?>
</div>
</body>
</html>