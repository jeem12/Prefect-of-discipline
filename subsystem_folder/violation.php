
 
 <?php include('../partials/head.php'); ?>


<!-- ======= Header ======= -->
<title>Violation - PODMS</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->


<div class="preloader-container"></div>
  <div class="logo-container">
    <img src="../assets/img/logo300.png" alt="Your Logo">
  </div>
  <!-- <div class="preloader-text">Loading...</div> -->
</div>


<main id="main" class="main">
<div class="pagetitle">
      <h1>Violation</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Violation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <?php 
       $position = $_SESSION["position"];
       if($position != "staff"): ?>

    <div class="text-end">
    <button class="btn btn-warning rounded-3 " id="addOff">Add Offense</button>
    <button class="btn btn-warning rounded-3 " id="editName">Edit Offense</button>
    <button class="btn btn-warning rounded-3 " id="editSanc">Edit Sanction</button>
    </div>
    <?php endif; ?>
    <br>
    <br>



<!-- Modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateViol">
        <div class="col-md-12 mb-2">

            <fieldset class="row mb-3">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="category" value="MINOR">
                <label class="form-check-label" for="category">
                    Minor Offense
                </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="category" value="MAJOR">
                <label class="form-check-label" for="category">
                    Major Offense
                </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="category" value="GRAVE">
                <label class="form-check-label" for="category">
                    Grave Offense
                </label>
                </div>
            </div>
            </fieldset>
            </div>

            <hr>

            <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Violation: </label>
                            <div class="col-sm-10">
                                <select class="form-select" name="viol" id="viol" aria-label="Default select example">
                                <option selected disabled>Open this select menu</option>
                                </select>
                            </div>
                            </div>

                            <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="text" name="updated_value" id="updated_value" class="form-control" id="floatingName" placeholder="Your Course" required>
                            <label for="floatingName">Updated Value</label>
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

<!-- add Modal -->
<div class="modal fade" id="add-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addViol">
        <div class="col-md-12 mb-2">

            <fieldset class="row mb-3">
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="category" value="MINOR">
                <label class="form-check-label" for="category">
                    Minor Offense
                </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="category" value="MAJOR">
                <label class="form-check-label" for="category">
                    Major Offense
                </label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="category" id="category" value="GRAVE">
                <label class="form-check-label" for="category">
                    Grave Offense
                </label>
                </div>
            </div>
            </fieldset>
            </div>

            <hr>

                            <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="text" name="viol_num" id="viol_num" class="form-control" id="floatingName" placeholder="Your Course" required>
                            <label for="floatingName">Violation Number</label>
                            </div>
                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="text" name="viol_name" id="viol_name" class="form-control" id="floatingName" placeholder="Your Course" required>
                            <label for="floatingName">Violation Name</label>
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



    <div class="container">
      <div class="row">

      <table cellpadding="1" cellspacing="1" id="sheet0" class="table table-bordered table-sm table-secondary text-center">
        <tbody class="table-bordered">
          <tr class="row0">
            <td class="column0 style2 s style2" colspan="4"><h1><strong>Section 4.</strong> OFFENSE</h1></td>

            
          </tr>
          <tr class="row2">
            <td class="column0 style2 s style4" colspan="4"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">4.1.1</span><span style="color:#000000; font-family:'Calibri'; font-size:11pt"> Minor Offense<br />
<br />
Those offenses not included in the foregoing violations shall be considered as minor ones which merit suspension, waming/reprimand, disciplinary probation and/or fine to be fixed by the school. However, violation of any of the minor offenses enumerated below for two (2) consecutive times shall be penalized with sanction as provided under the major offenses.</span></td>
          </tr>
          <tr class="row1">
            <th class="column0 style3 s">Section Number</th>
            <th class="column1 style3 s">Offense Name</th>
            <th class="column2 style3 s">Sanction</th>
            <th class="column3 style3 s">Category</th>
          </tr>

          <?php 
            include '../assets/php/db_connect.php';
            $query = "SELECT * FROM podms_violation WHERE `viol_category` = 'MINOR'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
            $prev_sanction = "";
            $prev_category = "";
            while($row = mysqli_fetch_array($result)){
                $current_sanction = $row['viol_sanction'];
                $current_category = $row['viol_category'];
                ?>

                <tr>
                <?php if ($current_sanction !== $prev_sanction || $current_category !== $prev_category): ?>
                    <td class="column0 style3 s"><?= $row['viol_num']?></td>
                    <td class="column1 style3 s"><?= $row['viol_name']?></td>
                    <td class="column2 style2 s style2" rowspan="0"><?= $row['viol_sanction']?></td>
                    <td class="column3 style2 s style2" rowspan="0"><?= $row['viol_category']?></td>
                <?php else: ?>
                    <td class="column0 style3 s"><?= $row['viol_num']?></td>
                    <td class="column1 style3 s"><?= $row['viol_name']?></td>
                <?php endif; ?>
                </tr>

                <?php
                $prev_sanction = $current_sanction;
                $prev_category = $current_category;
            }
            }
            ?>
