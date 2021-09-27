<?php
header('Content-Type: application/json');

include('_inc.php');

if(isset($_GET['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $username = htmlspecialchars($_POST['password']);
    $rs = query("select * from member where useranem='{$username}' and password='{$password}' and sts=1");
    $rs_arr = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $rs_arr[] = $row;
        }
      }
}

if(count($rs_arr)>0) {
    echo json_encode(array(
        'status' => 'success',
        'message'=> 'ดึงข้อมูลสำเร็จ',
        'data'=> $rs_arr
    ));
}else {
    echo json_encode(array(
        'status' => 'false',
        'message'=> 'ดึงข้อมูลล้มเหลว!',
        'data'=> $rs_arr
    )); 
}
?>