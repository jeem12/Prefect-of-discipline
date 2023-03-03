
  
 
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
                  <label for="floatingName">Incident Description</label>
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
                    <div class="container-fluid">
                        <form method="POST" id="sanctionData" enctype="multipart/form-data">

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

                            <h1 class="fs-5 text-center">Violation Level</h1>

 
                            <fieldset class="row mb-3">
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="level" id="level1" value="minor" onclick="showDiv(1)" checked>
                                <label class="form-check-label" for="level1">
                                    Minor Offense
                                </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="level" id="level2" value="major" onclick="showDiv(1)">
                                <label class="form-check-label" for="level2">
                                    Major Offense
                                </label>
                                </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="level" id="level" value="grievance" onclick="showDiv(2)">
                                <label class="form-check-label" for="level3">
                                    Grave Offense
                                </label>
                                </div>
                            </div>
                            </fieldset>
                            </div>

                            <br>
                            <div class="col-md-12 mb-2">
                            <div class="form-floating">
                            <input type="text" name="viol" class="form-control" id="viol_name floatingName" placeholder="Your Violation" required>
                            <label for="floatingName">Specify Violation</label>
                            </div>
                            </div>
                            
                            <hr>
                            
                            <div id="dutyDiv">
                                <h1 class="fs-5 text-center">Duty</h1>
                                <br>
                                
                         <div class="col-md-12 mb-2">
                        <h4 class="fs-6">Duty Selection</h4>
                                
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="duties[]" value="community service" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1" >Community Service</label>
                        </div>
                                
                        <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" name="duties[]" value="duty" id="gridCheck2">
                                                                <label class="form-check-label" for="gridCheck2" >
                                                                    Duty 2
                                                                </label>
                                                                </div>
                                
                                                            </div>
                                                            <br>
                            
                            <h4 class="fs-6">Duty Time</h4>
                            <div class="container text-center mb-2">
                            <div class="row align-items-center">

                                <div class="col">
                                <div class="form-floating duty_timeS">
                                <input type="time" name="duty_timeS" class="form-control" id="floatingName dutyTimeS" placeholder="duty_timeS" >
                                <label for="floatingName">Duty Time Start</label>
                                </div>  
                                </div>

                                <div class="col">
                                <div class="form-floating duty_timeE">
                                <input type="time" name="duty_timeE" class="form-control" id="floatingName dutyTimeE" placeholder="duty_timeE" >
                                <label for="floatingName">Duty Time End</label>
                                </div>  
                                </div>

                            </div>
                            </div>



                            <div class="col-md-12 mb-2">

                            <h4 class="fs-6">Duty Location</h4>

                            <div class="form-floating">
                                <input type="text" name="dutyLoc" class="form-control" id="floatingName" placeholder="location" >
                                <label for="floatingName">Specific Location</label>
                            </div>
                            </div>
                            <hr>   
                            </div>

  
                            <h1 class="fs-5 text-center">Evidence</h1>
                                <div class="mb-3">
                                    <!-- <div class="upload text-center">
                                            <img src="../assets/img/logo300.png" width = 100 height = 100 alt="" id="preImg">
                                        <div class="round">
                                        input type="file" name="image" class="form-control" placeholder="Enter Name" id="upload_file" "
                                            <input type="file" name="image" id="image" accept="image/*" required>
                                            <i class = "bi bi-camera-fill" style = "color: #fff;"></i>
                                        </div>
                                    </div> -->
                                    <div class="upload">
                                    <div id="img-div">
                                    <img src="../assets/img/logo300.png" id="img-preview" width = 100 height = 100 alt="">
                                    </div>
                                    <div class="rightRound" id = "upload">
                                    <input type="file" name="image" class="form-control" id = "image" accept=".jpg, .jpeg, .png" placeholder="Enter Name" id="upload_file" onchange="getImagePreview(event)">
                                    <!-- <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" onchange="getImagePreview(event)"> -->
                                    <i class = "bi bi-camera-fill"></i>
                                    </div>

                                    <div class="leftRound" id = "cancel" style = "display: none;">
                                    <i class = "fa fa-times"></i>
                                    </div>
                                    <div class="rightRound" id = "confirm" style = "display: none;">
                                    <input type="submit">
                                    <i class = "bi bi-check"></i>
                                    </div>
                                </div>
                                </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="sancUp">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>



