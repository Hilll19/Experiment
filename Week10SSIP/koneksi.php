<?php
    $conn = new mysqli("localhost", "root", "", "film");
    if ($conn->connect_error) {
        echo "connection failed : ".$conn->connect_error;
    }else{
        echo "Success connection";
    }
    $conn->close();
?>