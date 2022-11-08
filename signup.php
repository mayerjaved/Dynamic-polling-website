<?php
    $error = "";
    $email = $_POST['email'];
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $screen_name = $_POST['screen_name'];
    $birthday = $_POST['birthday'];
    //$avatar = $_POST['avatar'];


try{
    $conn = new PDO("mysql:host=localhost;dbname=mjn622", "mjn622", "Mr2abi.");

}  catch (PDOException $e) {
    die("Error: " . $e->getMessage());
} 


$q = "Insert into Users Values ('$user_id', '$email', '$screen_name', '$birthday', 'Avatar_link', '$password')";
$result = $conn->exec($q);
echo($result);

    if ($result == 0)
    {
        $error = ("The username already Exists");
        echo($error);
    }
    else{
        header("Location:signin.html");
        $error = ("SignUp Successful");
        echo($error);
    }
?>


