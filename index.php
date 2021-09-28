<?php
require('header.php');
$page = "index.php";
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
                <th>Coin</th>
				<th>Amount</th>
                <th>Buy</th>
                <th>Sell</th>
                <th>Update</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
<?php
    $rs = query("select a.*,b.name,b.lastname from port as a left join member as b on a.member_id=b.id where a.sts=1 and a.member_id=".$_SESSION['login']['id']);
    if ($rs->num_rows > 0) {
        // output data of each row
        while($row = $rs->fetch_assoc()) {
?>

            <tr>
                <td><?php echo $row['coin'];?></td>
                <td><?php echo number_format($row['amount']);?></td>
                <td><?php echo number_format($row['buy']);?></td>
                <td><?php echo number_format($row['sell']);?></td>
                <td><?php echo date2thai($row['mod_date']);?></td>
                <td width="10%">
                      <button data-toggle="modal" data-target="#myModalEdit<?php echo $row['id'];?>" type="button" class="btn btn-info"><i class="fa fa-edit"></i></button>
                      <button onclick="if(confirm('ยืนยัน ลบ!')){dlt(<?php echo $row['id'];?>,<?php echo $row['member_id'];?>)}" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

									<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    <input type="hidden" name="sts" value="<?php echo $row['sts'];?>">
									<input type="hidden" name="member_id" value="<?php echo $row['member_id'];?>">
                                   
                                    
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Coin <font color="red">*</font></label>
                                            <input type="text" readonly class="form-control" name="coin" placeholder="Coin" value="<?php echo $row['coin'];?>">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Buy</label>
                                            <input type="number" min=1 class="form-control" name="buy" placeholder="Buy" value="<?php echo $row['buy'];?>">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Amount</label>
                                            <input type="number" min=1 class="form-control" name="amount" placeholder="Amount" value="<?php echo $row['amount'];?>">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Sell</label>
                                            <input type="number" min=1 class="form-control" name="sell" placeholder="Sell" value="<?php echo $row['sell'];?>">
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
            <td colspan=7>No record...</td>
        </tr>
<?php
    }
?>

        </tbody>
        <tfoot>
            <tr>
				<th>Coin</th>
				<th>Amount</th>
                <th>Buy</th>
                <th>Sell</th>
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
                                    
                                    <input type="hidden" name="sts" value="<?php echo $row['sts'];?>">
									<input type="hidden" name="member_id" value="<?php echo $SESSION['login']['id'];?>">
                                                                    
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Coin <font color="red">*</font></label>
                                            <input type="text" class="form-control" name="coin" placeholder="Coin" value="">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Buy</label>
                                            <input type="number" min=1 class="form-control" name="buy" placeholder="Buy" value="0">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Amount</label>
                                            <input type="number" min=1 class="form-control" name="amount" placeholder="Amount" value="1">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Sell</label>
                                            <input type="number" min=1 class="form-control" name="sell" placeholder="Sell" value="0">
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
      "order": [[ 0, "desc" ]]
    });
} );

function editSave(id) {
  //alert("#form​Edit"+id+" input[name='rfid']"); 
  var chk = true;
  //protection
  if($("#myModalEdit"+id+" input[name='coin']").val()=='') {
    alert('Form !');
    $("#myModalEdit"+id+" input[name='coin']").focus();
    chk = false;
    return false;
  }
  if($("#myModalEdit"+id+" input[name='buy']").val()=='' && !isNumeric($("#myModalEdit"+id+" input[name='buy']").val())) {
    alert('Please fill out the correct information. !');
    $("#myModalEdit"+id+" input[name='buy']").focus();
    chk = false;
    return false;
  }
  if($("#myModalEdit"+id+" input[name='amount']").val()=='' && !isNumeric($("#myModalEdit"+id+" input[name='amount']").val())) {
    alert('Please fill out the correct information. !');
    $("#myModalEdit"+id+" input[name='amount']").focus();
    chk = false;
    return false;
  }  if($("#myModalEdit"+id+" input[name='sell']").val()=='' && !isNumeric($("#myModalEdit"+id+" input[name='sell']").val())) {
    alert('Please fill out the correct information. !');
    $("#myModalEdit"+id+" input[name='sell']").focus();
    chk = false;
    return false;
  }

  if(chk) {
      //protection
      $.ajax({
      type: "POST",
      url: '<?php echo $base_url.'ajax_port.php?state=edit';?>',
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
  if($("#formAdd input[name='coin']").val().length<1) {
    alert('Please fill out the correct information. !');
    $("#formAdd input[name='coin']").focus();
    chk = false;
    return false;
  }
  if($("#formAdd input[name='buy']").val()=='' && !isNumeric($("#formAdd input[name='buy']").val())) {
    alert('Please fill out the correct information. !');
    $("#formAdd input[name='buy']").focus();
    chk = false;
    return false;
  }
  if($("#formAdd input[name='amount']").val()=='' && !isNumeric($("#formAdd input[name='buy']").val())) {
    alert('Please fill out the correct information. !');
    $("#formAdd input[name='amount']").focus();
    chk = false;
    return false;
  }
  if($("#formAdd input[name='sell']").val()=='' && !isNumeric($("#formAdd input[name='buy']").val())) {
    alert('Please fill out the correct information. !');
    $("#formAdd input[name='sell']").focus();
    chk = false;
    return false;
  }


  if(chk) {
      $.ajax({
      type: "POST",
      url: '<?php echo $base_url.'ajax_port.php?state=add';?>',
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

function dlt(id,member_id) {
  $.ajax({
      type: "POST",
      url: '<?php echo $base_url.'ajax_port.php?state=del';?>',
      data: 'id='+id+'&member_id='+member_id, // serializes the form's elements.
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