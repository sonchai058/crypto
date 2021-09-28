<?php
header('Content-Type: application/json');

include('_inc.php');
connectDB();

$state = isset($_GET['state'])?$_GET['state']:'';

if($state=='add') {

		$name = htmlspecialchars($_POST['name']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $telno = htmlspecialchars($_POST['telno']);
        $email = htmlspecialchars($_POST['email']);
        $address = htmlspecialchars($_POST['address']);

		$as = query("select * from members where (username='{$username}' OR  email='{$email}') and sts=1 limit 1");

        if ($name=='' || $username=='' || $password=='' || $telno=='' || $email=='') {
             $response = array(
                 'status' => 'error',
                 'message'=> 'incomplete information Please enter correct information.!',
                 'id'=>''
            );
        } else if($as->num_rows>0) {
			$response = array(
				'status' => 'error',
				'message'=> 'Duplicate information!',
				'id'=>''
		   );
		}else {

            //$data_closed = (substr($data_closed,6,4)-543).'-'.substr($data_closed,3,2).'-'.substr($data_closed,0,2);
			$data_query = array(
				'name'							   =>$name,
				'lastname'                              => $lastname,
				'username'                               => $username,
				'password'                               => $password,
				'telno'                               => $telno,
                'email'                               => $email,
                'address'                               => $address,
				'sts'								=>'1',
				'add_user'							=>@$_SESSION['login']['username'],
                'add_date'							=>date("Y-m-d H:i:s"),
				'mod_user'							=>@$_SESSION['login']['username'],
				'mod_date'							=>date("Y-m-d H:i:s"),
                'member_type_id'                    =>1
			);

            $rs = query("INSERT INTO member (name, lastname, username, password, telno, email, address, sts, add_user, add_date, mod_user, mod_date) VALUES ('{$data_query['name']}','{$data_query['lastname']}','{$data_query['username']}','{$data_query['password']}','{$data_query['telno']}','{$data_query['email']}','{$data_query['address']}','{$data_query['sts']}','{$data_query['add_user']}','{$data_query['add_date']}','{$data_query['mod_user']}','{$data_query['mod_date']}')");
            //$rs = ("select * from members where id='{$id}' limit 1");
            //tb_member_wallet

            $response = array(
                'status' => 'success',
                'message'=> 'Saved!',
                'rs'=>$rs
            );
        }
        echo json_encode($response);
}else if($state=='edit') {
    $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $telno = htmlspecialchars($_POST['telno']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);

    if ($name=='' || $username=='' || $password=='' || $telno=='' || $email=='') {
         $response = array(
             'status' => 'error',
             'message'=> 'incomplete information Please enter correct information.!',
             'id'=>''
        );
    }else {

        //$data_closed = (substr($data_closed,6,4)-543).'-'.substr($data_closed,3,2).'-'.substr($data_closed,0,2);
        $data_query = array(
            'name'							   =>$name,
            'lastname'                              => $lastname,
            'password'                               => $password,
            'telno'                               => $telno,
            'address'                               => $address,
            'mod_user'							=>$_SESSION['login']['username'],
            'mod_date'							=>date("Y-m-d H:i:s")
        );

        $rs = query("update member set name='{$data_query['name']}', lastname='{$data_query['lastname']}', password='{$data_query['password']}', telno='{$data_query['telno']}', address='{$data_query['address']}', mod_user='{$data_query['mod_user']}' , mod_date='{$data_query['mod_date']}' where id='{$id}'");
        //$rs = ("select * from members where id='{$id}' limit 1");
        //tb_member_wallet

        $response = array(
            'status' => 'success',
            'message'=> 'Updated!',
            'rs'=>$rs
        );
    }
    echo json_encode($response);

}else if($state=='del') {
    $id = htmlspecialchars($_POST['id']);

    if ($id=='') {
         $response = array(
             'status' => 'error',
             'message'=> 'incomplete information Please enter correct information.!',
             'id'=>''
        );
    } else {


        $rs = query("update member set sts='0', mod_user='{$_SESSION['login']['username']}' , mod_date='".date("Y-m-d H:i:s")."' where id='{$id}'");
        //$rs = ("select * from members where id='{$id}' limit 1");
        //tb_member_wallet

        $response = array(
            'status' => 'success',
            'message'=> 'Deleted!',
            'rs'=>$rs
        );
    }
    echo json_encode($response);
}
?>