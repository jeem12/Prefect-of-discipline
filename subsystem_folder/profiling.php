
  
 
 <?php include('../partials/head.php'); ?>

 


<!-- ======= Header ======= -->
<title>Profiling - PODMS</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

  <!-- End Sidebar-->


  <script>

var x = document.getElementById('mod1')
x.className = "active";

var y = document.getElementById('pod')
y.className = "nav-link ";

var h = document.getElementById('components-nav')
h.className = "nav-content collapse show";

</script>

<?php include "../partials/preloader.php"?>

<main id="main" class="main" >

<div class="pagetitle">
    <h1>Create Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item">Profiling</li>
        <li class="breadcrumb-item active">Create Profile</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- MAIN CONTENT -->



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


    <!-- SANCTION MODAL START -->

        <div class="modal fade" id="sanctionModal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sanction Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">                
                    <form method="POST" id="sanctionData" enctype="multipart/form-data">
                    <div class="container-fluid">
                            <input type="hidden" name="id" id="id">

                            <h1 class="fs-5 text-center">Complained Profiling</h1>

                            <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="number" name="idNum" class="form-control" id="floatingName" placeholder="ID Number" required>
                            <label for="floatingName">Complained ID Number</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="text" name="fname" class="form-control" id="floatingName" placeholder="Your First Name" required>
                            <label for="floatingName">Complained First Name</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="text" name="mname" class="form-control" id="floatingName" placeholder="Your Middle Name" required>
                            <label for="floatingName">Complained Middle Name</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="text" name="lname" class="form-control" id="floatingName" placeholder="Your Last Name" required>
                            <label for="floatingName">Complained Last Name</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="text" name="section" class="form-control" id="floatingName" placeholder="Your Section" required>
                            <label for="floatingName">Complained Section</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="text" name="course" class="form-control" id="floatingName" placeholder="Your Course" required>
                            <label for="floatingName">Complained Course</label>
                            </div>
                        </div>
                            


                        

                            <div class="col-md-12 mb-2">

                            <h1 class="fs-5 text-center">Violation</h1>

 
                            <fieldset class="row mb-3">
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="level" id="level" value="MINOR">
                                <label class="form-check-label" for="level">
                                    Minor Offense
                                </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="level" id="level" value="MAJOR">
                                <label class="form-check-label" for="level">
                                    Major Offense
                                </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="level" id="level" value="GRAVE">
                                <label class="form-check-label" for="level">
                                    Grave Offense
                                </label>
                                </div>
                            </div>
                            </fieldset>
                            </div>

                            <br>

                            <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Violation: </label>
                            <div class="col-sm-10">
                                <select class="form-select" name="viol" id="viol" aria-label="Default select example">
                                <option selected disabled>Open this select menu</option>
                                </select>
                            </div>
                            </div>

                            <br>

                            <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="text" name="sanction" class="form-control" id="floatingName" placeholder="Your Course" required>
                            <label for="floatingName">Sanction</label>
                            </div>
                        </div>
                            
                            <hr>

                            <!-- <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Investigation Attempt </label>
                            <div class="col-sm-10">
                                <select title="Leave blank if you want to end investigation" class="form-select" name="attempt" id="attempt" aria-label="Default select example">
                                <option value="" selected disabled>Open this select menu</option>
                                <option value="1">1st Investigation</option>
                                <option value="2">2nd Investigation</option>
                                <option value="3">3rd Investigation</option>
                                </select>
                            </div>
                            </div> -->

                            <hr>
                            

                            <h1 class="fs-5 text-center">Evidence</h1>
                                <div class="mb-3">
                                    <div class="upload">
                                    <div id="img-div">
                                    <img src="../assets/img/logo300.png" id="img-preview" width = 100 height = 100 alt="">
                                    </div>
                                    <div class="rightRound" id = "upload">
                                    <input type="file" name="image" class="form-control" id = "image" accept=".jpg, .jpeg, .png" placeholder="Enter Name" id="upload_file" onchange="getImagePreview(event)">
                                    <i class = "bi bi-camera-fill"></i>
                                    </div>
                                </div>
                                </div>
                    </div>
                </div>                
            
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="sancUp">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                </form>
            </div>
        </div>
    </div>



<!-- SANCTION MODAL END -->



<div class="container" id="table">
  <div class="row">
      <table id="myTable" class="table table-striped nowrap" style="width:100%">
      <div class="col-lg-auto">

      <thead id="thead">
          <tr class="has-text-light">
              <th>DATE</th>
              <th>ID NUMBER</th>
              <th>FULL NAME</th>
              <!-- <th>FIRST NAME</th>
              <th>MIDDLE NAME</th> -->
              <th>SECTION</th>
              <th>COURSE</th>
              <th>STATUS</th>
              <th data-priority="1" class="action">ACTION</th>
          </tr>
      </thead>
      
  </div>
  </table id="tableEnd">

</div>
</div>
 







</main><!-- End #main -->

<!-- ======= Footer ======= -->

<?php include ('../partials/footer.php'); ?>

<!-- End Footer -->


<!-- DATATABLE SCRIPTS -->
<script>
		$(document).ready(function() {
			// Bind change event to radio buttons
			$('input[type=radio][name=level]').change(function() {
				// Get selected category
				var category = $(this).val();
				// Fetch violin names for selected category
				$.ajax({
					url: '../assets/php/fetch_viol_names.php',
					type: 'POST',
					data: { category: category },
					success: function(response) {
						// Update select options with fetched violin names
						$('#viol').html(response);
					}
				});
			});
		});
	</script>
