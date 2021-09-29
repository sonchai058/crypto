<?php
require('header.php');
$page = "index.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
        <?php
            $rs = query("select a.*,b.name,b.lastname from port as a left join member as b on a.member_id=b.id where a.id='".$_GET['id']."'");
            $row = @$rs->fetch_assoc();
                      //update port
          $rs1111 = query("select * from dataImport where label='".$row['coin']."' order by datetime,id DESC");
          //query("select a.*,b.data,b.datetime from port as a inner join dataImport as b on a.coin=b.label where a.sts=1");
          $xAxis_series = array();
          $us_series = array();
          $series = array();
          if($rs1111->num_rows>0) {
            while($row1111 = $rs1111->fetch_assoc()) {
                $xAxis_series[] = "'".date2thai($row1111['datetime'])."'";
                $us_series[] = $row['buy'];

                $data = json_decode($row1111['data']);
                $series[] = $data->quote->THB->price;
            }
          }
          $xAxis_series_data = implode(',',$xAxis_series);
          $us_series_data = implode(',',$us_series);
          $series_data = implode(',',$series);
        ?>
            <div class="col-12 text-left">
                <h2><?php echo $row['coin'];?></h2>
            </div>
        </div>
        <div id="e_chart_2" class="" style="height:785px;"></div>	
    
		</div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  

 <?php
require('footer.php');
 ?>

 
<script>
//---echart2
var dom = document.getElementById("e_chart_2");
var myChart = echarts.init(dom);
var app = {};
option = null;
option = {
	color: ['#00c292','#555555'],
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:['the highest temperature','the lowest temperature']
    },
	
    xAxis:  {
        type: 'category',
        boundaryGap: false,
        data: [<?php echo $xAxis_series_data;?>]
    },
    yAxis: {
        type: 'value',
        axisLabel: {
            formatter: '{value}'
        }
    },
    series: [
        {
            name:'<?php echo label('price_sell');?>',
            type:'line',
            data:[<?php echo $series_data;?>],
            markPoint: {
                data: [
                    {type: 'max', name: 'Maximum'},
                    {type: 'min', name: 'Minimum'}
                ]
            },
            markLine: {
                data: [
                    {type: 'average', name: 'Average'}
                ]
            }
        },
        {
            name:'<?php echo label('price_buy');?>',
            type:'line',
            data:[<?php echo $us_series_data;?>],
            markPoint: {
                data: [
                    {type: 'max', name: 'Maximum'},
                    {type: 'min', name: 'Minimum'}
                ]
            },
            markLine: {
                data: [
                    {type: 'average', name: 'Average'}
                ]
            }
        }
    ]
};
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}

$("li.index").addClass('active');
</script>