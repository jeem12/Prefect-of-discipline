<?php include "../assets/php/db_connect.php";?>

<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="../assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">ADMIN</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->


<nav class="header-nav ms-auto">

      <ul class="d-flex align-items-center">

      <li class="nav-item dropdown pe-3">
        <span>
          <strong>
          <p class="badge bg-primary p-3 rounded-2" id="datetime"></p>
          </strong>
        </span>
      </li>


        <!-- Start Notification Nav -->

        <li class="dropdown overflow-y: scroll;">
        <a class="dropdown-toggle nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number count"></span>
          </a><!-- End Notification Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications notif-dropdown" style="width: 400px; "></ul>
        </li> 
      
      <!-- End Notification Nav -->





      

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/POD.png" id="logo-logo" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= strtoupper($_SESSION['name']);?></h6>
              <span><?= strtoupper($_SESSION['position']);?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../assets/php/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav>

    <!-- End Icons Navigation -->

    

</header>