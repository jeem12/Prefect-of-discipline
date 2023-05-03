<?php include('../partials/head.php'); ?>




<!-- ======= Header ======= -->
<title>Slips - PODMS</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->

<script>

    var x = document.getElementById('mod5')
    x.className = "active";

    var y = document.getElementById('pod')
    y.className = "nav-link ";

    var h = document.getElementById('components-nav')
    h.className = "nav-content collapse show";

</script>

<?php include('../partials/preloader.php'); ?>

<main id="main" class="main">



    <div class="pagetitle">
        <h1>SLIPS</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Forms & Slips</li>
                <li class="breadcrumb-item active">Slips</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- POD-F2 MODAL -->
               <div class="modal fade" id="f2" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
              <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">POD-F2</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div id="errorMessage" class="alert alert-warning d-none"></div>
                  <div class="modal-body">
                      <div class="container-fluid">
                      <form id="f2" >

                  <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="to" class="form-control" id="floatingName" placeholder="to" required>
                  <label for="floatingName">To:</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="date" name="f2-date" class="form-control" id="floatingName" placeholder="Your Middle Name" required>
                  <label for="floatingName">Date</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="f2-regarding" class="form-control" id="floatingName" placeholder="Your Last Name" required>
                  <label for="floatingName">Regarding</label>
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

            <!-- POD-F3 MODAL -->

            <div class="modal fade" id="f3" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
              <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">REFERRAL SLIP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div id="errorMessage" class="alert alert-warning d-none"></div>
                  <div class="modal-body">
                      <div class="container-fluid">
                      <form id="f3" >

                  <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="f3-studname" class="form-control" id="floatingName" placeholder="to" required>
                  <label for="floatingName">Student Name</label>
                </div>
              </div>

                  <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="f3-c" class="form-control" id="floatingName" placeholder="to" required>
                  <label for="floatingName">Course</label>
                </div>
              </div>

                  <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="f3-y" class="form-control" id="floatingName" placeholder="to" required>
                  <label for="floatingName">Year</label>
                </div>
              </div>

              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="number" name="f3-age" class="form-control" id="floatingName" placeholder="Your Middle Name" required>
                  <label for="floatingName">Age</label>
                </div>
              </div>

                    <div class="col-md-12 mb-2">
                            <div class="form-floating">
                                 <select class="form-select" name="f3-sex" id="attempt">
                                <option value="" selected>Sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                            </div>
                            </div>

              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="f3-reasonforreff" class="form-control" id="floatingName" placeholder="Your Last Name" required>
                  <label for="floatingName">Reason for Referral</label>
                </div>
              </div>

              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="f3-reffto" class="form-control" id="floatingName" placeholder="Your Last Name" required>
                  <label for="floatingName">Reffered to</label>
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

    
    <!-- MAIN CONTENT -->

   <div class="container">
        <div class="row mb-4">
            <div class="col">
                <button class="card-button" data-bs-toggle="modal" data-bs-target="#f2">POD-F2</button>
            </div>
  
        </div>

        <div class="row mb-4">
            <div class="col">
                <button class="card-button" data-bs-toggle="modal" data-bs-target="#f3">POD-F3</button>
            </div>
            <div class="col">
                <button class="card-button">POD-F4</button>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <button class="card-button">POD-F5</button>
            </div>
            <div class="col">
                <button class="card-button">POD-F6</button>
            </div>
        </div>
        
        <div class="row mb-4">
            <div class="col">
                <button class="card-button">POD-F7</button>
            </div>
            <div class="col">
                <button class="card-button">POD-F8</button>
            </div>
        </div>
            
    </div>
    

   </div>


</main><!-- End #main -->



<!-- ======= Footer ======= -->

<?php include('../partials/footer.php'); ?>

<!-- End Footer -->



</html>