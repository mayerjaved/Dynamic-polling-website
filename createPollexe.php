<?php
$question = $_POST['question'];

try{
    $conn = new PDO("mysql:host=localhost;dbname=mjn622", "mjn622", "Mr2abi.");

}  catch (PDOException $e) {
    die("Error: " . $e->getMessage());
} 

$q = "Insert into Polls Values (0, '$user_id', '$question', '08/09/2022', '08/09/2022', 'NULL', 'NULL')";
$result = $conn->exec($q);
echo($result);
?>