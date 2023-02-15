
  
 
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

<!-- <div class="preloader-wrapper">

    <div class="text-center">
  <div class="spinner-border text-light" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
</div> -->

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


        <!-- Add Modal -->
        <div class="modal fade" id="add_modal" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Incident Report Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="new-frm">


                        <div class="col-md-12 mb-2">
                  <div class="form-floating">
                    <input type="number" name="idNum" class="form-control" id="floatingName" placeholder="id number" required>
                    <label for="floatingName">ID Number</label>
                  </div>
                </div>
                
                <div class="col-md-12 mb-2">
                  <div class="form-floating">
                    <input type="text" name="fname" class="form-control" id="floatingName" placeholder="Your First Name" required>
                    <label for="floatingName">First Name</label>
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <div class="form-floating">
                    <input type="text" name="mname" class="form-control" id="floatingName" placeholder="Your Middle Name" required>
                    <label for="floatingName">Middle Name</label>
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <div class="form-floating">
                    <input type="text" name="lname" class="form-control" id="floatingName" placeholder="Your Last Name" required>
                    <label for="floatingName">Last Name</label>
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <div class="form-floating">
                    <input type="text" name="course" class="form-control" id="floatingName" placeholder="Course" required>
                    <label for="floatingName">Course</label>
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <div class="form-floating">
                    <input type="text" name="inci_desc" class="form-control" id="floatingName" placeholder="Incident Description" required>
                    <label for="floatingName">Incident Description</label>
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <div class="form-floating">
                    <input type="date" name="inci_date" class="form-control" id="floatingName" placeholder="Incident Date" required>
                    <label for="floatingName">Incident Date</label>
                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <div class="form-floating">
                    <input type="time" name="inci_time" class="form-control" id="floatingName" placeholder="Your Email" required>
                    <label for="floatingName">Incident Time</label>
                  </div>
                </div>





     
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="new-frm">Add</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->

    <!-- SANCTION MODAL START -->

<!-- <div class="modal fade" id="sanctionModal" data-bs-backdrop="static"  tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Sanctions</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<form id="sanctionData" method="POST" enctype="multipart/form-data">
<div class="modal-body">
<div id="errorMessageSanction" class="alert alert-warning d-none"></div>

