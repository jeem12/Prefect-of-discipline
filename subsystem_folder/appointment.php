 

<?php include('../partials/head.php'); ?>


<!-- ======= Header ======= -->
<title>Appointment - PODMS</title>
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
        <h1>Appointment</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item">Profiling</li>
            <li class="breadcrumb-item active">Appointment</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <!-- MAIN CONTENT -->
  <?php
  date_default_timezone_set('Asia/Manila');
  ?>
  
  
  
  <!-- Modal -->
  <div class="modal fade" id="appointModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Set an appointment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="appointData">
        <div class="modal-body">
        <div id="errorMessageAppoint" class="alert alert-warning d-none"></div>
            <input type="hidden" name="id" id="id" >
            <div class="row mb-3">
                    <label for="inputTex"  class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" value="Meeting" name="title" id="text" class="form-control" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                      <input type="date" value="<?=date('Y-m-d');?>" min="<?=date('Y-m-d', strtotime(" 0 days 0 months 0 years"));?>" name="date" id="date" class="form-control" required>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                    <div class="col-sm-10">
                      <input type="time" name="time" min="09:00:00" max="20:00:00" value="<?=date('h:i');?>" id="time" class="form-control" required>
                      <small>Office hours are 9am to 7pm</small>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="text" name="text" id="text" class="form-control">
                    </div>
                  </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  
  
  
  <div class="container" id="table">
  <div class="row">
  <table id="appointTable" class="table table-striped nowrap" style="width:100%">
  <div class="col-lg-auto">
                                  <?php
                                      include "../assets/php/db_connect.php";
  
                                      $query = "SELECT * FROM podms_sp_appointment";
                                      $query_run = mysqli_query($conn, $query);
                                  ?>
                  <thead class="has-text-light">
                      <tr>
                          <th data-priority="1">ID#</th>
                          <th >First Name</th>
                          <th >Middle Name</th>
                          <th >Last Name</th>
                          <th >Course</th>
                          <th>Description</th>
                          <th data-priority="2">ACTION</th>
                      </tr>
                  </thead>
                  <tbody class="table-warning">
                      <?php
  
                      if(mysqli_num_rows($query_run) > 0)
                      {
                          foreach($query_run as $row)
                          {
                              ?>
                              <tr <?= $row['id'];?>>
                                  <td><?= $row['complained_id_number'] ?>     </td> 
                                  <td><?= strtoupper($row['complained_first_name']);?>     </td>
                                  <td><?= strtoupper($row['complained_middle_name']);?>    </td> 
                                  <td><?= strtoupper($row['complained_last_name']);?>      </td> 
                                  <td><?= strtoupper($row['complained_course']);?>         </td>
                                  <td><?= strtoupper($row['description']);?>               </td>
                                  <td>
                                  <button type="button" value="<?=$row['id'];?>" class="btn btn-secondary btn-sm" id="appointBtn">Set an appointment</button>
                                  </td>
                              </tr>
                              <?php
                          }
                      }
                      ?>
                  </tbody>
              </div>
              </table>
  </div>
  </div>
  
    </main><!-- End #main -->



<!-- ======= Footer ======= -->

            <?php include ('../partials/footer.php'); ?>

<!-- End Footer -->

<!-- DATATABLE SCRIPT -->
<script>
$(document).ready(function() {
    $('#appointTable').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+ data[1] + ' ' + data[3];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        },
        columnDefs: [ {
        className: 'dtr-control',
        orderable: false,
        targets:   -1
    } ]
    } );
} );


$(document).on('click', '#appointBtn', function (e) {


var id = $(this).val();


$.ajax({
type: "GET",
url: "../assets/php/code.php?id1=" + id,
success: function (response) {


    var res = jQuery.parseJSON(response);
    if(res.status == 404) {

        alert(res.message);
    }else if(res.status == 200){

        $('#id').val(res.data.id);
        $('#id_num').val(res.data.complained_id_number);
        $('#fname').val(res.data.complained_first_name);
        $('#lname').val(res.data.complained_last_name);

        $('#appointModal').modal('show');

    }

}
});
});

$(document).on('submit', '#appointData', function (e) {
e.preventDefault();

var formData = new FormData(this);
formData.append("appointData", true);

$.ajax({
    type: "POST",
    url: "../assets/php/code.php",
    data: formData,
    processData: false,
    contentType: false,
    success: function (response) {
        
        var res = jQuery.parseJSON(response);
        if(res.status == 422) {
            $('#errorMessageAppoint').removeClass('d-none');
            $('#errorMessageAppoint').text(res.message);

        }else if(res.status == 200){

          $('#errorMessageAppoint').addClass('d-none');
          
          // alertify.set('notifier','position', 'bottom-left');
          // alertify.success(res.message);
          
            $('#appointModal').modal('hide');
            $('#appointData')[0].reset();

            // $('#head').load("appointment.php");
            location.reload(true);



        }else if(res.status == 500) {
            alert(res.message);
        }
    }
});

});

</script>


</html>