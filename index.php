<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['username']) || !isset($_SESSION['user'])) {
    $login_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/Login/Login.php';
    header("Location: $login_url");
    exit();
}
?>
<!DOCTYPE html>
    <html lang="en">
    <?php include 'config/SYD_Class.php';
      $coder = new sydClass();
    ?>
    <?php include("Codes.php");
     $co=new Codes();?>

    <?php include("modals/usermodal.php") ?>
    <?php include("objects/header.php") ?>
    <?php include("modals/catmodal.php") ?>
    <?php include("modals/autmodal.php") ?>
    <?php include("modals/shelfmodal.php") ?>
    <?php include("modals/bookmodal.php") ?>
    <?php include("modals/peomodal.php") ?>
    <?php include("modals/barmodal.php") ?>
    <?php include("modals/retmodal.php") ?>
    <?php include("modals/readmodal.php") ?>
    <?php include("report/events.php") ?>
    <?php include("report/repmodal.php") ?>
    

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <?php include("objects/sidebar.php") ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                     <?php include("objects/topbar.php") ?>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <?php include("objects/home.php") ?>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <?php include("objects/footer.php") ?>
                <!-- end Footer -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
         <?php include("objects/rightbar.php") ?>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard.js"></script>
        <!-- end demo js-->
    </body>
</html>