</table>
<table cellpadding="1" cellspacing="1" id="sheet1" class="table table-bordered table-sm table-secondary text-center">
          <tr class="row17">
            <td class="column0 style2 s style2" colspan="4"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">4.1.2</span><span style="color:#000000; font-family:'Calibri'; font-size:11pt"> Major Offense<br />
<br />
Those that immediately call for a meeting with the parents. Temporary holding of a student while awaiting for the arrival of his parent or guardian may be imposed without any prior warning.</span></td>
          </tr>
          <tr class="row18">
            <th class="column0 style3 s">Section Number</th>
            <th class="column1 style3 s">Offense Name</th>
            <th class="column2 style3 s">Sanction</th>
            <th class="column3 style3 s">Category</th>
          </tr>

          <?php 
            include '../assets/php/db_connect.php';
            $query = "SELECT * FROM podms_violation WHERE `viol_category` = 'MAJOR'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
            $prev_sanction = "";
            $prev_category = "";
            while($row = mysqli_fetch_array($result)){
                $current_sanction = $row['viol_sanction'];
                $current_category = $row['viol_category'];
                ?>

                <tr>
                <?php if ($current_sanction !== $prev_sanction || $current_category !== $prev_category): ?>
                    <td class="column0 style3 s"><?= $row['viol_num']?></td>
                    <td class="column1 style3 s"><?= $row['viol_name']?></td>
                    <td class="column2 style2 s style2" rowspan="0"><?= $row['viol_sanction']?></td>
                    <td class="column3 style2 s style2" rowspan="0"><?= $row['viol_category']?></td>
                <?php else: ?>
                    <td class="column0 style3 s"><?= $row['viol_num']?></td>
                    <td class="column1 style3 s"><?= $row['viol_name']?></td>
                <?php endif; ?>
                </tr>

                <?php
                $prev_sanction = $current_sanction;
                $prev_category = $current_category;
            }
            }
            ?>
</table>
<table cellpadding="1" cellspacing="1" id="sheet2" class="table table-bordered table-sm table-secondary text-center">

          <tr class="row38">
            <td class="column0 style2 s style4" colspan="4"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">4.1.3</span><span style="color:#000000; font-family:'Calibri'; font-size:11pt"> Grave Offense<br />
<br />
These are offenses which are so severe the proper penalty for which is exclusion or expulsion.</span></td>
   
          </tr>
          <tr class="row39">
            <th class="column0 style3 s">Section Number</th>
            <th class="column1 style3 s">Offense Name</th>
            <th class="column2 style3 s">Sanction</th>
            <th class="column3 style3 s">Category</th>
   
          </tr>

          <?php 
            include '../assets/php/db_connect.php';
            $query = "SELECT * FROM podms_violation WHERE `viol_category` = 'GRAVE'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
            $prev_sanction = "";
            $prev_category = "";
            while($row = mysqli_fetch_array($result)){
                $current_sanction = $row['viol_sanction'];
                $current_category = $row['viol_category'];
                ?>

                <tr>
                <?php if ($current_sanction !== $prev_sanction || $current_category !== $prev_category): ?>
                    <td class="column0 style3 s"><?= $row['viol_num']?></td>
                    <td class="column1 style3 s"><?= $row['viol_name']?></td>
                    <td class="column2 style2 s style2" rowspan="0"><?= $row['viol_sanction']?></td>
                    <td class="column3 style2 s style2" rowspan="0"><?= $row['viol_category']?></td>
                <?php else: ?>
                    <td class="column0 style3 s"><?= $row['viol_num']?></td>
                    <td class="column1 style3 s"><?= $row['viol_name']?></td>
                <?php endif; ?>
                </tr>

                <?php
                $prev_sanction = $current_sanction;
                $prev_category = $current_category;
            }
            }
            ?>

        </tbody>
    </table>

    </div>
  </div>




