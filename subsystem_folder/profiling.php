
  
 
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

            <div class="modal fade" id="add_modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
              <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Create Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div id="errorMessage" class="alert alert-warning d-none"></div>
                  <form id="addData" >
                  <div class="modal-body">
                  <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="number" name="idNum" class="form-control" id="floatingName" placeholder="Your Name">
                  <label for="floatingName">ID Number</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="fname" class="form-control" id="floatingName" placeholder="Your First Name">
                  <label for="floatingName">First Name</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="mname" class="form-control" id="floatingName" placeholder="Your Middle Name">
                  <label for="floatingName">Middle Name</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="lname" class="form-control" id="floatingName" placeholder="Your Last Name">
                  <label for="floatingName">Last Name</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="course" class="form-control" id="floatingName" placeholder="Your Email">
                  <label for="floatingName">Course</label>
                </div>
              </div>
              </div>
              <div class="text-center modal-footer">
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
                  </form>
                </div>
              </div>

                </div>
              
<!-- /ADD MODAL-->



<!-- Edit Modal -->
<div class="modal fade" id="edit_modal" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sanction</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="edit-frm" enctype="multipart/form-data">

                            <input type="hidden" name="id" id="id">


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
                                    <input class="form-check-input" type="checkbox" name="duties[]" value="community service" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1" required>
                                        Community Service
                                    </label>
                                    </div>

                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="duties[]" value="duty" id="gridCheck2">
                                    <label class="form-check-label" for="gridCheck2" required>
                                        Duty 2
                                    </label>
                                    </div>

                                </div>
                                </div>

                                <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" name="dutyLoc" class="form-control" id="floatingName" placeholder="location" required>
                                    <label for="floatingName">Specific Location</label>
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



                                    


                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="edit-frm">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->


    


<div class="container" id="table">
  <div class="row">
      <table id="myTable" class="table table-responsive" style="width:100%">
      <div class="col-lg-auto">

      <thead id="thead">
          <tr class="has-text-light">
              <th>DATE</th>
              <th data-priority="1">STUDENT NUMBER</th>
              <th>LAST NAME</th>
              <th>FIRST NAME</th>
              <th>MIDDLE NAME</th>
              <th>COURSE</th>
              <th>STATUS</th>

              <th data-priority="2">ACTION</th>
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
                    data: 'id_number',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'first_name',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'middle_name',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'last_name',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
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
                        return '<a class="me-2 btn btn-sm rounded-0 mb-1 edit_data btn-primary" href="javascript:void(0)" data-id="' + (row.id) + '">Edit</a><a class="btn btn-sm rounded-0 mb-1 delete_data btn-danger" href="javascript:void(0)" data-id="' + (row.id) + '">Delete</a>';
                    }
                }
            ],
            columnDefs: [
                        {
                            targets: 6,
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

                                $('#edit_modal').find('input[name="id"]').val(resp.data['id'])
      
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

   // Update Data
   $('#edit-frm').submit(function(e) {
            e.preventDefault()
            $('#edit_modal button').attr('disabled', true)
            $('#edit_modal button[form="edit-frm"]').text("saving ...")
            $.ajax({
                url: '../assets/php/p_dataUpdate.php',
                data: $(this).serialize(),
                method: 'POST',
                dataType: "json",
                error: err => {
                      alertify.set('notifier','position', 'bottom-right');
                      alertify.error('An error occurred. Please check the server-side code and try again');
                },
                success: function(resp) {
                    if (!!resp.status) {
                        if (resp.status == 'success') {
                            var _el = $('<div>')
                            alertify.set('notifier','position', 'bottom-left');
                            alertify.success(resp.msg);
                            $('#edit-frm').get(0).reset()
                            $('.modal').modal('hide')
                            draw_data();
                            setTimeout(() => {
                                _el.hide('slow')
                                    .remove()
                            }, 2500)
                        } else if (resp.status == 'success' && !!resp.msg) {
                            var _el = $('<div>')
                            _el.hide()
                            _el.addClass('alert alert-danger alert_msg form-group')
                            _el.text(resp.msg);
                            $('#edit-frm').append(_el)
                            _el.show('slow')
                        } else {
                            alert("An error occurred. Please check the source code and try again")
                        }
                    } else {
                        alert("An error occurred. Please check the source code and try again")
                    }

                    $('#edit_modal button').attr('disabled', false)
                    $('#edit_modal button[form="edit-frm"]').text("Save")
                }
            })
        })

});

  



</script>
<!-- <script>

      
      function showDiv(){
          document.getElementById('spec1').style.display='flex';
          document.getElementById('spec2').style.display='flex';
          document.getElementById('spec3').style.display='flex';


      }
      function hideDiv(){
          document.getElementById('spec1').style.display='none';
          document.getElementById('spec2').style.display='none';
          document.getElementById('spec3').style.display='none';

      }

      $(document).on('click', '#sancUp', function () {
          document.getElementById('spec1').style.display='none';
          document.getElementById('spec2').style.display='none';
          document.getElementById('spec3').style.display='none';

          });


/* by default hide all radio_content div elements except first element */
$(".content .radio_content").hide();
$(".content .radio_content:first-child").show();

/* when any radio element is clicked, Get the attribute value of that clicked radio element and show the radio_content div element which matches the attribute value and hide the remaining tab content div elements */
$(".radio_wrap").click(function(){
var current_radio = $(this).attr("data-radio");
$(".content .radio_content").hide();
$("."+current_radio).show();
})

</script>
<script>

 

$(document).ready(function(){
      $("#idNum").blur(function(){
          var idNum = $(this).val();

          $.ajax({
              url: "../assets/php/code.php",
              method : "POST",
              data: {idNum:idNum},
              datatype: "text",
              success:function(html){
                  
                  
                  var res = jQuery.parseJSON(response);
                  if(res.status == 422) {
                      $('#errorMessage').removeClass('d-none');
                      $('#errorMessage').text(res.message);


                  }
              }
          });
      });
  });

$(document).on('submit', '#addData', function (e) {
e.preventDefault();

var formData = new FormData(this);
formData.append("addData", true);

$.ajax({
type: "POST",
url: "../assets/php/code.php",
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
      
      
      
      alertify.set('notifier','position', 'bottom-left');
      alertify.success(res.message);
      
      $('#profilingTable').load(location.href + " #profilingTable");
      //  location.reload(true);


  }
  else if(res.status == 500) {
      alert(res.message);
  }
}
});

});


// -------------------------SANCTION-------------------------

$(document).on('click', '#sanctionBtn', function (e) {


var id = $(this).val();


$.ajax({
type: "GET",
url: "../assets/php/code.php?id=" + id,
success: function (response) {


  var res = jQuery.parseJSON(response);
  if(res.status == 404) {

      alert(res.message);
  }else if(res.status == 200){

      $('#id').val(res.data.id);

      $('#sanctionModal').modal('show');

  }

}
});
});

$(document).on('submit', '#sanctionData', function (e) {
e.preventDefault();



var formData = new FormData(this);
formData.append("sanctionData", true);

$.ajax({
  type: "POST",
  url: "../assets/php/code.php",
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

          // alertify.set('notifier','position', 'bottom-left');
          // alertify.success(res.message);
          
          $('#sanctionModal').modal('hide');
          $('#sanctionData')[0].reset();


          
          table.ajax.reload( null, false );
          // $('#head').load("profiling.php");
          // location.reload(true);



      }else if(res.status == 500) {
          alert(res.message);
      }
  }
});

});


</script> -->


</html>