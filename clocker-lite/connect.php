<?php
function OpenCon() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "my_db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}

function CloseCon($conn) {
    $conn->close();
}
?>