<script>

function showDiv(val){
                        if(val==1){
                          document.getElementById('dutyDiv').style.display='block';
                       }
                      if(val==2){
                         document.getElementById('dutyDiv').style.display='none';
                      }
                };

function getImagePreview(event)
                                {
                                    var image=URL.createObjectURL(event.target.files[0]);
                                    var imagediv= document.getElementById('img-preview');
                                    var newimg=document.getElementById('img-preview');
                                    imagediv.innerHTML='';
                                    newimg.src=image;
                                    newimg.width="500";
                                    imagediv.appendChild(newimg);
                                }

 var myTable = '';
$(function() {
    // draw function [called if the database updates]
    function draw_data() {
        if ($.fn.dataTable.isDataTable('#myTable') && myTable != '') {
            myTable.draw(true)
        } else {
            load_data();
        }
    }

    function load_data() {
        myTable = $('#myTable').DataTable({
            dom: '<"row"B>flr<"py-2 my-2"t>ip',
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "../assets/php/p_getData.php",
                method: 'POST'
            },
            columns: [
                {
                    data: 'date',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'complainant_id_number',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'fullname',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                // {
                //     data: 'complainant_middle_name',
                //     className: 'text-center',
                //     defaultContent: 'No Data Available'
                // },
                // {
                //     data: 'complainant_last_name',
                //     className: 'text-center',
                //     defaultContent: 'No Data Available'
                // },
                {
                    data: 'complainant_section',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'complainant_course',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'status',
                    className: 'text-center'
                },
                {
                    data: null,
                    orderable: false,
                    className: 'text-center action <?= $limitation?>',
                    render: function(data, type, row, meta) {
                        console.log()
                        return '<a class="me-2 btn btn-sm rounded-2 mb-1 edit_data btn-primary" href="javascript:void(0)" data-id="' + (row.id) + '">Sanction</a>';
                    }
                }
            ],
            responsive: {
                        details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                        header: function ( row ) {
                                            var data = row.data();
                                            return 'Details for '+data.complained_last_name+', '+data.complained_first_name;
                                        }
                                    } ),
    
                                    renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                    }

                },
            columnDefs: [
                        {
                            targets: 5,
                            render: function(data, type, row, meta) {
                                if (data == 1) {
                                    return '<p class="badge text-bg-danger text-wrap text-center"> For Investigation</p>';
                                } else if (data == 2) {
                                    return '<p class="badge text-bg-info text-wrap text-center">On duty</p>';
                                } else if (data == 3) {
                                    return '<p class="badge text-bg-success text-wrap text-center">Cleared</p>';
                                } else {
                                    return '<p class="badge text-bg-warning text-wrap text-center">Undefined Status</p>';
                                }
                            }
                        }
            ],
            drawCallback: function(settings) {
                $('.edit_data').click(function() {
                    $.ajax({
                        url: '../assets/php/p_getSingle.php',
                        data: { id: $(this).attr('data-id') },
                        method: 'POST',
                        dataType: 'json',
                        error: err => {
                            alert("An error occurred while fetching single data")
                        },
                        success: function(resp) {
                            if (!!resp.status) {

                                $('#sanctionModal').find('input[name="id"]').val(resp.data['id'])
      
                                $('#sanctionModal').modal('show')
                            } else {
                                alert("An error occurred while fetching single data")
                            }
                        }
                    })
                })
            },
            buttons: [{
                text: '<i class="bi bi-plus-lg me-2"></i>Create Complain',
                className: "button is-dark py-0 mb-2",
                action: function(e, dt, node, config) {
                    $('#addModal').modal('show')
                }
            }],
            "order": [
                [1, "asc"]
            ],
            initComplete: function(settings) {
                $('.paginate_button').addClass('p-1')
            }
        });
    }
    //Load Data
    load_data()


    $('#addData').submit(function (e) {
                e.preventDefault();
                            $('#addModal button').attr('disabled', true)
                            $('#addModal button[form="addData"]').text("saving ...")
                var formData = new FormData(this);
                formData.append("addData", true);

                $.ajax({
                type: "POST",
                url: "../assets/php/p_saveData.php",
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


$('#sanctionData').submit(function (e) {
e.preventDefault();

            $('#sanctionModal button').attr('disabled', true)
            $('#sanctionModal button[id="sancUp"]').text("Updating ...")
var imagediv= document.getElementById('img-preview');
var newimg=document.getElementById('img-preview');
var formData = new FormData(this);
formData.append("sanctionData", true);

$.ajax({
  type: "POST",
  url: "../assets/php/p_dataUpdate.php",
  data: formData,
  processData: false,
  contentType: false,
  success: function (response) {
      
      var res = jQuery.parseJSON(response);
      if(res.status == 422) {
          $('#errorMessageSanction').removeClass('d-none');
          $('#errorMessageSanction').text(res.message);

      }else if(res.status == 200){

          alertify.set('notifier','position', 'bottom-right');
          alertify.success(res.message);
          
          $('#sanctionModal').modal('hide');
          $('#sanctionData')[0].reset()
          var defaultImageURL = '../assets/img/logo300.png';
          $('#img-div img').attr('src', defaultImageURL);
          $('#sanctionModal button').attr('disabled', false)
          $('#sanctionModal button[id="sancUp"]').text("Submit")

          draw_data();


      }else if(res.status == 500) {
          alert(res.message);
      }
  }
});

});


});//END TAG FOR DATA TABLES

 

</script>



</html>