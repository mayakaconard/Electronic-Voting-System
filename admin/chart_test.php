<?php require_once('include/side_bar.php');

//$query="SELECT COUNT(reg_number)AS total_num,school_id FROM students GROUP BY school_id";
$query="SELECT COUNT(reg_number)AS total_num,students.school_id,school_name FROM students,schools  WHERE schools.school_id=students.school_id GROUP BY students.school_id;";
$result=mysqli_query($conn,$query);
$chart_data='';
while($row=mysqli_fetch_array($result)){
    $chart_data.="{school:'".$row["school_id"]."',total:'".$row["total_num"]."'},";
}

?>
    <!-- left side end-->

    <!-- main content start-->
<?php require_once('include/header1.php')?>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Chartjs
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Charts</a>
                </li>
                <li class="active"> Chartjs </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Bar Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <!--<div id="graph-bar"></div>-->
                            <div id="students" style="height: 350px;"></div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="sticky-footer">
            <strong><?php echo date('Y')?> &copy; MMUST SMARTVOTER SYSTEM</strong>
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../js/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/modernizr.min.js"></script>
<script src="../js/jquery.nicescroll.js"></script>

<!--Morris Chart-->
<script src="../js/morris-chart/morris.js"></script>
<script src="../js/morris-chart/raphael-min.js"></script>
<script src="../js/morris-chart/morris.init.js"></script>

<!--common scripts for all pages-->
<script src="../js/scripts.js"></script>
<script>
    Morris.Bar({
        element: 'students',
        data:[<?php echo $chart_data; ?>],
        xkey:'school',
        ykeys:['total'],
        labels:['Total Students'],
        hideHover:'auto',

    });
</script>

</body>
</html>
