<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$servername = "127.0.0.1";
$username = "88890";
$password = "NYGz3s9L27";


try {
  $conn = new PDO("mysql:host=$servername;dbname=db_88890", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

try {
  $name =  $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $comment =  $_REQUEST['comment'];
          
  // Performing insert query execution
  // here our table name is college
  $sql = "INSERT INTO `Portfolio` (`Email`, `Naam`, `Comment`) VALUES ('$name',
    '$email','$comment')";
  echo $sql;

  if($conn->prepare($sql)->execute()){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$name\n $email\n "
        . "$comment\n");
  } else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
  }
} catch(PDOException $e) {
  echo $e;
}

return require_once("index.php");
?>
