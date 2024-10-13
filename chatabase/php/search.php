<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn,$_POST['searchTerm']);// sending ajax to php and getting from php to ajax
    $output = "";
    $sql = mysqli_query($conn,"SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')");
    if(mysqli_num_rows($sql) > 0){
        include "data.php";
        // $output .= "user is found"; 
    }else{
        $output .= "No user found related to your search term";
    }
    echo $output; //why when i delete "echo output" the data dont comme in the search?
?>