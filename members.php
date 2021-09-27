<?php
require('header.php');

$page = "member.php";

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
<?php
    $rs = query("select * from member where member_type_id=1 and sts=1");
    if ($rs->num_rows > 0) {
        // output data of each row
        while($row = $rs->fetch_assoc()) {
?>
?>
            <tr>
                <td><?php echo $row['name'].' '.$row['lastname']?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
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
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 <?php
require('footer.php');
 ?>

 
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>