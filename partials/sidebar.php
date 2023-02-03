<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


            <li class="nav-item">
              <a id="act" class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Profiling</span><i class="bi bi-chevron-down ms-auto"></i>
              </a>
              <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                  <a href="profiling.php">
                    <i class="bi bi-circle"></i><span>Create Profile   </span>
                  </a>
                </li>
                <li>
                  <a href="appointment.php">
                    <i class="bi bi-circle"></i><span>Appointment</span>
                  </a>
                </li>
                <li>
                  <a href="records.php">
                    <i class="bi bi-circle"></i><span>Records</span>
                  </a>
                </li>
          </ul>
          <!-- <li class="nav-heading">Notification</li> -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="reports.php">
          <i class="bi bi-card-list"></i>
          <span>Reports</span>
        </a>
      </li><!-- End Register Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="schedule.php">
          <i class="bi bi-calendar-check"></i>
          <span>Schedule</span>
        </a>
      </li><!-- End Schedule Page Nav -->


</ul>
          
      <!-- End Components Nav -->
  </aside>

  <script>
    var y = document.getElementById('sasValAct')
    y.className = "nav-link ";
    var h = document.getElementById('evaluation-nav')
    h.className = "nav-content collapse show";
    var x = document.getElementById('sasValIns2')
    x.className = "active";
  </script>