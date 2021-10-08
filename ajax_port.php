<?php
header('Content-Type: application/json');

include('_inc.php');
connectDB();

$state = isset($_GET['state'])?$_GET['state']:'';


if($state=='add') {
		$coin = htmlspecialchars($_POST['coin']);
        $buy = htmlspecialchars($_POST['buy']);
        $amount = htmlspecialchars($_POST['amount']);
        $sell = htmlspecialchars($_POST['sell']);
        $member_id = htmlspecialchars($_POST['member_id']);

		$as = query("select * from port where coin='{$coin}' and sts=1 and member_id=".$_SESSION['login']['id']." limit 1");
        if ($coin=='' || $buy=='' || $amount=='' || $sell=='') {
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
				'coin'							   =>$coin,
				'buy'                              => $buy,
				'amount'                               => $amount,
				'sell'                               => $sell,
				'total'                               => ($buy*$amount),
				'sts'								=>'1',
                'member_id'                         =>@$_SESSION['login']['id'],
				'add_user'							=>@$_SESSION['login']['username'],
                'add_date'							=>date("Y-m-d H:i:s"),
				'mod_user'							=>@$_SESSION['login']['username'],
				'mod_date'							=>date("Y-m-d H:i:s"),
			);

            $rs = query("INSERT INTO port (member_id,coin, buy, amount, sell, total, sts, add_user, add_date, mod_user, mod_date) VALUES ('{$data_query['member_id']}','{$data_query['coin']}',{$data_query['buy']},{$data_query['amount']},{$data_query['sell']},{$data_query['total']},'{$data_query['sts']}','{$data_query['add_user']}','{$data_query['add_date']}','{$data_query['mod_user']}','{$data_query['mod_date']}')");
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
    $coin = htmlspecialchars($_POST['coin']);
    $buy = htmlspecialchars($_POST['buy']);
    $amount = htmlspecialchars($_POST['amount']);
    $sell = htmlspecialchars($_POST['sell']);

    $member_id = htmlspecialchars($_POST['member_id']);
    $id = htmlspecialchars($_POST['id']);

    if ($coin=='' || $buy=='' || $amount=='' || $sell=='') {
         $response = array(
             'status' => 'error',
             'message'=> 'incomplete information Please enter correct information.!',
             'id'=>''
        );
    }else {

        //$data_closed = (substr($data_closed,6,4)-543).'-'.substr($data_closed,3,2).'-'.substr($data_closed,0,2);
        $data_query = array(
            'buy'                              => $buy,
            'amount'                               => $amount,
            'sell'                               => $sell,
            'total'                               => ($buy*$amount),
            'mod_user'							=>$_SESSION['login']['username'],
            'mod_date'							=>date("Y-m-d H:i:s")
        );

        $rs = query("update port set buy={$data_query['buy']}, amount={$data_query['amount']}, sell={$data_query['sell']}, total='{$data_query['total']}', mod_user='{$data_query['mod_user']}' , mod_date='{$data_query['mod_date']}' where id='{$id}' and member_id={$member_id}");
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
    $member_id = htmlspecialchars($_POST['member_id']);
    $id = htmlspecialchars($_POST['id']);

    if ($id=='') {
         $response = array(
             'status' => 'error',
             'message'=> 'incomplete information Please enter correct information.!',
             'id'=>''
        );
    } else {


        $rs = query("update port set sts='0', mod_user='{$_SESSION['login']['username']}' , mod_date='".date("Y-m-d H:i:s")."' where id='{$id}' and member_id={$member_id}");
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