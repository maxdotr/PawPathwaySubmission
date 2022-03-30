<?php

function find_dogs() {
    global $conn;

    // Build and perform database query
    $query = "select * from lostdogs ORDER BY date DESC LIMIT 200";
    $results = mysqli_query($conn, $query);
    $doglist = [];
    if(mysqli_num_rows($results) > 0){
        while($row = mysqli_fetch_assoc($results)){
            array_push($doglist,$row);
        }
    }

    // Test if there was a query error
    if(!$results){
        die("Database query failed: " . mysqli_connect_error());
    }

    return $doglist;
}


?>