<!-- SANCTION MODAL END -->


    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm</h5>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="delete-frm">
                            <input type="hidden" name="id">
                            <p>Are you sure to delete <b><span id="name"></span></b> from the list?</p>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" form="delete-frm">Yes</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->


<div class="container" id="table">
  <div class="row">
      <table id="myTable" class="table table-striped nowrap" style="width:100%">
      <div class="col-lg-auto">

      <thead id="thead">
          <tr class="has-text-light">
              <th>DATE</th>
              <th>ID NUMBER</th>
              <th>LAST NAME</th>
              <th>FIRST NAME</th>
              <th>MIDDLE NAME</th>
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


<script>
                   function showDiv(val){
                        if(val==1){
                          document.getElementById('dutyDiv').style.display='block';
                       }
                      if(val==2){
                         document.getElementById('dutyDiv').style.display='none';
                      }
                };
        </script>


<script type="text/javascript">
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
                            </script>




<!-- DATATABLE SCRIPT -->
<script>
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
                    data: 'complainant_first_name',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'complainant_middle_name',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'complainant_last_name',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
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
                    className: 'text-center action',
                    render: function(data, type, row, meta) {
                        console.log()
                        return '<a class="me-2 btn btn-sm rounded-0 mb-1 edit_data btn-primary" href="javascript:void(0)" data-id="' + (row.id) + '">Edit</a><a class="btn btn-sm rounded-0 mb-1 delete_data btn-danger" href="javascript:void(0)" data-id="' + (row.id) + '">Delete</a>';
                    }
                }
            ],
            responsive: {
                        details: {
                            display: $.fn.dataTable.Responsive.display.modal( {
                                header: function ( row ) {
                                    var data = row.data();
                                    return 'Details for '+data.last_name+' '+data.first_name;
                                }
                            } ),
                            renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                        }
                                            

                    },
            columnDefs: [
                        {
                            targets: 7,
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
                $('.delete_data').click(function() {
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
                                $('#delete_modal').find('input[name="id"]').val(resp.data['id'])
                                $('#delete_modal').modal('show')
                            } else {
                                alert("An error occurred while fetching single data")
                            }
                        }
                    })
                })
            },
            buttons: [{
                text: '<i class="bi bi-plus-lg me-2"></i>Add New',
                className: "btn btn-primary py-0 mb-2",
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

          $('#errorMessageSanction').addClass('d-none');

          alertify.set('notifier','position', 'bottom-right');
          alertify.success(res.message);
          
          $('#sanctionModal').modal('hide');
        //   $('#sanctionData')[0].reset();
          $('#sanctionData').get(0).reset()
          $('#sanctionModal button').attr('disabled', false)
          $('#sanctionModal button[id="sancUp"]').text("Submit")

          draw_data();


      }else if(res.status == 500) {
          alert(res.message);
      }
  }
});

});

 // DELETE Data
 $('#delete-frm').submit(function(e) {
        e.preventDefault()
        $('#delete_modal button').attr('disabled', true)
        $('#delete_modal button[form="delete-frm"]').text("deleting data ...")
        $.ajax({
            url: '../assets/php/p_deleteData.php',
            data: $(this).serialize(),
            method: 'POST',
            dataType: "json",
            error: err => {
                alert("An error occurred. Please check the source code and try again")
            },
            success: function(resp) {
                if (!!resp.status) {
                    if (resp.status == 'success') {
                        var _el = $('<div>')
                        _el.hide()
                        alertify.set('notifier','position', 'bottom-right');
                        alertify.success(resp.msg);
                        $('#delete-frm').get(0).reset()
                        $('.modal').modal('hide')
                        $('#msg').append(_el)
                        _el.show('slow')
                        draw_data();
                        setTimeout(() => {
                            _el.hide('slow')
                                .remove()
                        }, 2500)
                    } else if (resp.status == 'failed' && !!resp.msg) {
                        var _el = $('<div>')
                        _el.hide()
                        alertify.set('notifier','position', 'bottom-right');
                        alertify.success(resp.msg);
                        $('#delete-frm').append(_el)
                        _el.show('slow')
                    } else {
                        alert("An error occurred. Please check the source code and try again")
                    }
                } else {
                    alert("An error occurred. Please check the source code and try again")
                }

                $('#delete_modal button').attr('disabled', false)
                $('#delete_modal button[form="delete-frm"]').text("Yes")
            }
        })
    })

});//END TAG FOR DATA TABLES

 

</script>



</html>