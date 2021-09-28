<?php
header('Content-Type: application/json');

include('_inc.php');
connectDB();


if(isset($_GET['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    $rs = query("select * from member where username='{$username}' and password='{$password}' and sts=1");
    
    $rs_arr = array();
    if ($rs->num_rows > 0) {
        // output data of each row
        while($row = $rs->fetch_assoc()) {
          $rs_arr[] = $row;
        }
      }

    if(count($rs_arr)>0) {
        $_SESSION['login'] = $rs_arr[0];
        echo json_encode(array(
            'status' => 'success',
            'message'=> 'Login Success',
            'data'=> $rs_arr
        ));
    }else {
        echo json_encode(array(
            'status' => 'false',
            'message'=> 'Login Failed!',
            'data'=> $rs_arr,
            'ddd'=>"select * from member where username='{$username}' and password='{$password}' and sts=1",
            'rs'=>$rs
        )); 
    }
}

?>