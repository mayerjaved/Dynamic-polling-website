<?php
try
{
        $conn = new PDO("mysql:host=localhost;dbname=username", "username", "password");
        $q = "select * from Poll1";
        //we add PDO::FETCH_ASSOC to prevent extra indexing results
        $result = $conn->query($q, PDO::FETCH_ASSOC);
        //print_r($result);
        //this will print all the contents in the form of an array
        //print_r($result->fetchAll());
        //json_encode allows to print the results of the array in a better format, this is a JSON encoded object
        echo json_encode(($result->fetchAll()));
        //to further clean it up and prevent the results from sending the extra indexing we can fix it at the query level and 
        //change $result = $conn->query($q, PDO::FETCH_ASSOC)
}  
catch (PDOException $e) 
{
        die("Error: " . $e->getMessage());
} 
?>


