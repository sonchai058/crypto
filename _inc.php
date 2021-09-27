<?php
session_start();

$conn = null;

$base_url = "http://localhost/crypto/";
connectDB();

function checkLogin() {
        //checj login
    if(!isset($_SESSION['login'])) {
        Redirect($base_url.'login.php', false);
    }
    //
}
function connectDB() {
    global $conn;

    $servername = "119.59.116.231:3306";
    $username = "coindcatod";
    $password = "1q2w3e4r^^";
    $dbname = "coindcatod_ay";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    $conn -> set_charset("utf8");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}

function query($sql="") {
    global $conn;
    return $conn->query($sql);
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