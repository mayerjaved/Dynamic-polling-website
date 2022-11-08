<?php
try
{
        //from the javascript function we receive the number which determmines which poll gets the vote, and post number is the latest poll that we are updating
        $number = ($_GET['number']);
        $post = ($_GET['post']);
       
        $conn = new PDO("mysql:host=localhost;dbname=mjn622", "mjn622", "Mr2abi.");
        

        //if the vote belongs to question 1 allocate it likewise
        if ($number == "1") {
            $sql="update Poll1 set Choice_1_stat = Choice_1_stat + 1 where post_id= '".$post."';";
            $result = $conn->query($sql, PDO::FETCH_ASSOC);
        }
        if ($number == "2") {
            $sql="update Poll1 set Choice_2_stat = Choice_2_stat + 1 where post_id= '".$post."';";
            $result = $conn->query($sql, PDO::FETCH_ASSOC);
        }
        if ($number == "3") {
            $sql="update Poll1 set Choice_3_stat = Choice_3_stat + 1 where post_id= '".$post."';";
            $result = $conn->query($sql, PDO::FETCH_ASSOC);
        }
        if ($number == "4") {
            $sql="update Poll1 set Choice_4_stat = Choice_4_stat + 1 where post_id= '".$post."';";
            $result = $conn->query($sql, PDO::FETCH_ASSOC);
        }
        if ($number == "5") {
            $sql="update Poll1 set Choice_5_stat = Choice_5_stat + 1 where post_id= '".$post."';";
            $result = $conn->query($sql, PDO::FETCH_ASSOC);
        }

}


catch (PDOException $e) 
{
        die("Error: " . $e->getMessage());
} 
?>


