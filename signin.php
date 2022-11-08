<?php
    $error = "";
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
   
    //$avatar = $_POST['avatar'];


try{
    $conn = new PDO("mysql:host=localhost;dbname=mjn622", "mjn622", "Mr2abi.");

}  catch (PDOException $e) {
    die("Error: " . $e->getMessage());
} 


$q = "select user_id,screen_name from Users where email = '$email' and password = '$pswd'";
$result = $conn->query($q);
print_r($result);

if ($result->rowCount() > 0) {
    session_start();
    $row = $result->fetch();
    $_SESSION["user_id"] = $row["user_id"];
    $_SESSION["screen_name"] = $row["screen_name"];
    $db = null;
    header("Location: createPoll.php");
    exit();

}


?>


