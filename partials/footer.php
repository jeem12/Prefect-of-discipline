
  <!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits"> -->
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer> -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

   <!-- timeago plugin -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/livestamp/1.1.2/livestamp.min.js" integrity="sha512-C3RIeaJCWeK5MLPSSrVssDBvSwamZW7Ugygc4r21guVqkeroy9wRBDaugQssAQ+m3HZsMWVvEigcNMr7juGXKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/fullcalendar/lib/main.js"></script>
  <!-- <script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="../assets/vendor/fullcalendar/sweetalert2.all.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/chart.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
  <!-- DATATABLE -->


    <script src="../assets/vendor/DataTables/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <script src="https://cdn.datatables.net/select/1.6.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/searchpanes/2.1.1/js/dataTables.searchPanes.min.js"></script>


<!-- ALERTIFY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- pdf.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.3.122/pdf.min.js" integrity="sha512-CGtesFWoCAxW8xV1S4wdev6uWmGhkEBtTGJsQLkT75ab0eVyx0RTOdGxHk9hFVV/OlF6ZyCoukfPdiZPpAiUtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>


 


    
</body>

<script>
$(document).ready(function(){



  function load_unseen_notification(view = '')
      {
        $.ajax({
        url:"../assets/php/fetchNotif.php",
        method:"POST",
        data:{view:view},
        dataType:"json",
        success:function(data)
        {
          $('.notif-dropdown').html(data.notification);
          if(data.unseen_notification > 0)
          {
          $('.count').html(data.unseen_notification);
          }

        }
        });
      } 
  load_unseen_notification();



 


 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"../assets/php/notifinsert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});




</script>


