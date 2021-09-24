<?php
session_start();

connectDB();
$base_url = "http://localhost/crypto/";

function checkLogin() {
        //checj login
    if(!isset($_SESSION['login'])) {
        Redirect($base_url.'login.php', false);
    }
    //
}
function connectDB() {
    $servername = "119.59.116.231:3306";
    $username = "coindcatod";
    $password = "1q2w3e4r^^";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
}

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}


?>