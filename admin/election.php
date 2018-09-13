<?php require_once('include/side_bar.php')?>
    <!-- left side end-->
    
    <!-- main content start-->
<?php require_once('include/header1.php')?>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">UI Elements</a>
                </li>
                <li class="active"> Tabs & Accordions </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading custom-tab blue-tab">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#home2" data-toggle="tab">Home</a>
                                </li>
                                <li class="">
                                    <a href="#about2" data-toggle="tab">About</a>
                                </li>
                                <li class="">
                                    <a href="#profile2" data-toggle="tab">Profile</a>
                                </li>
                                <li class="">
                                    <a href="#contact2" data-toggle="tab">Contact</a>
                                </li>
                            </ul>
                        </header>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="home2">
                                    Home
                                </div>
                                <div class="tab-pane" id="about2">
                                    About
                                </div>
                                <div class="tab-pane" id="profile2">
                                    Profile
                                </div>
                                <div class="tab-pane" id="contact2">Contact</div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="sticky-footer">
            <strong>2017 &copy; MMUST SMARTVOTER SYSTEM</strong>
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

<!--common scripts for all pages-->
<script src="../js/scripts.js"></script>

</body>
</html>
