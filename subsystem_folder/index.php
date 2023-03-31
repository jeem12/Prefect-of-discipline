
 
 
 <?php include('../partials/head.php'); ?>


<!-- ======= Header ======= -->
<title>Dashboard - PODMS</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->


<div class="preloader-wrapper">
  <!-- <img src="../../assets/img/logo300.png" alt="Preloader Logo"> -->
  <div class="text-center">
<div class="spinner-border text-light" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</div>
</div>


<main id="main" class="main">
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-15">
          <div class="row">


                      <!-- Profiled Card -->
                      <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" id="filterPro">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">Month</a></li>
                <li><a class="dropdown-item" href="#">Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Profiled <span id="procat"></span></h5>

              <div class="d-flex align-items-center procard" id="Today">
              <?php
                    include_once "../assets/php/db_connect.php";

                    $query = "SELECT COUNT(id) AS total FROM `podms_records` WHERE `date` = CURDATE()";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $row = mysqli_fetch_assoc($query_run);
                    ?>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $row['total'];?></h6>
                </div>
                <?php
                  }
                  ?>
              </div>

              <div class="d-flex align-items-center procard d-none" id="Month">
              <?php
                include_once "../assets/php/db_connect.php";

                $query = "SELECT COUNT(id) AS total FROM podms_records WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date) = MONTH(NOW())";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0) {
                    $row = mysqli_fetch_assoc($query_run);
                ?>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $row['total']?></h6>
                </div>
                <?php
                  }
                  ?>
              </div>

              <div class="d-flex align-items-center procard d-none" id="Year">
              <?php
                include_once "../assets/php/db_connect.php";

                $query = "SELECT COUNT(id) AS total FROM `podms_records` WHERE YEAR(`date`) = YEAR(NOW())";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0) {
                    $row = mysqli_fetch_assoc($query_run);
                ?>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $row['total']?></h6>
                </div>
                <?php
                  }
                  ?>
              </div>

            </div>

          </div>
        </div>
        <!-- End Profiled Card -->


            <!-- Confiscated Card -->
            <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" id="filterConf">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">Month</a></li>
                <li><a class="dropdown-item" href="#">Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Confiscated <span id="confcat"></span></h5>

              <div class="d-flex align-items-center confcard" id="Today">
              <?php
                    include_once "../assets/php/db_connect.php";

                    $query = "SELECT COUNT(id) AS total FROM `podms_confiscated` WHERE `date` = CURDATE()";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $row = mysqli_fetch_assoc($query_run);
                    ?>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $row['total'];?></h6>
                </div>
                <?php
                  }
                  ?>
              </div>

              <div class="d-flex align-items-center confcard d-none" id="Month">
              <?php
                include_once "../assets/php/db_connect.php";

                $query = "SELECT COUNT(id) AS total FROM podms_confiscated WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date) = MONTH(NOW())";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0) {
                    $row = mysqli_fetch_assoc($query_run);
                ?>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $row['total']?></h6>
                </div>
                <?php
                  }
                  ?>
              </div>

              <div class="d-flex align-items-center confcard d-none" id="Year">
              <?php
                include_once "../assets/php/db_connect.php";


                $query = "SELECT COUNT(id) AS total FROM `podms_confiscated` WHERE YEAR(`date`) = YEAR(NOW());";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0) {
                    $row = mysqli_fetch_assoc($query_run);
                ?>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $row['total']?></h6>
                </div>
                <?php
                  }
                  ?>
              </div>

            </div>

          </div>
        </div>
        <!-- End Confiscated Card -->

            <!-- Claimed Card -->
            <div class="col-xxl-4 col-md-6">
          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" id="filterClam">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">Month</a></li>
                <li><a class="dropdown-item" href="#">Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Claimed Items <span id="clamcat"></span></h5>

              <div class="d-flex align-items-center clamcard" id="Today">
              <?php
                    include_once "../assets/php/db_connect.php";

                    $query = "SELECT COUNT(id) AS total FROM `podms_claimed_items` WHERE `date` = CURDATE()";
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $row = mysqli_fetch_assoc($query_run);
                    ?>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $row['total'];?></h6>
                </div>
                <?php
                  }
                  ?>
              </div>

              <div class="d-flex align-items-center clamcard d-none" id="Month">
              <?php
                include_once "../assets/php/db_connect.php";

                $query = "SELECT COUNT(id) AS total FROM podms_claimed_items WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date) = MONTH(NOW())";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0) {
                    $row = mysqli_fetch_assoc($query_run);
                ?>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $row['total']?></h6>
                </div>
                <?php
                  }
                  ?>
              </div>

              <div class="d-flex align-items-center clamcard d-none" id="Year">
              <?php
                include_once "../assets/php/db_connect.php";


                $query = "SELECT COUNT(id) AS total FROM `podms_claimed_items` WHERE YEAR(`date`) = YEAR(NOW());";
                $query_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($query_run) > 0) {
                    $row = mysqli_fetch_assoc($query_run);
                ?>
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6><?= $row['total']?></h6>
                </div>
                <?php
                  }
                  ?>
              </div>

            </div>

          </div>
        </div>
        <!-- End Claimed Card -->
          </div>
        </div>


        <div class="col-lg-8">
          <div class="row">

            <!-- Reports -->
            <div class="col-12">
              <div class="card">


              <?php 
              //Attempt select query execution
              include "../assets/php/db_connect.php";
  
              $query1 = "SELECT MONTHNAME(date) as date, COUNT(id) as total  FROM podms_records WHERE YEAR(date) = YEAR(NOW()) GROUP BY MONTH(date) ORDER BY MONTH(date) ASC;";
              $query_run1 = mysqli_query($conn, $query1);
              
              $total1 = [];

              if(mysqli_num_rows($query_run1) > 0)
              {
                
                while ($row = mysqli_fetch_assoc($query_run1)) {
                  $total[] = $row['total'];
                  
                }
              
                
              } else {
                echo "No records found!";
              }

              // 2nd chart

              $query2 = "SELECT MONTHNAME(date) as date, COUNT(id) as total  FROM podms_claimed_items WHERE YEAR(date) = YEAR(NOW()) GROUP BY MONTH(date) ORDER BY MONTH(date) ASC;";
              $query_run2 = mysqli_query($conn, $query2);
              
              $total2 = [];

              if(mysqli_num_rows($query_run2) > 0)
              {
                
                while ($row = mysqli_fetch_assoc($query_run2)) {
                  $total2[] = $row['total'];
                  
                }
              
                
              } else {
                echo "No records found!";
              }

              // 3rd chart

              $query3 = "SELECT MONTHNAME(date) as date, COUNT(id) as total  FROM podms_confiscated WHERE YEAR(date) = YEAR(NOW()) GROUP BY MONTH(date) ORDER BY MONTH(date) ASC;";
              $query_run3 = mysqli_query($conn, $query3);
              
              $total3 = [];

              if(mysqli_num_rows($query_run3) > 0)
              {
                
                while ($row = mysqli_fetch_assoc($query_run3)) {
                  $total3[] = $row['total'];
                  
                }
              
                
              } else {
                echo "No records found!";
              }
              ?>


                <div class="card-body">
                  <h5 class="card-title">Chart <span>| by Months</span></h5>

                  <div class="chart-container">
                    <canvas id="myChart"></canvas>
                  </div>

                  <script src="../assets/vendor/chart.js/chart.js"></script>

                  <script>

                    const total = <?= json_encode($total)?>;
                    const total2 = <?= json_encode($total2)?>;
                    const total3 = <?= json_encode($total3)?>;

                        const ctx = document.getElementById('myChart');
                        const labels = ['January', 'February', 'March','Apil', 'May', 'June','July','August','September','October','November','December'];

                        new Chart(ctx, {
                          type: 'bar',
                          data: {
                            labels: labels,
                            datasets: [{
                              label: 'Profiled',
                              data: total,
                              borderWidth: 1
                            },
                            {
                              label: 'Claimed Items',
                              data: total2,
                              borderWidth: 1
                            },
                            {
                              label: 'Confiscated Items',
                              data: total3,
                              borderWidth: 1
                            }]
                          },
                          options: {
                            maintainAspectRatio: false,
                            scales: {
                              y: {
                                beginAtZero: true,
                                grace: '5%',
                                ticks: {
                                  stepSize: 1
                                }
                              }
                            }
                          }
                        });
                    </script>

                </div>

                

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" id="filterTable">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#" onclick="showTable('bsit')">BSIT</a></li>
                    <li><a class="dropdown-item" href="#" onclick="showTable('bsed')">BSED</a></li>
                    <li><a class="dropdown-item" href="#" onclick="showTable('bsba')">BSBA</a></li>

                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Confiscated list <span id="span-cat"></span></h5>
                <table class="table table-bordered">
                  <thead>
                  <tr>
                    <th>ID Number</th>
                    <th>Fullname</th>
                    <th>Section</th>
                    <th>Course</th>
                    <th>Item name</th>
                    <th>Item Description</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody  class="datatable" id="bsit">
                <?php
                      include "../assets/php/db_connect.php";

                      $query = "SELECT * FROM `podms_confiscated` WHERE `course` = 'BSIT'";
                      $query_run = mysqli_query($conn, $query);

                      if($query_run)
                      {
                        while($row = mysqli_fetch_array($query_run))
                        {
                    ?>
                    <tr>
                      <td><?= $row['id_number']?></td>
                      <td><?= $row['last_name'] . ', ' . $row['first_name'] . ' ' . $row['middle_name']?></td>
                      <td><?= $row['section']?></td>
                      <td><?= $row['course']?></td>
                      <td><?= $row['item_name']?></td>
                      <td><?= $row['item_desc']?></td>
                      <td><?= $row['date']?></td>
                    </tr>
                    <?php
                        }
                      }
                    ?>
                </tbody>
                <tbody class="datatable" id="bsed">
                <?php
                      include "../assets/php/db_connect.php";

                      $query = "SELECT * FROM `podms_confiscated` WHERE `course` = 'BSED'";
                      $query_run = mysqli_query($conn, $query);

                      if($query_run)
                      {
                        while($row = mysqli_fetch_array($query_run))
                        {
                    ?>
                    <tr>
                      <td><?= $row['id_number']?></td>
                      <td><?= $row['last_name'] . ', ' . $row['first_name'] . ' ' . $row['middle_name']?></td>
                      <td><?= $row['section']?></td>
                      <td><?= $row['course']?></td>
                      <td><?= $row['item_name']?></td>
                      <td><?= $row['item_desc']?></td>
                      <td><?= $row['date']?></td>
                    </tr>
                    <?php
                        }
                      }
                    ?>
                </tbody>
                </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">



            <div class="card-body">
              <h5 class="card-title">Notification <span>| Today</span></h5>

              <div class="activity">

              <?php 
              include "../assets/php/db_connect.php";

              $query = "SELECT * FROM `podms_notif` WHERE DATE(date) = CURDATE() ORDER BY `id` DESC LIMIT 18";
              $query_run = mysqli_query($conn, $query);

              if($query_run)
              {
                while($row = mysqli_fetch_array($query_run))
                {
                  $time = $row['date'];
              ?>
                <div class="activity-item d-flex">
                  <div class="activite-label elapsed-time"></div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content" data-timestamp="<?= $time ?>">
                    <?= $row['message']?>
                  </div>
                </div><!-- End activity item-->

                <?php 
                }
              }
              ?>

              </div>

            </div>


          </div><!-- End Recent Activity -->

          <script>
            // Update the elapsed time every minute
            setInterval(function() {
              $('.activity-content').each(function() {
               
                var activityTime = moment($(this).attr('data-timestamp'));
                $(this).siblings('.elapsed-time').text(activityTime.fromNow());

              
            });
            }, 3000);
          </script>



        </div><!-- End Right side columns -->

      </div>
    </section>
