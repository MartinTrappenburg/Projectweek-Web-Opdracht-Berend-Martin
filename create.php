<?php
    require_once('./connect.php');
    require("./functions.php");
    $username = cleanup($_POST["username"]);
    $comment = cleanup($_POST["commenttext"]);

    $sql = "INSERT INTO 'commentsection' ('id', 'username', 'comment') VALUES (NULL, '$username', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: ./index.php");
    ?>