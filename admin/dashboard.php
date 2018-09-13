<?php require_once('include/side_bar.php');
//$query="SELECT COUNT(reg_number)AS total_num,students.school_id,school_name FROM students,schools  WHERE schools.school_id=students.school_id GROUP BY students.school_id;";
$query="SELECT
        COUNT(DISTINCT students.reg_number) AS total_students
        , students.school_id
        , schools.school_name
        , COUNT(DISTINCT votes.reg_number) AS voters
    FROM
        smartvoter.votes
        INNER JOIN smartvoter.schools
            ON (votes.school_id = schools.school_id)
        INNER JOIN smartvoter.students
            ON (students.school_id = schools.school_id)
    GROUP BY students.school_id";
$result=mysqli_query($conn,$query);
$chart_data='';
while($row=mysqli_fetch_array($result)){
    $chart_data.="
    {school:'".$row["school_name"]."',total:'".$row["total_students"]."',voters:'".$row['voters']."'},\n";
}
//$chart_data=substr($chart_data,0,-2);
/*
$stmt="SELECT COUNT(DISTINCT reg_number)AS kura,school_name,votes.school_id FROM votes,schools WHERE schools.school_id=votes.school_id GROUP BY votes.school_id";
$r=mysqli_query($conn,$stmt);
$chart='';
while($rw=mysqli_fetch_assoc($r)){
    $chart.="{voters:'".$rw['kura']."'}";
}
*/
?>
    <!-- left side end-->
    
    <!-- main content start-->
<?php require_once('include/header1.php')?>
        <!-- header section end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row states-info">
            <div class="col-md-3">
                <?php
                $s=$conn->query("SELECT * FROM candidates");
                $c=mysqli_num_rows($s);
                ?>
                <div class="panel blue-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title">PARLIAMENTARIAN CANDIDATES</span>
                                <h4><?php echo $c;?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel blue-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title"> PARLIAMENTARIAN RESULTS  </span>
                                <h4><?php echo $c;?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel green-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col-xs-8">
                                <?php
                                $s=$conn->query("SELECT * FROM candidates");
                                $c=mysqli_num_rows($s);
                                ?>
                                <span class="state-title">  SEC CANDIDATES  </span>
                                <h4><?php echo $c;?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel green-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title">  SEC RESULTS  </span>
                                <h4><?php echo $c;?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="row">
                <div class="col-md-12">
                    <section class="panel panel-primary">
                        <header class="panel-heading">
                            registered voters (students number per school)
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <!--<a href="javascript:;" class="fa fa-times"></a>-->
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="students" style="height: 350px;">

                            </div>
                        </div>
                    </section>
                </div>
                <!--<div class="col-md-12">
                    <section class="panel panel-primary">
                        <header class="panel-heading">
                            key (school id and name)
                        </header>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4><strong>2:  </strong>SCHOOL OF EDUCATION.</h4>
                                    <h4><strong>3:  </strong>SCHOOL OF NATURAL SCIENCES.</h4>
                                    <h4><strong>4:  </strong>SCHOOL OF ENGINEERING.</h4>
                                    <h4><strong>5:  </strong>SCHOOL OF NURSING AND MIDWIFERY.</h4>
                                    <h4><strong>6:  </strong>SCHOOL OF PUBLIC HEALTH, BIOMEDICAL SCIENCES.</h4>
                                    <h4><strong>7:  </strong>SCHOOL OF AGRICULTURE, VERTERINARY SCIENCES.</h4>
                                </div>
                                <div class="col-md-6">
                                    <h4><strong>8:  </strong>SCHOOL OF DISASTER MANAGEMENT AND HUMANITARIAN.</h4>
                                    <h4><strong>9:  </strong>SCHOOL OF BUSINESS AND ECONOMICS(SOBE).</h4>
                                    <h4><strong>11:  </strong>SCHOOL OF COMPUTING AND INFORMATICS.</h4>
                                    <h4><strong>12:  </strong>SCHOOL OF MEDICINE.</h4>
                                    <h4><strong>13:  </strong>SCHOOL OF ARTS AND SOCIAL SCIENCES.</h4>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>-->
            </div>


        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer  class="sticky-footer">
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

<!--easy pie chart-->
<script src="../js/easypiechart/jquery.easypiechart.js"></script>
<script src="../js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="../js/sparkline/jquery.sparkline.js"></script>
<script src="../js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="../js/iCheck/jquery.icheck.js"></script>
<script src="../js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="../js/flot-chart/jquery.flot.js"></script>
<script src="../js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="../js/flot-chart/jquery.flot.resize.js"></script>
<script src="../js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="../js/flot-chart/jquery.flot.selection.js"></script>
<script src="../js/flot-chart/jquery.flot.stack.js"></script>
<script src="../js/flot-chart/jquery.flot.time.js"></script>
<script src="../js/main-chart.js"></script>

<!--Morris Chart-->
<script src="../js/morris-chart/morris.js"></script>
<script src="../js/morris-chart/raphael-min.js"></script>
<script src="../js/morris-chart/morris.init.js"></script>

<!--common scripts for all pages-->
<script src="../js/scripts.js"></script>

<script>
    Morris.Bar({
        element: 'students',
        data:[<?php echo $chart_data;?>],
        xkey:'school',
        ykeys:['total','voters'],
        labels:['Total Students','Casted Votes'],
        xLabelAngle: 60,
        resize:true,
        hideHover:'auto',
        barColors:['#007ae1', '#ff00ff']
        //gridLineColor: "#e4e6f2",

    });
</script>


</body>
</html>
