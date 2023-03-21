
  
 
 <?php include('../partials/head.php'); ?>

 


<!-- ======= Header ======= -->
<title>Confiscation - PODMS</title>
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
    <h1>Confiscation</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item">Profiling</li>
        <li class="breadcrumb-item active">Confiscation</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->



  <!-- MAIN CONTENT -->

  <!-- ADD MODAL -->

  <div class="modal fade" id="addModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
              <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Create Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div id="errorMessage" class="alert alert-warning d-none"></div>
                  <div class="modal-body">
                      <div class="container-fluid">
                      <form id="addData" >

                  <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="number" name="idNum" class="form-control" id="floatingName" placeholder="Your Name" required>
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
                  <input type="text" name="section" class="form-control" id="floatingName" placeholder="Your Course" required>
                  <label for="floatingName">Section</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="course" class="form-control" id="floatingName" placeholder="Your Course" required>
                  <label for="floatingName">Course</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="item_name" class="form-control" id="floatingName" placeholder="Your Item Name" required>
                  <label for="floatingName">Item Name</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="item_desc" class="form-control" id="floatingName" placeholder="Your Item Description">
                  <label for="floatingName">Item Description</label>
                </div>
              </div>

              <div class="col-md-12 mb-2">

            <select class="form-select" name="choice" aria-label="Default select example" required>
            <option value="" disabled selected>Please Select Options</option>
            <option value="1">Claimable</option>
            <option value="2">Not Claimable</option>
            </select>
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
                            <p>Are you sure you want claim <b><span id="name" value=""></span></b> item?</p>
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
      <table id="myTable" class="table table-striped nowrap" style="width:100%">
      <div class="col-lg-auto">

                      <thead>
                          <tr>
                              <th>FULLNAME</th>
                              <th>SECTION</th>
                              <th>COURSE / STRAND</th>
                              <th>ITEM NAME</th>
                              <th>ITEM DESCRIPTION</th>
                              <th data-priority="2">STATUS</th>
                              <th data-priority="1">ACTION</th>
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
              url: "../assets/php/c_getData.php",
              method: 'POST'
          },
          columns: [
              {
                  data: 'fullname',
                  className: 'text-center',
                  defaultValue: 'No data available'

              },
              {
                  data: 'section',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
              {
                  data: 'course',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
              {
                  data: 'item_name',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
              {
                  data: 'item_desc',
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
                    className: 'text-center action <?= $limitation?>',
                    render: function(data, type, row, meta) {
                        console.log()
                        if (data.status == 1){
                        return '<a class="btn btn-sm rounded-2 mb-1 delete_data btn-primary" href="javascript:void(0)" data-id="' + (row.id) + '">Claimed</a>';
                            
                         }else{
                            return '<p></p> '
                         }
                    }
                   
            }
          ],
          responsive: {
                        details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                        header: function ( row ) {
                                            var data = row.data();
                                            return 'Details for '+data.last_name+', '+data.first_name;
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
                                  return '<p class="badge text-bg-success text-wrap text-center"> Claimable</p>';
                              } else if (data == 2) {
                                  return '<p class="badge text-bg-danger text-wrap text-center">Unclaimable</p>';
                              } else {
                                  return '<p class="badge text-bg-warning text-wrap text-center">Undefined Status</p>';
                              }
                          }
                      }
          ],
          drawCallback: function(settings) {
            $('.delete_data').click(function() {
                    $.ajax({
                        url: '../assets/php/c_getSingle.php',
                        data: { id: $(this).attr('data-id') },
                        method: 'POST',
                        dataType: 'json',
                        error: err => {
                            alert("An error occurred while fetching single data")
                        },
                        success: function(resp) {
                            if (!!resp.status) {
                                $('#delete_modal').find('input[name="id"]').val(resp.data['id'])
                                $('#delete_modal span[value=""]').text(resp.data.first_name+ " " +resp.data.last_name)
                                $('#delete_modal').modal('show')
                            } else {
                                alert("An error occurred while fetching single data")
                            }
                        }
                    })
                })
          },
          buttons: [{
                text: '<i class="bi bi-plus-lg me-2"></i>Add Confiscated Item',
                className: "button is-dark py-0 mb-2",
                action: function(e, dt, node, config) {
                    $('#addModal').modal('show')
                }
            }],
          "order": [
              [6, "asc"]
          ],
          initComplete: function(settings) {
              $('.paginate_button').addClass('p-1')
          }
      });
  }
  //Load Data
  load_data()


        //add data
  $('#addData').submit(function (e) {
                e.preventDefault();
                            $('#addModal button').attr('disabled', true)
                            $('#addModal button[form="addData"]').text("saving ...")
                var formData = new FormData(this);
                formData.append("addData", true);

                $.ajax({
                type: "POST",
                url: "../assets/php/c_saveData.php",
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

                    $('#addModal button').attr('disabled', false)
                    $('#addModal button[form="addData"]').text("Submit")
                    
                    
                    
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

      // DELETE Data
      $('#delete-frm').submit(function(e) {
        e.preventDefault()
        $('#delete_modal button').attr('disabled', true)
        $('#delete_modal button[form="delete-frm"]').text("Deleting data ...")
        $.ajax({
            url: '../assets/php/c_deleteData.php',
            data: $(this).serialize(),
            method: 'POST',
            dataType: "json",
            error: err => {
                alert("An error occurred. Please check the source code and try again")
            },
            success: function(resp) {
                if (!!resp.status) {
                    if (resp.status == 'success') {
                        alertify.set('notifier','position', 'bottom-right');
                        alertify.success(resp.msg);
                        $('#delete-frm').get(0).reset()
                        $('.modal').modal('hide')
                        draw_data();
                    } else if (resp.status == 'failed' && !!resp.msg) {
                        alertify.set('notifier','position', 'bottom-right');
                        alertify.error(resp.msg);
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