
  
 
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

<!-- CALENDAR -->
  <div class="container" id="calendar">
  <div class="wrapper">
  <div id="calendar"></div>
  </div>
</div>




  <script>



document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');


  var calendar = new FullCalendar.Calendar(calendarEl, {
    
      headerToolbar: {
        left: 'today',
        center: 'title',
        right: 'next'
      },
    initialView: 'dayGridMonth',
      editable: false,
      selectMirror: true,
      selectable: false,
      nowIndicator: true,
      handleWindowResize: true,
    events: '../assets/php/fetchEvents.php',

    eventClick: function(info) {
      info.jsEvent.preventDefault();
      // let timeString = info.event.extendedProps.time;

      function to12HourFormat(timeString) {
        let timeParts = timeString.split(':');
        let hours24 = parseInt(timeParts[0], 10);
        let hours12 = hours24 % 12 || 12;
        let minutes = timeParts[1];
        let amPm = hours24 >= 12 ? 'PM' : 'AM';
        return `${hours12}:${minutes} ${amPm}`;
      }

      let timeString24 = info.event.extendedProps.time;
      let timeString12 = to12HourFormat(timeString24);
      
      // change the border color
      info.el.style.borderColor = '#7078f8';
      
      // show the event details
      Swal.fire({
        title: info.event.title,
        icon: 'info',
        html:'<p>'+timeString12+'</p><p>'+info.event.extendedProps.description+'</p>'
      });
    }

  });

  calendar.render();
});
</script>



  </main><!-- End #main -->



  <!-- ======= Footer ======= -->

              <?php include ('../partials/footer.php'); ?>

  <!-- End Footer -->


</html>