</main>
<!-- End #main -->

<!-- ======= Footer ======= -->

            <?php include ('../partials/footer.php'); ?>

<!-- End Footer -->

<script>

$('#addOff').click(function() {
  $('#add-modal').modal('show')});

$('#addViol').submit(function (e) {
                e.preventDefault();
                var formData = new FormData(this);
                formData.append("addViol", true);

                $.ajax({
                type: "POST",
                url: "../assets/php/add_offense.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                
                var res = jQuery.parseJSON(response);
                   if(res.status == 200){

                    // $('#errorMessage').addClass('d-none');
                    $('#add-modal').modal('hide');
                    $('#addViol')[0].reset();
                    
                    
                    
                    alertify.set('notifier','position', 'bottom-right');
                    alertify.success(res.message);
                    
                    $('#sheet0').load(location.href + " #sheet0");
                    $('#sheet1').load(location.href + " #sheet1");
                    $('#sheet2').load(location.href + " #sheet2");


                }
                else if(res.status == 500) {
                    alert(res.message);
                }
                }
                });

                });


 $('#editName').click(function() {
  $('#modal').modal('show')
  // Bind change event to radio buttons
  $('input[type=radio][name=category]').change(function() {
    // Get selected category
    var category = $(this).val();
    // Fetch violin names for selected category
    $.ajax({
      url: '../assets/php/get_offense.php',
      type: 'POST',
      data: { category: category },
      success: function(response) {
        // Update select options with fetched violin names
        $('#viol').html(response);
      }
    });
  });
});

$('#updateViol').submit(function (e) {
e.preventDefault();
var formData = new FormData(this);
formData.append("updateViol", true);

$.ajax({
  type: "POST",
  url: "../assets/php/update_offense.php",
  data: formData,
  processData: false,
  contentType: false,
  success: function (response) {
      
      var res = jQuery.parseJSON(response);
      if(res.status == 200){

          alertify.set('notifier','position', 'bottom-right');
          alertify.success(res.message);
          
          $('#modal').modal('hide');
          $('#modal')[0].reset()
          $('#updateViol')[0].reset()
          $('#viol')[0].reset()
          $('#category')[0].reset()


          $('#sheet0').load(location.href + " #sheet0");
          $('#sheet1').load(location.href + " #sheet1");
          $('#sheet2').load(location.href + " #sheet2");


      }else if(res.status == 500) {
          alert(res.message);
      }
  }
});

});

$('#editSanc').click(function() {
  $('#modal').modal('show')
  // Bind change event to radio buttons
  $('input[type=radio][name=category]').change(function() {
    // Get selected category
    var category = $(this).val();
    // Fetch violin names for selected category
    $.ajax({
      url: '../assets/php/get_sanc.php',
      type: 'POST',
      data: { category: category },
      success: function(response) {
        // Update select options with fetched violin names
        $('#viol').html(response);
      }
    });
  });
});

$('#updateViol').submit(function (e) {
e.preventDefault();
var formData = new FormData(this);
formData.append("sancUpdate", true);

$.ajax({
  type: "POST",
  url: "../assets/php/update_sanc.php",
  data: formData,
  processData: false,
  contentType: false,
  success: function (response) {
      
      var res = jQuery.parseJSON(response);
      if(res.status == 200){

          alertify.set('notifier','position', 'bottom-right');
          alertify.success(res.message);
          
          $('#modal').modal('hide');
          $('#modal')[0].reset()
          $('#updateViol')[0].reset()
          $('#viol')[0].reset()
          $('#category')[0].reset()


          $('#sheet0').load(location.href + " #sheet0");
          $('#sheet1').load(location.href + " #sheet1");
          $('#sheet2').load(location.href + " #sheet2");


      }else if(res.status == 500) {
          alert(res.message);
      }
  }
});

});
	</script>



</html>
