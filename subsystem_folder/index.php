
 
 
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
        <div class="col-lg-8">
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
              <h5 class="card-title">Cnnfiscated <span id="confcat"></span></h5>

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



            <!-- Reports -->
            <div class="col-12">
              <div class="card">


              <?php 
              //Attempt select query execution
              include "../assets/php/db_connect.php";
  
              $query = "
              SELECT 
              date as date, 
              COUNT(id) as total
              FROM podms_records
              GROUP BY date";
              $query_run = mysqli_query($conn, $query);
              $dateArray = [];
              $total = [];
              if(mysqli_num_rows($query_run) > 0)
              {
                  foreach($query_run as $row)
                  {
                    $dateArray[] = $row['date'];
                    $total[] = $row['total'];
                    
                  }
              }
              ?>


                <div class="card-body">
                  <h5 class="card-title">Profiled <span>| By month</span></h5>

                  <div class="chart-container">
                    <canvas id="myChart"></canvas>
                  </div>

                  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                  <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>

                  <script>

                                // setup 
                const dateArrayJs = <?= json_encode($dateArray) ?>;
                const total = <?= json_encode($total) ?>;
                const dateChartJs = dateArrayJs.map((day, index) => {
                  let dayjs = new Date(day);
                  return dayjs;
                })
                console.log(dateChartJs);

                    // console.log (dateArrayJS);
                    const ctx = document.getElementById('myChart');

                    new Chart(ctx, {
                      type: 'bar',
                      data: {
                        labels: dateArrayJs,
                        datasets: [{
                          label: 'Profiled',
                          data: total,
                          borderWidth: 1
                        }],
                      },
                      options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                          x: {
                            type: 'time',
                            time: {
                              unit: 'day'
                            }
                          },
                          y: {
                            beginAtZero: true
                          }
                        }  
                      }
                    });
                  </script>

                </div>

                

              </div>
            </div><!-- End Reports -->

                        <!-- Reports -->
                        <div class="col-12">
              <div class="card">


                <?php
                  include_once "../assets/php/db_connect.php";
                  $query = "SELECT DATE_FORMAT(date, '%M') as month, COUNT(id) as total FROM podms_claimed_items WHERE YEAR(date) = YEAR(NOW()) GROUP BY month ORDER BY MONTH(date)";
                  $query_run = mysqli_query($conn, $query);

                  $categories = array();
                  $data = array();
                  if(mysqli_num_rows($query_run) > 0) {
                      while($row = mysqli_fetch_assoc($query_run)) {
                          array_push($categories, $row['month']);
                          array_push($data, $row['total']);
                      }
                  }                
                  ?>

                <div class="card-body">
                  <h5 class="card-title">Claimed Items <span>| By month</span></h5>

                  <!-- Line Chart -->
                  <div id="claimedChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#claimedChart"), {
                        series: [{
                          name: 'Profiled',
                          data: <?php echo json_encode($data); ?>
                        }],
                          chart: {
                          height: 350,
                          type: 'bar',
                        },
                        plotOptions: {
                          bar: {
                            borderRadius: 10,
                            dataLabels: {
                              position: 'top', // top, center, bottom
                            },
                          }
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function (val) {
                            return val;
                          },
                          offsetY: -20,
                          style: {
                            fontSize: '12px',
                            colors: ["#304758"]
                          }
                        },
                        
                        xaxis: {
                          categories: <?php echo json_encode($categories); ?>,
                          position: 'top',
                          axisBorder: {
                            show: false
                          },
                          axisTicks: {
                            show: false
                          },
                          crosshairs: {
                            fill: {
                              type: 'gradient',
                              gradient: {
                                colorFrom: '#D8E3F0',
                                colorTo: '#BED1E6',
                                stops: [0, 100],
                                opacityFrom: 0.4,
                                opacityTo: 0.5,
                              }
                            }
                          },
                          tooltip: {
                            enabled: true,
                          }
                        },
                        yaxis: {
                          axisBorder: {
                            show: false
                          },
                          axisTicks: {
                            show: false,
                          },
                          labels: {
                            show: false,
                            formatter: function (val) {
                              return val;
                            }
                          }
                        
                        },
                        title: {
                          text: 'Total profiled this year',
                          floating: true,
                          offsetY: 330,
                          align: 'center',
                          style: {
                            color: '#444'
                          }
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

                        <!-- Reports -->
                        <div class="col-12">
              <div class="card">


                <?php
                  include_once "../assets/php/db_connect.php";
                  $query = "SELECT DATE_FORMAT(date, '%M') as month, COUNT(id) as total FROM podms_confiscated WHERE YEAR(date) = YEAR(NOW()) GROUP BY month ORDER BY MONTH(date)";
                  $query_run = mysqli_query($conn, $query);

                  $categories = array();
                  $data = array();
                  if(mysqli_num_rows($query_run) > 0) {
                      while($row = mysqli_fetch_assoc($query_run)) {
                          array_push($categories, $row['month']);
                          array_push($data, $row['total']);
                      }
                  }                
                  ?>

                <div class="card-body">
                  <h5 class="card-title">Confiscated Items <span>| By month</span></h5>

                  <!-- Line Chart -->
                  <div id="confiscatedChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#confiscatedChart"), {
                        series: [{
                          name: 'Profiled',
                          data: <?php echo json_encode($data); ?>
                        }],
                          chart: {
                          height: 350,
                          type: 'bar',
                        },
                        plotOptions: {
                          bar: {
                            borderRadius: 10,
                            dataLabels: {
                              position: 'top', // top, center, bottom
                            },
                          }
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function (val) {
                            return val;
                          },
                          offsetY: -20,
                          style: {
                            fontSize: '12px',
                            colors: ["#304758"]
                          }
                        },
                        
                        xaxis: {
                          categories: <?php echo json_encode($categories); ?>,
                          position: 'top',
                          axisBorder: {
                            show: false
                          },
                          axisTicks: {
                            show: false
                          },
                          crosshairs: {
                            fill: {
                              type: 'gradient',
                              gradient: {
                                colorFrom: '#D8E3F0',
                                colorTo: '#BED1E6',
                                stops: [0, 100],
                                opacityFrom: 0.4,
                                opacityTo: 0.5,
                              }
                            }
                          },
                          tooltip: {
                            enabled: true,
                          }
                        },
                        yaxis: {
                          axisBorder: {
                            show: false
                          },
                          axisTicks: {
                            show: false,
                          },
                          labels: {
                            show: false,
                            formatter: function (val) {
                              return val;
                            }
                          }
                        
                        },
                        title: {
                          text: 'Total profiled this year',
                          floating: true,
                          offsetY: 330,
                          align: 'center',
                          style: {
                            color: '#444'
                          }
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

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
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Budget Report <span>| This Month</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>
<!-- 
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script> -->

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <!-- <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script> -->

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="../assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="../assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="../assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="../assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="../assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

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