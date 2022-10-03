<?php 
//Z0qlYZS4MpHh
$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "auth_db";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}

//<?php   

// $mem  = new Memcached();
//       // List memcache servers
// $mem->addServer('host.docker.internal',11211);

// if($mem->getVersion() === FALSE){
//         echo "<h2>Memcache server connection error</h2>";
// }else{
//     echo "<h2>connected to memcache</h2>";
// }

// function doQuery($mem, $pdo, $sql){
//     $key = base64_encode($sql);
//     $ret = $mem->get($key);
//     if($ret !== FALSE){
//         echo "<h2>Got $key from cache!</h2>";
//         return $ret;
//     }else{ // not in memcache!!!!!
//         echo "<h2>No pizza in cache, making $key</h2>";
//         if($pdo === FALSE){
//             //Z0qlYZS4MpHh
//             $sName = "localhost";
//             $uName = "root";
//             $pass = "";
//             $db_name = "auth_db";

//         try {
//             $conn = new PDO("mysql:host=$sName;dbname=$db_name"$uName, $pass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(PDOException $e){
//   echo "Connection failed : ". $e->getMessage();
// }

//         }
//         $statement = $pdo->query($sql);
//         $ret = $statement->fetchAll();
//         $mem->set($key, $ret, 5);
//         echo $mem->getResultMessage();
//         return $ret;
//     }
    
// }

// ?>