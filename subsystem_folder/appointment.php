 

<?php include('../partials/head.php'); ?>


<!-- ======= Header ======= -->
<title>Appointment - PODMS</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

  <!-- End Sidebar-->
  <!-- <script>

  var x = document.getElementById('mod3')
  x.className = "active";

  var y = document.getElementById('pod')
  y.className = "nav-link ";

  var h = document.getElementById('components-nav')
  h.className = "nav-content collapse show";

  </script> -->

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
  <table id="appointTable" class="table table-striped" style="width:100%">
  <div class="col-lg-auto">

                  <thead class="has-text-light">
                      <tr>
                          <th data-priority="1">ID#</th>
                          <th >First Name</th>
                          <th >Middle Name</th>
                          <th >Last Name</th>
                          <th >Course</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th data-priority="2">ACTION</th>
                      </tr>
                  </thead>
                 
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
 var appointTable = '';
$(function() {
    // draw function [called if the database updates]
    function draw_data() {
        if ($.fn.dataTable.isDataTable('#appointTable') && appointTable != '') {
          appointTable.draw(true)
        } else {
            load_data();
        }
    }

    function load_data() {
      appointTable = $('#appointTable').DataTable({
            dom: '<"row"B>flr<"py-2 my-2"t>ip',
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "../assets/php/a_getData.php",
                method: 'POST'
            },
            columns: [
                {
                    data: 'complained_id_number',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'complained_first_name',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'complained_middle_name',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'complained_last_name',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'complained_course',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'description',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'status',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: null,
                    orderable: false,
                    className: 'text-center',
                    render: function(data, type, row, meta) {
                        console.log()
                        return '<a class="me-2 btn btn-sm rounded-0 mb-1 edit_data btn-primary" href="javascript:void(0)" data-id="' + (row.id) + '">Set an appointment</a><a class="btn btn-sm rounded-0 mb-1 delete_data btn-danger" href="javascript:void(0)" data-id="' + (row.id) + '">Delete</a>';
                    }
                }
            ],
            columnDefs: [
                        {
                            targets: 6,
                            render: function(data, type, row, meta) {
                                if (data == 1) {
                                    return '<p class="badge text-bg-danger text-wrap text-center"> For Appointment</p>';
                                } else if (data == 2) {
                                    return '<p class="badge text-bg-info text-wrap text-center">On duty</p>';
                                } else if (data == 3) {
                                    return '<p class="badge text-bg-success text-wrap text-center">Cleared</p>';
                                }else if (data == 4) {
                                    return '<p class="badge text-bg-primary text-wrap text-center">For Appointment</p>';
                                } else {
                                    return '<p class="badge text-bg-warning text-wrap text-center">Undefined Status</p>';
                                }
                            }
                        }
            ],
            drawCallback: function(settings) {
                $('.edit_data').click(function() {
                    $.ajax({
                        url: '../assets/php/a_getSingle.php',
                        data: { id: $(this).attr('data-id') },
                        method: 'POST',
                        dataType: 'json',
                        error: err => {
                            alert("An error occurred while fetching single data")
                        },
                        success: function(resp) {
                            if (!!resp.status) {
                                // Object.keys(resp.data).map(k => {

                                // })
                                $('#appointModal').find('input[name="id"]').val(resp.data['id'])

                               

                                $('#appointModal').modal('show')
                            } else {
                                alert("An error occurred while fetching single data")
                            }
                        }
                    })
                })
                $('.delete_data').click(function() {
                    $.ajax({
                        url: '../assets/php/a_getSingle.php',
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

    //UPDATE DATA

    $('#appointData').submit(function (e) {
e.preventDefault();

            $('#appointModal button').attr('disabled', true)
            $('#appointModal button[form="appointData"]').text("saving ...")
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
          
          alertify.set('notifier','position', 'bottom-right');
          alertify.success(res.message);
          
            $('#appointModal').modal('hide');
            $('#appointData')[0].reset();

            draw_data();



        }else if(res.status == 500) {
            alert(res.message);
        }
    }
});

});

//Delete DATA
        // DELETE Data
        $('#delete-frm').submit(function(e) {
        e.preventDefault()
        $('#delete_modal button').attr('disabled', true)
        $('#delete_modal button[form="delete-frm"]').text("deleting data ...")
        $.ajax({
            url: '../assets/php/a_deleteData.php',
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
    
});
</script>


<!-- <script>


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

</script> -->


</html>