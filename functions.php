<?php
    require_once("connect.php");
    function cleanup($raw_data) {
        global $conn;
        $data = mysqli_real_escape_string($conn, $raw_data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>