</main><!-- End #main -->

<!-- ======= Footer ======= -->

            <?php include ('../partials/footer.php'); ?>

<!-- End Footer -->


<script>
const filterCards1 = document.querySelectorAll('#filterPro li');
const filterCards2 = document.querySelectorAll('#filterConf li');
const filterCards3 = document.querySelectorAll('#filterClam li');

// set default value of category span to "Today"
const span1 = document.getElementById('procat');
span1.textContent = '| Today';

// set default value of category span to "Today"
const span2 = document.getElementById('confcat');
span2.textContent = '| Today';

// set default value of category span to "Today"
const span3 = document.getElementById('clamcat');
span3.textContent = '| Today';

filterCards1.forEach(item => {
  item.addEventListener('click', function(event) {
    event.preventDefault();
    const selectedCategory = this.textContent.trim();
    showPro(selectedCategory);
    span1.textContent = '| ' + selectedCategory;
  });
});

filterCards2.forEach(item => {
  item.addEventListener('click', function(event) {
    event.preventDefault();
    const selectedCategory = this.textContent.trim();
    showConf(selectedCategory);
    span2.textContent = '| ' + selectedCategory;
  });
});

filterCards3.forEach(item => {
  item.addEventListener('click', function(event) {
    event.preventDefault();
    const selectedCategory = this.textContent.trim();
    showClam(selectedCategory);
    span3.textContent = '| ' + selectedCategory;
  });
});

