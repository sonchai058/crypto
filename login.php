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

    <title>Crypto Admin - Log in </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo $base_url;?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo $base_url;?>css/bootstrap-extend.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo $base_url;?>css/master_style.php">

	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="<?php echo $base_url;?>css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box" style="width:450px; margin: 5% auto;padding: 50px;
    border: 1px #007bff63 solid;">
  <div class="login-logo">
    <a href="<?php echo $base_url;?>index.html"><b>Crypto</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form id="formLogin" action="" method="post" class="form-element">
      <div class="form-group has-feedback">
        <input autofocus name="username" type="text" class="form-control" placeholder="Username or Email">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select id="language" class="form-control"><option value="ENG">Language ENG</option><option value="TH">Language TH</option></select>
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
       <!--  
      <div class="col-6">
          <div class="checkbox">
            <input type="checkbox" id="basic_checkbox_1" >
			<label for="basic_checkbox_1">Remember Me</label>
          </div>
        </div>
    -->
        <!-- /.col -->
    <!--    
        <div class="col-6">
         <div class="fog-pwd">
          	<a href="javascript:void(0)"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
          </div>
        </div>
    -->
        <!-- /.col -->
        <div class="col-12 text-center">
          <button id="btnLogin" type="button" class="btn btn-info btn-block margin-top-10">SIGN IN</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    
    <!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
    </div>



    -->
    <div class="margin-top-30 text-center">
    	<p>Don't have an account? <a href="<?php echo $base_url.'register.php'?>" class="text-info m-l-5">Sign Up</a></p>
    </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="<?php echo $base_url;?>assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="<?php echo $base_url;?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo $base_url;?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
<script>
$(document).ready(function(){
  
});
$("#btnLogin").click(function(){
//alert($(this).data('id'));
//alert(',..1');
$.ajax({
  type: "POST",
  url: '<?php echo $base_url.'ajax_permission.php?login=check';?>',
  data: $("#formLogin").serialize(), // serializes the form's elements.
  success: function(data)
  {
    //alert(data.message);
    console.log(data);
    if(data.status=='success') {
      //location.reload();
      window.location.replace('<?php echo $base_url.'index.php?language=';?>'+$("#language").val());
    }else {
      alert(data.message);
    }
  }
  });
});
</script>
</script>
</html>
