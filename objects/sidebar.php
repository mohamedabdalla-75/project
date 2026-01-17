<?php 
// hubi session-ka
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 ?>
<div class="leftside-menu" >

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>
    
    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a  href="#main" aria-expanded="false" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
                
            </li>

            <li class="side-nav-title side-nav-item">Apps</li>

            <?php if (isset($_SESSION['type']) && $_SESSION['type'] === 'admin'): ?>
                <li class="side-nav-item">
                    <a href="#user" class="side-nav-link">
                        <i class="uil-store"></i>
                        <span> User </span>
                    </a>
                </li>
            <?php endif; ?>

            <li class="side-nav-item">
                <a href="#category" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Category </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#author" class="side-nav-link">
                    <i class="dripicons-pencil"></i>
                    <span> Author </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#shelf" class="side-nav-link">
                    <i class="dripicons-archive"></i>
                    <span> Shelves </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#book" class="side-nav-link">
                    <i class="dripicons-document"></i>
                    <span> Books </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#people" class="side-nav-link">
                    <i class="dripicons-user-group"></i>
                    <span> People </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#read" class="side-nav-link">
                    <i class="dripicons-user-group"></i>
                    <span> Readers </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#borrow" class="side-nav-link">
                    <i class="dripicons-forward"></i>
                    <span> Borrow Book </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#return" class="side-nav-link">
                    <i class="dripicons-reply"></i>
                    <span> Return Book </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#report" class="side-nav-link">
                    <i class="dripicons-document"></i>
                    <span> Reports </span>
                </a>
            </li>

            


        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->
</div>




