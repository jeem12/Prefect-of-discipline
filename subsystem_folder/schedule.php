
  
 
 <?php include('../partials/head.php'); ?>


  <!-- ======= Header ======= -->
  <title>View Schedules - PODMS</title>
  <?php include('../partials/header.php'); ?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('../partials/sidebar.php'); ?>

    <!-- End Sidebar-->


<div class="preloader-wrapper">
    <!-- <img src="assets/img/bcp-olp-logo-mini2.png" alt="Preloader Logo"> -->
    <div class="text-center">
  <div class="spinner-border text-light" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
</div>

  <main id="main" class="main" >

  <div class="pagetitle">
      <h1>Schedule</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Schedule</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

	<!-- MAIN CONTENT -->

  <script>



document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'today',
        center: 'title',
        right: 'prev,next'
      },
    initialView: 'dayGridMonth',
      editable: true,
      selectMirror: true,
      selectable: true,
      nowIndicator: true,
    height: 600,
    events: '../assets/php/fetchEvents.php',

    eventClick: function(info) {
      info.jsEvent.preventDefault();
      
      // change the border color
      info.el.style.borderColor = '#7078f8';
      
      // show the event details
      Swal.fire({
        title: info.event.title,
        icon: 'info',
        html:'<p>'+info.event.extendedProps.time+'</p><p>'+info.event.extendedProps.description+'</p>',
      });
    }

  });

  calendar.render();
});
</script>

<div class="container">
  <div class="wrapper">
  <div id="calendar"></div>
  </div>
</div>

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->

              <?php include ('../partials/footer.php'); ?>

  <!-- End Footer -->


</html>

