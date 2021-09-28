<?php
require('header.php');
$page = "member.php";

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-12 text-right">
            <button type="button" data-toggle="modal" data-target="#myModalAdd" class="btn btn-success btn-md">+ ADD</button>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Username</th>
                <th>Telno</th>
                <th>Email</th>
                <th>Address</th>
                <th>Update</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
<?php
    $rs = query("select * from member where member_type_id=1 and sts=1");
    if ($rs->num_rows > 0) {
        // output data of each row
        while($row = $rs->fetch_assoc()) {
?>

            <tr>
                <td><?php echo $row['name'].' '.$row['lastname']?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['telno'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo date2thai($row['mod_date']);?></td>
                <td width="10%">
                      <button data-toggle="modal" data-target="#myModalEdit<?php echo $row['id'];?>" type="button" class="btn btn-info"><i class="fa fa-edit"></i></button>
                      <button onclick="if(confirm('ยืนยัน ลบ!')){dlt(<?php echo $row['id'];?>)}" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
                                      <!-- Modal -->
                                      <div class="modal fade" id="myModalEdit<?php echo $row['id'];?>" role="dialog">
                        <div class="modal-dialog modal-xl">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-body modal-p" style="">
                                <div class="row">
                                    <div class="col-12 text-center" style="padding-left: 30px;padding-right: 30px;">
                                        <h2 style="text-align:center" class="font-weight-bold font-title text-h5 text-center">แก้ไขรายการ</h2>
                                    </div>
                                </div>
                                <form id="formEdit<?php echo $row['id'];?>" method="post">
                                
                                    <input type="hidden" name="sts" value="<?php echo $row['sts'];?>">
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Name <font color="red">*</font></label>
                                            <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $row['name'];?>">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Lastname</label>
                                            <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo $row['lastname'];?>">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Username <font color="red">*</font></label>
                                            <input type="text" readonly class="form-control" name="username" placeholder="Username" value="<?php echo $row['username'];?>">
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Password <font color="red">*</font></label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $row['password'];?>">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Telno <font color="red">*</font></label>
                                            <input type="text" class="form-control" name="telno" placeholder="Tel no" value="<?php echo $row['telno'];?>">
                                        </div>
                                    </div>
                                    <br/> 
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Email <font color="red">*</font></label>
                                            <input type="email" readonly class="form-control" name="email" placeholder="Email" value="<?php echo $row['email'];?>">
                                        </div>
                                    </div>
                                    <br/> 

                                    <div class="row">
                                        <div class="col-12">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" placeholder="Address"><?php echo $row['address'];?></textarea>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>เพิ่ม : </label>
                                            <?php echo $row['add_user'];?> <?php echo date2Thai($row['add_date']);?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>ล่าสุด : </label>
                                            <?php echo $row['mod_user'];?> <?php echo date2Thai($row['mod_date']);?>
                                        </div>
                                    </div>

                                    <br/>
                                    <div class="row">
                                        <div class="col-12 text-center" style="text-align:center">
                                            <a href="#" onclick="editSave(<?php echo $row['id'];?>);" id="bt_editSubmit<?php echo $row['id'];?>" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก</a>
                                            <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          
                         </div>
                        </div>
                    </div>
<?php
        }
    }else {
?>
        <tr>
            <td colspan=6>No record...</td>
        </tr>
<?php
    }
?>

        </tbody>
        <tfoot>
            <tr>
                <th>Fullname</th>
                <th>Username</th>
                <th>Telno</th>
                <th>Email</th>
                <th>Address</th>
                <th>Update</th>
                <th>#</th>
            </tr>
        </tfoot>
    </table>



                      <!-- Modal -->
                      <div class="modal fade" id="myModalAdd" role="dialog">
                        <div class="modal-dialog modal-xl">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-body modal-p" style="">
                                <div class="row">
                                    <div class="col-12 text-center" style="padding-left: 30px;padding-right: 30px;">
                                        <h2 style="text-align:center" class="font-weight-bold font-title text-h5 text-center">เพิ่มรายการใหม่</h2>
                                    </div>
                                </div>
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
                                            <a href="#" id="bt_addSubmit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก</a>
                                            <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          
                         </div>
                        </div>
                    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

 <?php
require('footer.php');
 ?>

 
<script>
    $(document).ready(function() {
        $('#example').DataTable({
      "order": [[ 5, "desc" ]]
    });
} );

function editSave(id) {
  //alert("#form​Edit"+id+" input[name='rfid']"); 
  var chk = true;
  //protection
  if($("#myModalEdit"+id+" input[name='name']").val()=='') {
    alert('Form !');
    $("#myModalEdit"+id+" input[name='name']").focus();
    chk = false;
    return false;
  }
  if($("#myModalEdit"+id+" input[name='username']").val()=='') {
    alert('Please fill out the correct information. !');
    $("#myModalEdit"+id+" input[name='username']").focus();
    chk = false;
    return false;
  }
  if($("#myModalEdit"+id+" input[name='password']").val()=='') {
    alert('Please fill out the correct information. !');
    $("#myModalEdit"+id+" input[name='password']").focus();
    chk = false;
    return false;
  }
  if($("#myModalEdit"+id+" input[name='telno']").val()=='') {
    alert('Please fill out the correct information. !');
    $("#myModalEdit"+id+" input[name='telno']").focus();
    chk = false;
    return false;
  }
  if($("#myModalEdit"+id+" input[name='email']").val()=='') {
    alert('Please fill out the correct information. !');
    $("#myModalEdit"+id+" input[name='email']").focus();
    chk = false;
    return false;
  }

  if(chk) {
      //protection
      $.ajax({
      type: "POST",
      url: '<?php echo $base_url.'ajax_members.php?state=edit';?>',
      data: $("#formEdit"+id).serialize(), // serializes the form's elements.
      success: function(data)
      {
        console.log(data);
        if(data.status=='success') {
          alert(data.message);
          location.reload();
        }else {
            alert(data.message);
          //$("#myModal0").modal("toggle");
        }
      }
    });
      //console.log($("#formAdd").serialize());
      //alert('saved!');
  }
}

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
          location.reload();
        }else {
          alert(data.message);
        }
      }
    });
  }

});

function isNumeric(str) {
if (typeof str != "string") return false // we only process strings!  
return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
       !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
}

function dlt(id) {
  $.ajax({
      type: "POST",
      url: '<?php echo $base_url.'ajax_members.php?state=del';?>',
      data: 'id='+id, // serializes the form's elements.
      success: function(data)
      {
        //alert(data.message);
        console.log(data);
        if(data.status=='success') {
          alert(data.message);
          location.reload();
        }else {
            alert(data.message);
          //$("#myModal0").modal("toggle");
        }
      }
    });
}


</script>