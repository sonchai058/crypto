<?php
include('_inc.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $base_url;?>images/favicon.ico">

    <title>Crypto Admin - Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="css/bootstrap-extend.css">
	

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />


	<!-- theme style -->
    <?php
        include('css/master_style.php');
    ?>
	
	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

     
  </head>

<body class="">
<div class="container-fluid">
<br/>
<h2 align="center">Register to member</h2>
        <div class="row">
            <div class="col-12">
        
                                <form id="formAdd" method="post">
                                    <input type="hidden" name="sts" value="1">
                                    
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Name <font color="red">*</font></label>
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Lastname</label>
                                            <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Username <font color="red">*</font></label>
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Password <font color="red">*</font></label>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Telno <font color="red">*</font></label>
                                            <input type="text" class="form-control" name="telno" placeholder="Tel no">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Email <font color="red">*</font></label>
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div> 
                                    <br/>

                                    <div class="row">
                                        <div class="col-12">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" placeholder="Address"></textarea>
                                        </div>
                                    </div>

                                    <br/>
                                    <div class="row">
                                        <div class="col-12 text-center" style="text-align:center">
                                            <a href="#" id="bt_addSubmit" class="btn btn-primary"><i class="fa fa-plus"></i> สมัครสมาชิก</a>
                                            <a href="#" class="btn btn-danger" onclick="history.back();"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</a>
                                        </div>
                                    </div>
                                </form>
            </div>
        </div>
</div>
<!-- ./wrapper -->
  	
	 
	  
	<!-- jQuery 3 -->
	<script src="<?php echo $base_url;?>assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- popper -->
	<script src="<?php echo $base_url;?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo $base_url;?>assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
	

  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>



	<!-- Slimscroll -->
	<script src="<?php echo $base_url;?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="<?php echo $base_url;?>assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- apexcharts -->
	<script src="<?php echo $base_url;?>assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>
	<script src="<?php echo $base_url;?>assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="js/pages/ohlc.js"></script>	
	
	<!-- webticker -->
	<script src="<?php echo $base_url;?>assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>
	
	<!-- EChartJS JavaScript -->
	<script src="<?php echo $base_url;?>assets/vendor_components/echarts-master/dist/echarts-en.min.js"></script>
	<script src="<?php echo $base_url;?>assets/vendor_components/echarts-liquidfill-master/dist/echarts-liquidfill.min.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Crypto_Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard.js"></script>
	
</body>
</html>


 
<script>

$("#bt_addSubmit").click(function(){
  var chk = true;
  //protection
  if($("#formAdd input[name='name']").val().length<1) {
    alert('Please fill out the correct information. !');
    $("#formAdd input[name='name']").focus();
    chk = false;
    return false;
  }
  if($("#formAdd input[name='username']").val()=='') {
    alert('Please fill out the correct information. !');
    $("#formAdd input[name='username']").focus();
    chk = false;
    return false;
  }
  if($("#formAdd input[name='password']").val()=='') {
    alert('Please fill out the correct information. !');
    $("#formAdd input[name='password']").focus();
    chk = false;
    return false;
  }
  if($("#formAdd input[name='telno']").val()=='') {
    alert('Please fill out the correct information. !');
    $("#formAdd input[name='telno']").focus();
    chk = false;
    return false;
  }
  if($("#formAdd input[name='email']").val()=='') {
    alert('Please fill out the correct information. !');
    $("#formAdd input[name='email']").focus();
    chk = false;
    return false;
  }

  if(chk) {
      $.ajax({
      type: "POST",
      url: '<?php echo $base_url.'ajax_members.php?state=add';?>',
      data: $("#formAdd").serialize(), // serializes the form's elements.
      success: function(data)
      {
          console.log(data);
        if(data.status=='success') {
          alert(data.message);
          window.location.replace('<?php echo $base_url.'index.php';?>');
        }else {
          alert(data.message);
        }
      }
    });
  }

});



</script>