function showPro(category) {
  const proCards = document.querySelectorAll('.procard');
  proCards.forEach(card => {
    if (card.getAttribute('id') === category) {
      card.classList.remove('d-none');
    } else {
      card.classList.add('d-none');
    }
  });
}

function showConf(category) {
  const confCards = document.querySelectorAll('.confcard');
  confCards.forEach(card => {
    if (card.getAttribute('id') === category) {
      card.classList.remove('d-none');
    } else {
      card.classList.add('d-none');
    }
  });
}

function showClam(category) {
  const clamCards = document.querySelectorAll('.clamcard');
  clamCards.forEach(card => {
    if (card.getAttribute('id') === category) {
      card.classList.remove('d-none');
    } else {
      card.classList.add('d-none');
    }
  });
}


</script>

<script>

const filterItems = document.querySelectorAll('#filterTable');

filterItems.forEach(item => {
  item.addEventListener('click', function(event) {
    event.preventDefault();
    const selectedCategory = this.getAttribute('href').substring(1);
    showTable(selectedCategory);
  });
});

function showTable(category) {
  const tables = document.querySelectorAll('.datatable');
  tables.forEach(table => {
    if (table.getAttribute('id') === category) {
      table.style.display = 'contents';
    } else {
      table.style.display = 'none';
    }
  });

  const categorySpan = document.getElementById('span-cat');
  categorySpan.textContent = '| ' + category.toUpperCase();
}
</script>


</html>