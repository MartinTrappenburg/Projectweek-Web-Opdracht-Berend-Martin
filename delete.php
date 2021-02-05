<?php
    require_once("./connect.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM projectweek WHERE `id` = $id";

    
    if ($conn->query($sql) === TRUE) {
        echo "record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: ./read.php");
?>