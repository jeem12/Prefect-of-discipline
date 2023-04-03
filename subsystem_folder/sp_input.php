
  
 
 <?php include('../partials/head.php'); ?>

 


<!-- ======= Header ======= -->
<title>SAMPLE INPUT - PODMS</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

  <!-- End Sidebar-->


  <?php include('../partials/preloader.php'); ?>

<main id="main" class="main" >



<div class="pagetitle">
    <h1>SAMPLE INPUT</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active">SAMPLE INPUT</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->



  <!-- MAIN CONTENT -->

 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
  Sample input from Student Portal
</button>

<!-- ADD MODAL -->

<div class="modal fade" id="addModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
              <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Create Complain Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div id="errorMessage" class="alert alert-warning d-none"></div>
                  <div class="modal-body">
                      <div class="container-fluid">
                      <form id="addData" >

                  <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="number" name="idNum" class="form-control" id="floatingName" placeholder="ID Number" required>
                  <label for="floatingName">Complainant ID Number</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="fname" class="form-control" id="floatingName" placeholder="Your First Name" required>
                  <label for="floatingName">Complainant First Name</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="mname" class="form-control" id="floatingName" placeholder="Your Middle Name" required>
                  <label for="floatingName">Complainant Middle Name</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="lname" class="form-control" id="floatingName" placeholder="Your Last Name" required>
                  <label for="floatingName">Complainant Last Name</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="section" class="form-control" id="floatingName" placeholder="Your Section" required>
                  <label for="floatingName">Complainant Section</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="course" class="form-control" id="floatingName" placeholder="Your Course" required>
                  <label for="floatingName">Complainant Course</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="inci_desc" class="form-control" id="floatingName" placeholder="Your Incident Description" required>
                  <label for="floatingName">Incident Description</label >
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="time" name="inci_time" class="form-control" id="floatingName" placeholder="Your Incident Time" required>
                  <label for="floatingName">Incident Time</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="date" name="inci_date" class="form-control" id="floatingName" placeholder="Your Incident Date" required>
                  <label for="floatingName">Incident Date</label>
                </div>
              </div>
              </div>
                  </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
                  </form>
                </div>
              </div>

                </div>
              
<!-- /ADD MODAL-->


</main><!-- End #main -->



<!-- ======= Footer ======= -->

            <?php include ('../partials/footer.php'); ?>

<!-- End Footer -->






<!-- DATATABLE SCRIPT -->



<script>
    $('#addData').submit(function (e) {
                e.preventDefault();
                            $('#addModal button').attr('disabled', true)
                            $('#addModal button[form="addData"]').text("saving ...")
                var formData = new FormData(this);
                formData.append("addData", true);

                $.ajax({
                type: "POST",
                url: "../assets/php/sample_saveData.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                
                var res = jQuery.parseJSON(response);
                if(res.status == 422) {
                    $('#errorMessage').removeClass('d-none');
                    $('#errorMessage').text(res.message);

                }else if(res.status == 200){

                    $('#errorMessage').addClass('d-none');
                    $('#addModal').modal('hide');
                    $('#addData')[0].reset();
                    
                    
                    
                    alertify.set('notifier','position', 'bottom-right');
                    alertify.success(res.message);
                    
                    draw_data();


                }
                else if(res.status == 500) {
                    alert(res.message);
                }
                }
                });

                });
</script>


</html>