<input type="hidden" name="id" id="id" >

        <h1 class="fs-5 opacity-75">Offense</h1>

        <div class="wrapper_radio">
                <div class="radio_tabs">
                    <label class="radio_wrap" data-radio="radio_1" >
                            <input type="radio" name="offense" class="input" value="Minor" onclick="hideDiv()" checked>
                            <span class="radio_mark">
                                Minor
                            </span>
                        </label>
                    <label class="radio_wrap" data-radio="radio_2" >
                            <input type="radio" name="offense" class="input" value="Major" onclick="hideDiv()">
                            <span class="radio_mark">
                                Major
                            </span>
                        </label>
                    <label class="radio_wrap" data-radio="radio_3" >
                            <input type="radio" name="offense" class="input" value="Grave" onclick="hideDiv()">
                            <span class="radio_mark">
                                Grave
                            </span>
                        </label>
                </div>


                <div class="content">

                    <div class="radio_content radio_1">

                        <div class="content-wrapper">                    
                            <label class="option_item">
                        <input type="radio" class="checkbox" name="level" id="level" value="Minor Violation 1"  onclick="hideDiv()"
                        checked>
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Minor Violation 1</div>
                        </div>
                        </label>
                        <label class="option_item" >
                        <input type="radio" class="checkbox" name="level" id="level" value="Minor Violation 2" onclick="hideDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Minor Violation 2</div>
                        </div>
                    </label>
                    <label class="option_item" >
                        <input type="radio" class="checkbox" name="level" id="level" value="Minor Violation 3" onclick="hideDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Minor Violation 3</div>
                        </div>
                        </label>

                        <label class="option_item" >
                        <input type="radio" class="checkbox" name="level" id="opt" value="otherMinor" onclick="showDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Others: </div>
                        </div>
                        </label>

                    <div class="violForm" id="spec1" style="display: none;">
                    <input type="text" name="specifiedMinor" id="level" class="form-control form__input_viol" autocomplete="off" placeholder="specify"/>
                </div>

                    </div>

                    </div>

                    <div class="radio_content radio_2">
                     <div class="content-wrapper">                    
                            <label class="option_item">
                        <input type="radio" class="checkbox" name="level" id="level" value="Major Violation 1" onclick="hideDiv()" checked>
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Major Violation 1</div>
                        </div>
                        </label>
                        <label class="option_item">
                        <input type="radio" class="checkbox" name="level" id="level" value="Major Violation 2"  onclick="hideDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Major Violation 2</div>
                        </div>
                    </label>
                    <label class="option_item" >
                        <input type="radio" class="checkbox" name="level" id="level" value="Major Violation 3" onclick="hideDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Major Violation 3</div>
                        </div>
                        </label>

                        <label class="option_item" >
                        <input type="radio" class="checkbox" name="level" id="opt" value="otherMajor" onclick="showDiv()">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Others: </div>
                        </div>
                        </label>

                    <div class="violForm" id="spec2" style="display: none;">
                    <input type="text" name="specifiedMajor" id="level" class="form-control form__input_viol" autocomplete="off" placeholder="specify"/>
                </div>

            </div>
                    </div>

                    <div class="radio_content radio_3">

                     <div class="content-wrapper">                    
                            <label class="option_item" onclick="hideDiv()">
                        <input type="radio" class="checkbox" name="level" id="level" value="Grave Violation 1" >
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Grave Violation 1</div>
                        </div>
                        </label>
                        <label class="option_item" onclick="hideDiv()">
                        <input type="radio" class="checkbox" name="level" id="level" value="Grave Violation 2" >
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Grave Violation 2</div>
                        </div>
                    </label>
                    <label class="option_item" onclick="hideDiv()">
                        <input type="radio" class="checkbox" name="level" id="level" value="Grave Violation 3"
                        >
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Grave Violation 3</div>
                        </div>
                        </label>

                        <label class="option_item" onclick="showDiv()">
                        <input type="radio" class="checkbox" name="level" id="opt" value="otherGra">
                        <div class="option_inner minor">
                            <div class="tickmark"></div>
                            <div class="name">Others: </div>
                        </div>
                        </label>

                    <div class="violForm" id="spec3" style="display: none;">
                    <input type="text" name="specifiedGra" id="level" class="form-control form__input_viol" autocomplete="off" placeholder="specify"/>
                </div>

                    </div>
                    </div>
                </div>
                </div>
<hr>     
<h1 class="fs-5 opacity-75">Evidence</h1>
         <div class="mb-3">
         <div class="upload text-center">
      <img src="../assets/img/logo300.png" width = 100 height = 100 alt="">
      <div class="round">
        <input type="file" name="image" id="image">
        <i class = "bi bi-camera-fill" style = "color: #fff;"></i>
      </div>
    </div>
         </div>


</div>
<div class="modal-footer">
<button type="submit" class="btn btn-secondary" id="sancUp">Update</button>
</div>
</form>

</div>
</div>
</div> -->

