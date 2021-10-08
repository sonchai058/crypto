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
            <button type="button" data-toggle="modal" data-target="#myModalAdd" class="btn btn-success btn-md"><?php echo label('add');?></button>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th><?php echo label('coin');?></th>
				        <th><?php echo label('amount');?></th>
                <th><?php echo label('buy_unit');?></th>
                <th><?php echo label('buy');?></th>
                <th><?php echo label('sell_unit');?></th>
                <th><?php echo label('sell');?></th>
                <th>+/-</th>
                <th><?php echo label('update');?></th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
<?php
    $rs = query("select a.*,b.name,b.lastname from port as a left join member as b on a.member_id=b.id where a.sts=1 and a.member_id=".$_SESSION['login']['id']);
    if ($rs->num_rows > 0) {
        // output data of each row
        while($row = $rs->fetch_assoc()) {

          //update port
          $rs1111 = query("select * from dataImport where label='".$row['coin']."' order by datetime DESC limit 1");
          //query("select a.*,b.data,b.datetime from port as a inner join dataImport as b on a.coin=b.label where a.sts=1");
          if($rs1111->num_rows>0) {
            while($row1111 = $rs1111->fetch_assoc()) {
              $pricesell = $row1111['price'];
              $q_update = query("update port set sell='".$pricesell."',mod_user='system',mod_date='".date('Y-m-d H:i:s')."' where coin={$row['coin']}");
            }
          }

//end update port
$color= '';
$symbol = "";
if($pricesell>$row['buy']) {
  $color = "color:green";
  $symbol ="+";
}else if(($pricesell-$row['buy'])<0){
 // die($pricesell-$row['buy']);
  $color = "color:red";
}

?>

            <tr>
                <td><?php echo $row['coin'];?></td>
                <td><?php echo ($row['amount']);?></td>
                <td><?php echo ($row['buy']);?></td>
                <td><?php echo ($row['buy']*$row['amount']);?></td>
                <td><?php echo ($pricesell);?></td>
                <td><?php echo ($pricesell*$row['amount']);?></td>
                <td style="<?php echo $color;?>"><?php echo $symbol.(($pricesell*$row['amount'])-($row['buy']*$row['amount']));?></td>
                <td><?php echo date2thai($row['mod_date']);?></td>
                <td width="10%">
                      <a href="<?php echo $base_url.'chart.php?language='.$_GET['language'].'&id='.$row['id'];?>" target="_blank" type="button" class="btn btn-primary"><i class="fa fa-line-chart"></i></a>
                      <button data-toggle="modal" data-target="#myModalEdit<?php echo $row['id'];?>" type="button" class="btn btn-info"><i class="fa fa-edit"></i></button>
                      <button onclick="if(confirm('Confirm Delete!')){dlt(<?php echo $row['id'];?>,<?php echo $row['member_id'];?>)}" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
                                        <h2 style="text-align:center" class="font-weight-bold font-title text-h5 text-center"><?php echo label('edit_title');?></h2>
                                    </div>
                                </div>
                                <form id="formEdit<?php echo $row['id'];?>" method="post">

									<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    <input type="hidden" name="sts" value="<?php echo $row['sts'];?>">
									<input type="hidden" name="member_id" value="<?php echo $row['member_id'];?>">
                                   
                                    
                                    <div class="row">
                                        <div class="col-12">
                                            <label><?php echo label('coin_symbol');?><font color="red">*</font></label>
                                            <input type="text" readonly class="form-control" name="coin" placeholder=<?php echo label('coin_symbol');?>" value="<?php echo $row['coin'];?>">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label><?php echo label('price_buy');?></label>
                                            <input type="number" min=1 class="form-control" name="total" onkeyup="" placeholder="<?php echo label('price_buy');?>" value="<?php echo $row['total'];?>">
                                        </div>
                                    </div> 

                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label><?php echo label('price_unit');?></label>
                                            <input type="number" min=1 class="form-control" readonly name="buy" placeholder="<?php echo label('price_unit');?>" value="<?php echo $row['buy'];?>">
                                        </div>
                                    </div> 
                                    <br/>

                                    <div class="row">
                                        <div class="col-12">
                                            <label><?php echo label('amount');?></label>
                                            <input type="number" min=1 class="form-control" name="amount" placeholder="<?php echo label('amount');?>" value="<?php echo $row['amount'];?>">
                                        </div>
                                    </div> 
                                    <input type="hidden" min=1 class="form-control" id="sell<?php echo $row['id'];?>" name="sell" placeholder="<?php echo label('price_sell');?>" value="<?php echo $pricesell;?>">
                                    <!--
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label><?php echo label('price_sell');?></label>
                                            <input type="number" min=1 class="form-control" id="sell<?php echo $row['id'];?>" name="sell" placeholder="<?php echo label('price_sell');?>" value="<?php echo $pricesell;?>">
                                        </div>
                                    </div>
-->
                                    
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Add : </label>
                                            <?php echo $row['add_user'];?> <?php echo date2Thai($row['add_date']);?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Update : </label>
                                            <?php echo $row['mod_user'];?> <?php echo date2Thai($row['mod_date']);?>
                                        </div>
                                    </div>

                                    <br/>
                                    <div class="row">
                                        <div class="col-12 text-center" style="text-align:center">
                                            <a href="#" onclick="editSave(<?php echo $row['id'];?>);" id="bt_editSubmit<?php echo $row['id'];?>" class="btn btn-primary"><i class="fa fa-save"></i> <?php echo label('save');?></a>
                                            <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> <?php echo label('cancel');?></a>
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
            <td colspan=9><?php echo label('no_record');?>...</td>
        </tr>
<?php
    }
?>

        </tbody>
        <tfoot>
            <tr>
                <th><?php echo label('coin');?></th>
				        <th><?php echo label('amount');?></th>
                <th><?php echo label('buy_unit');?></th>
                <th><?php echo label('buy');?></th>
                <th><?php echo label('sell_unit');?></th>
                <th><?php echo label('sell');?></th>
                <th>+/-</th>
                <th><?php echo label('update');?></th>
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
                                        <h2 style="text-align:center" class="font-weight-bold font-title text-h5 text-center"><?php echo label('add_title');?></h2>
                                    </div>
                                </div>
                                <form id="formAdd" method="post">
                                    <input type="hidden" name="sts" value="1">
                                    
                                    <input type="hidden" name="sts" value="<?php echo $row['sts'];?>">
                                    <input type="hidden" name="flag" value="0">
									                  <input type="hidden" name="member_id" value="<?php echo $SESSION['login']['id'];?>">
                                                                    
                                    <div class="row">
                                        <div class="col-12">
                                            <label><?php echo label('coin_symbol');?><font color="red">*</font></label>
                                            <input onkeyup="callCoin($(this).val());"  autofocus type="text" class="form-control" name="coin" placeholder="<?php echo label('coin_symbol');?>" value="">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label><?php echo label('price_buy');?></label>
                                            <input type="number" min=1 class="form-control" onkeyup="console.log($('#formAdd input[name=buy]').val());$('#formAdd input[name=amount]').val($(this).val()/$('#formAdd input[name=buy]').val())" name="total" placeholder="<?php echo label('price_buy');?>" value="1">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label><?php echo label('price_unit');?></label>
                                            <input type="number" min=1 class="form-control" readonly name="buy" placeholder="<?php echo label('price_unit');?>" value="1">
                                        </div>
                                    </div> 
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label><?php echo label('amount');?></label>
                                            <input type="number" min=1 class="form-control" name="amount" placeholder="<?php echo label('amount');?>" value="1">
                                        </div>
                                    </div> 
                                    <input type="hidden" min=1 class="form-control" id="sell" name="sell" placeholder="<?php echo label('price_sell');?>" value="1">
    <!--
                                    <br/>
                                    <div class="row">
                                        <div class="col-12">
                                            <label><?php echo label('price_sell');?></label>
                                            <input type="number" min=1 class="form-control" id="sell" name="sell" placeholder="<?php echo label('price_sell');?>" value="0">
                                        </div>
                                    </div>
  -->

                                    <br/>
                                    <div class="row">
                                        <div class="col-12 text-center" style="text-align:center">
                                            <a href="#" id="bt_addSubmit" class="btn btn-primary"><i class="fa fa-save"></i> <?php echo label('save');?></a>
                                            <a href="#" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> <?php echo label('cancel');?></a>
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

  if($("#formAdd input[name='flag']").val()==0) {$("#formAdd input[name='coin']").select(); alert('Label Coin Not Found..'); return false;}

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

$("li.index").addClass('active');


function callCoin(label) {
  $.ajax({
      type: "POST",
      url: '<?php echo $base_url.'ajax_port.php?state=get';?>',
      data: 'label='+label, // serializes the form's elements.
      success: function(data)
      {
        console.log(data);
        if(data.status=='success') {
          //
          $("#formAdd input[name='flag']").val("1");
          $("#formAdd input[name='buy']").val(data.rs.price);
          $("#formAdd input[name='sell']").val(data.rs.price);
          $("#formAdd input[name='amount']").val($("#formAdd input[name='total']").val()/data.rs.price);
        }else {
            //alert(data.message);
            $("#formAdd input[name='flag']").val("0");
            $("#formAdd input[name='buy']").val("1");
            $("#formAdd input[name='sell']").val("1");
            $("#formAdd input[name='amount']").val("1");
        }
      },error  : function(e) {
        console.log(e);
        $("#formAdd input[name='flag']").val("0");
        $("#formAdd input[name='buy']").val("1");
        $("#formAdd input[name='sell']").val("1");
        $("#formAdd input[name='amount']").val("1");
      }
    });
}

$('#myModalAdd').on('shown.bs.modal', function () {
  $('#formAdd input[name=coin]').trigger('focus');
})

</script>