
<!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     Made for Prefect of discipline department (2023)</a>
    </div>
  </footer> -->




  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/fullcalendar/lib/main.js"></script>
  <script src="../assets/vendor/fullcalendar/sweetalert2.all.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment-with-locales.min.js"></script>
  

  
  <!-- DATATABLE -->


  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bulma.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.bulma.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.colVis.min.js"></script>


    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bulma.min.js"></script>


    



<!-- ALERTIFY -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- pdf.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.3.122/pdf.min.js" integrity="sha512-CGtesFWoCAxW8xV1S4wdev6uWmGhkEBtTGJsQLkT75ab0eVyx0RTOdGxHk9hFVV/OlF6ZyCoukfPdiZPpAiUtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    
</body>



<!-- FETCH NOTIFS -->
<script>
$(document).ready(function() {

  $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
  });

  $('.counts').html(''); // Clear the badge count
  load_unseen_notification();

  
  function load_unseen_notification(view = '') {

    $.ajax({
        url:"../assets/php/fetchNotif.php",
        method:"POST",
        data:{view:view},
        dataType:"json",
        success:function(data) {

            $('.notif-dropdown').html(data.notification);
            if(data.unseen_notification > 0) {
                $('.count').html(data.unseen_notification);
            }

            // Update notification time
            $('.notification-item a').each(function() {
                var formattedDate = $(this).data('date');
                var momentTime = moment(formattedDate, 'YYYY-MM-DD HH:mm:ss');
                var elapsedTime = momentTime.fromNow();
                $(this).find('.elapsed-time').text(elapsedTime);
            });

        }
    });
}


 

  function load_unseen_schedule(view = '')
      {
        $.ajax({
        url:"../assets/php/fetchSched.php",
        method:"POST",
        data:{view:view},
        dataType:"json",
        });
      } 




  function load_unseen_appointment(view = '') {
    $.ajax({
      url: "../assets/php/fetchAppointment.php",
      method: "POST",
      data: {view:view},
      dataType: "json",
    });
  } 


  var intervalId = setInterval(function() {
    jQuery.ajax({
    url: '../assets/php/user_auth.php',
    type: 'post',
    data: 'type=ajax',
    success: function(result) {
      if (result == 'logout') {
        clearInterval(intervalId);
        Swal.fire({
          icon: 'warning',
          allowOutsideClick: false,
          allowEscapeKey: false,
          title: 'Session Expired',
          showCancelButton: false,
          confirmButtonText: 'OK'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = '../assets/php/logout.php';
          }else{
            window.location.href = '../assets/php/logout.php';
          }
        });
      }
    }
  });

  }, 1000);


function updateDateTime() {
  var now = new Date();
  var monthNames = ["JANUARY", "FEBRUARY", "MARCH", "APRIL", "MAY", "JUNE",
    "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER"
  ];
  var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
  var month = monthNames[now.getMonth()];
  var date = ('0' + now.getDate()).slice(-2);
  var day = dayNames[now.getDay()];
  var year = now.getFullYear();
  var hour = ('0' + now.getHours()).slice(-2);
  var minute = ('0' + now.getMinutes()).slice(-2);
  var second = ('0' + now.getSeconds()).slice(-2);
  var meridiem = hour < 12 ? 'AM' : 'PM';
  hour = hour % 12;
  hour = hour ? hour : 12;

  var datetime = hour + ':' + minute + ':' + second + ' ' + meridiem + ' | ' + day + ', ' + month + ' ' + date + ', ' + year;
  document.getElementById('datetime').innerHTML = datetime;
}
 
  setInterval(function() {
    load_unseen_appointment();
    load_unseen_notification();
    updateDateTime();
  }, 1000);

setInterval(function() {
  load_unseen_schedule();
}, 86400);

});




</script>

