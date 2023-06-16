<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a id="pod" class="nav-link  " href="index">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a id="pod" class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <li>
                    <a id="mod5" href="confiscated" class="inactive">
                        <i class="bi bi-circle"></i><span>Confiscation</span>
                    </a>
                </li>
                <a id="mod1" href="profiling" class="inactive">
                    <i class="bi bi-circle"></i><span>Profiling</span>
                </a>
        </li>
        <?php 
                  $position = $_SESSION["position"];
                  if($position != "staff"): ?>
        <li>
            <a id="mod4" href="records" class="inactive">
                <i class="bi bi-circle"></i><span>Records</span>
            </a>
        </li>
        <?php endif; ?>
    </ul>
    </li>



    <li class="nav-item">
        <a class="nav-link stud_list" href="list">
            <i class="bi bi-person-lines-fill"></i>
            <span>Student List & Status</span>
            <!-- <span class="visually-hidden">New alerts</span> -->
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link appointment" href="appointment">
            <i class="bi bi-calendar2-check"></i>
            <span>Appointment</span>
            <!-- <span class="visually-hidden">New alerts</span> -->
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href="violation">
            <i class="bi bi-journal"></i>
            <span>Violation</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link " href="schedule">
            <i class="bi bi-calendar-check"></i>
            <span>Schedule</span>
        </a>
    </li>
    <?php 
       $position = $_SESSION["position"];
       if($position != "staff"): ?>
    <li class="nav-item">
        <a class="nav-link " href="accounts">
            <i class="bi bi-person-badge"></i>
            <span>Accounts</span>
        </a>
    </li>
    <?php endif; ?>

    <hr>
    <li class="nav-item">
        <a class="nav-link " href="sp_input">
            <i class="bi bi-gear"></i>
            <span>SAMPLE DATA</span>
        </a>
    </li>




    </ul>

</aside>