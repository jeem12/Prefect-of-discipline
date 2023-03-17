
 
 
 <?php include('../partials/head.php'); ?>


<!-- ======= Header ======= -->
<title>Dashboard - PODMS</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->


<div class="preloader-wrapper">
  <!-- <img src="../assets/img/logo300.png" alt="Preloader Logo"> -->
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

            <!-- Reports -->
            <div class="col-12">
          <div class="card">


            <div class="card-body">
              <h5 class="card-title">Total Profiled <span>/Bar Chart</span></h5>

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

              <!-- Bar Chart -->
              <div class="chartBox">
                <canvas id="myChart"></canvas>
                <span>Click to filter month</span>
                <input id="month" type="month" onchange="filterChart(this)">
                <button onclick="downloadPDF()" id="pdf">Extract Report</button>
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



                const data = {
                  labels: dateChartJs,
                  datasets: [{
                    label: 'Profiled Reports',
                    data: total,
                    backgroundColor: [
                      'rgba(255, 26, 104, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(0, 0, 0, 1)'
                    ],
                    borderColor: [
                      'rgba(255, 26, 104, 1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(0, 0, 0, 1)'
                    ],
                    borderWidth: 1
                  }]
                };


                // config 
                const config = {
                  type: 'bar',
                  data,
                  options: {
                    responsive: true,
                      maintainAspectRatio: false,
                    plugins:{
                      tooltip: {
                        callbacks: {
                          title: context => {
                            const d = new Date(context[0].parsed.x);
                            const formattedDate = d.toLocaleString([], {
                              month: 'short',
                              day: '2-digit',
                              year: 'numeric',
                            });
                            return formattedDate;
                          }
                        }
                      }
                    },
                    scales: {
                      x: {
                      type: 'time',
                      time: {
                        unit: 'day'
                      }
                    },
                      y: {
                        beginAtZero: true,
                        min: 0,
                        ticks: {
                          stepSize: 1
                        }
                      }
                    }
                  }
                };

                // render init block
                const myChart = new Chart(
                  document.getElementById('myChart'),
                  config
                );

                function downloadPDF() {
                 const canvas = document.getElementById('myChart');

                 //create image
                 const canvasImage = canvas.toDataURL('image/png', 1.0);
                 //image must go to PDF

                 let pdf = new jsPDF('landscape');
                 pdf.setFontSize(20);
                 pdf.addImage(canvasImage, 'PNG', 15, 15, 250, 150);
                 pdf.save('podChart.pdf');
                }



              function filterChart(date) {
                const year = date.value.substring(0, 4);
                const month = date.value.substring(5, 7);

                const lastDay = (y, m) => {
                  return new Date(y, m, 0).getDate()
                };



                const startDate = `${date.value}-01`;
                const endDate = `${date.value}-${lastDay(year, month)}`;

                myChart.config.options.scales.x.min = startDate;
                myChart.config.options.scales.x.max = endDate;
                myChart.update();

                
              }
              </script>

          <!-- End Bar CHart -->

            </div>

          </div>
        </div><!-- End Report for profiled record -->

        <!-- ------------------------------------------------- -->

    





</main><!-- End #main -->

<!-- ======= Footer ======= -->

            <?php include ('../partials/footer.php'); ?>

<!-- End Footer -->



</html>