<?php
session_start();

include('_label.php');

$conn = null;

//$base_url = "http://coindcatoday.com/";
$base_url = "http://localhost/crypto/";
connectDB();

if(!isset($_GET['language'])) {
    $_GET['language'] = "ENG";
}else if($_GET['language']=='') {
    $_GET['language'] = "ENG";
}

function checkLogin() {
    global $conn;
        //checj login
    if(!isset($_SESSION['login'])) {
        Redirect($base_url.'login.php', false);
    }
    //
}
function connectDB() {
    global $conn;

    $servername = "119.59.116.231:3306";
    //$servername = "localhost;
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

function date2thai($datetime='') {
	$arr=explode(' ',$datetime);
	$date = $arr[0];
	$time = $arr[1];
	return substr($date,8,2).'/'.substr($date,5,2).'/'.(substr($date,0,4)).' '.substr($time,0,5);
}

function cutNum($num, $precision = 2) {
    return floor($num) . substr(str_replace(floor($num), '', $num), 0, $precision + 1);
}

?>