<!-- SANCTION MODAL END -->

        <!-- Edit Modal -->
         <div class="modal fade" id="edit_modal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sanction Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="edit-frm" enctype="multipart/form-data">
                          <input type="hidden" name="id" id="id" >

                          <h1 class="fs-5 opacity-75">Violation Level</h1>
                                    <div class="col-sm-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="gridRadios1" value="minor" required>
                                        <label class="form-check-label" for="gridRadios1">
                                          Minor Offense
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="gridRadios2" value="major">
                                        <label class="form-check-label" for="gridRadios2">
                                          Major Offense
                                        </label>
                                      </div>
                                      <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="level" id="gridRadios" value="grave">
                                        <label class="form-check-label" for="gridRadios3">
                                          Grave Offense
                                        </label>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12 mb-2">
                                    <div class="form-floating">
                                      <input type="text" name="viol" class="form-control" id="floatingName" placeholder="Violation" required>
                                      <label for="floatingName">Violation</label>
                                  </div>
                              </div>


                          <hr>
                <h1 class="fs-5 opacity-75">Duty</h1>
                <br>
                
                <div class="col-md-12 mb-2">
                  <div class="form-floating mb-2 duty_timeS">
                    <input type="time" name="duty_timeS" class="form-control" id="floatingName dutyTimeS" placeholder="duty_timeS">
                    <label for="floatingName">Duty Time Start</label>
                  </div>
                  <div class="form-floating duty_timeE">
                    <input type="time" name="duty_timeE" class="form-control" id="floatingName dutyTimeE" placeholder="duty_timeE">
                    <label for="floatingName">Duty Time End</label>
     
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="duty[]" value="community service" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1" required>
                        Community Service
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="duty[]" value="duty" id="gridCheck2">
                      <label class="form-check-label" for="gridCheck2" required>
                        Duty 2
                      </label>
                    </div>

                  </div>
                </div>

                <div class="col-md-12 mb-2">
                  <div class="form-floating">
                    <input type="text" name="spec-loc" class="form-control" id="floatingName" placeholder="location" required>
                    <label for="floatingName">Specific Location</label>
                </div>
            </div>

            <hr>     
                <h1 class="fs-5 opacity-75">Evidence</h1>
                    <div class="mb-3">
                        <div class="upload text-center">
                                <img src="../assets/img/logo300.png" width = 100 height = 100 alt="">
                            <div class="round">
                                <input type="file" name="image" id="image" required>
                                <i class = "bi bi-camera-fill" style = "color: #fff;"></i>
                            </div>
                        </div>
                    </div>


                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="edit-frm">Save</button>

                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->


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


    <!-- TABLE -->
    <div class="container" id="table">
    <div class="row">
        <table id="myTable" class="table table-striped " style="width: 100%" >
        <div class="col-lg-auto">
                    <thead class="bg-secondary-subtle" >
                        <tr>
                            <th>DATE CREATED</th>
                            <th data-priority="1">STUDENT NUMBER</th>
                            <th>LAST NAME</th>
                            <th>FIRST NAME</th>
                            <th>MIDDLE NAME</th>
                            <th>COURSE</th>
                            <th data-priority="2">STATUS</th>

                            <th data-priority="3">ACTION</th>
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
                    className: 'text-center'
                },
                {
                    data: 'id_number',
                    className: 'text-center'
                },
                {
                    data: 'first_name',
                    className: 'text-center'
                },
                {
                    data: 'middle_name',
                    className: 'text-center'
                },
                {
                    data: 'last_name',
                    className: 'text-center'
                },
                {
                    data: 'course',
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
                    className: 'text-center',
                    render: function(data, type, row, meta) {
                        console.log()
                        return '<a class="me-2 btn btn-sm rounded-0 mb-1 sanction_data btn-primary" href="javascript:void(0)" data-id="' + (row.id) + '">Sanction</a><a class="btn btn-sm rounded-0 mb-1 delete_data btn-danger" href="javascript:void(0)" data-id="' + (row.id) + '">Delete</a>';
                    }
                }
            ],
            columnDefs: [
                { 
                    targets: 6,
                    render: function(data, type, row, meta){
                      if (data == 1){
                        return '<p class="badge text-bg-danger text-break">FOR INVESTIGATION</p>';
                        }else if(data == 3)
                        {
                            return '<p class="badge text-bg-success wrap-text">CLEARED</p>';
                        }else{
                            return '<p class="badge text-bg-warning ">UNDEFINED STATUS!</p>';
                          };
                        return data;
                    }
                }            
            ],        
            drawCallback: function(settings) {
                $('.sanction_data').click(function() {
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
                                $('#edit_modal').modal('show')
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
                            alert("An error occurred while fetching single data1")
                        },
                        success: function(resp) {
                            if (!!resp.status) {
                                $('#delete_modal').find('input[name="id"]').val(resp.data['id'])
                                $('#delete_modal').modal('show')
                            } else {
                                alert("An error occurred while fetching single data2")
                            }
                        }
                    })
                })
            },
            buttons: [{
                text: '<i class="bi bi-plus-lg me-2"></i>Add Record',
                className: "btn btn-primary py-0 mb-2",
                action: function(e, dt, node, config) {
                    $('#add_modal').modal('show')
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



        //Saving new Data
    $('#new-frm').submit(function(e) {
            e.preventDefault()
            $('#add_modal button').attr('disabled', true)
            $('#add_modal button[form="new-frm"]').text("saving ...")
            $.ajax({
                url: '../assets/php/p_saveData.php',
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
                            _el.addClass('alert alert-primary alert_msg')
                            _el.text("Data successfully saved");
                            $('#new-frm').get(0).reset()
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
                            _el.addClass('alert alert-danger alert_msg form-group')
                            _el.text(resp.msg);
                            $('#new-frm').append(_el)
                            _el.show('slow')
                        } else {
                            alert("An error occurred. Please check the source code and try again")
                        }
                    } else {
                        alert("An error occurred. Please check the source code and try again")
                    }

                    $('#add_modal button').attr('disabled', false)
                    $('#add_modal button[form="new-frm"]').text("Add")
                }
            })
        })


        $("#edit-frm").submit(function(e) {
  e.preventDefault();
  var formData = new FormData(this);
  
  $.ajax({
    url: '../assets/php/p_dataUpdate.php',
    type: 'POST',
    data: formData,
    error: err => {
                    alert("An error occurred. Please check the source code and try again1")
                },
    success: function(data) {
      data = JSON.parse(data);
      if (!!resp.status){
      if (data.status == "success") {
                             var _el = $('<div>')
                            _el.hide()
                            _el.addClass('alert alert-primary alert_msg')
                            _el.text("Data successfully updated");
                            $('#edit-frm').get(0).reset()
                            $('.modal').modal('hide')
                            $('#msg').append(_el)
                            _el.show('slow')
                            draw_data();
                            setTimeout(() => {
                                _el.hide('slow')
                                    .remove()
                            }, 2500)
      } else if (data == "failed"){
        var _el = $('<div>')
                            _el.hide()
                            _el.addClass('alert alert-danger alert_msg form-group')
                            _el.text(resp.msg);
                            $('#edit-frm').append(_el)
                            _el.show('slow')
      }else{
        alert("An error occurred. Please check the source code and try again2")
      }
      
    }else{
        alert("An error occurred. Please check the source code and try again3")
    }
                    $('#edit_modal button').attr('disabled', false)
                    $('#edit_modal button[form="edit-frm"]').text("Save")
    },
    cache: false,
    contentType: false,
    processData: false
  });
});
        
    //     // Update Data
    // $('#edit-frm').submit(function(e) {
    //         e.preventDefault()
    //         $('#edit_modal button').attr('disabled', true)
    //         $('#edit_modal button[form="edit-frm"]').text("saving ...")
    //         $.ajax({
    //             url: '../assets/php/update_data.php',
    //               type: "POST",
    //               data: formData,
    //               processData: false,
    //               contentType: false,
    //             error: err => {
    //                 alert("An error occurred. Please check the source code and try again1")
    //             },
    //             success: function(resp) {
    //                 if (!!resp.status) {
    //                     if (resp.status == 'success') {
    //                         var _el = $('<div>')
    //                         _el.hide()
    //                         _el.addClass('alert alert-primary alert_msg')
    //                         _el.text("Data successfully updated");
    //                         $('#edit-frm').get(0).reset()
    //                         $('.modal').modal('hide')
    //                         $('#msg').append(_el)
    //                         _el.show('slow')
    //                         draw_data();
    //                         setTimeout(() => {
    //                             _el.hide('slow')
    //                                 .remove()
    //                         }, 2500)
    //                     } else if (resp.status == 'success' && !!resp.msg) {
    //                         var _el = $('<div>')
    //                         _el.hide()
    //                         _el.addClass('alert alert-danger alert_msg form-group')
    //                         _el.text(resp.msg);
    //                         $('#edit-frm').append(_el)
    //                         _el.show('slow')
    //                     } else {
    //                         alert("An error occurred. Please check the source code and try again2")
    //                     }
    //                 } else {
    //                     alert("An error occurred. Please check the source code and try again3")
    //                 }

    //                 $('#edit_modal button').attr('disabled', false)
    //                 $('#edit_modal button[form="edit-frm"]').text("Save")
    //             }
    //         })
    //     })


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
                        alertify.set('notifier','position', 'bottom-left');
                        alertify.success(resp.msg);
                        $('#delete-frm').get(0).reset()
                        $('.modal').modal('hide')
                        _el.show('slow')
                        draw_data();
                        setTimeout(() => {
                            _el.hide('slow')
                                .remove()
                        }, 2500)
                    } else if (resp.status == 'failed' && !!resp.msg) {
                        var _el = $('<div>')
                        alertify.set('notifier','position', 'bottom-left');
                        alertify.error(resp.msg);
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
});
</script>
  


</html>