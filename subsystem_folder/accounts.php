
  
 
 <?php include('../partials/head.php'); ?>

 


<!-- ======= Header ======= -->
<title>Accounts - PODMS</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

  <!-- End Sidebar-->



<div class="preloader-container">
  <div class="logo-container">
    <img src="../assets/img/logo300.png" alt="Your Logo">
  </div>
  <!-- <div class="preloader-text">Loading...</div> -->
</div>
<main id="main" class="main" >



<div class="pagetitle">
    <h1>Accounts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active">Accounts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->



  <!-- MAIN CONTENT -->

  <!-- ADD MODAL -->

  <div class="modal fade" id="addModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
              <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Add Users</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div id="errorMessage" class="alert alert-warning d-none"></div>
                  <div class="modal-body">
                      <div class="container-fluid">
                      <form id="addUser" >

                      <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name" required>
                  <label for="floatingName">Name</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="uname" class="form-control" id="floatingName" placeholder="Your First Name" required>
                  <label for="floatingName">Username</label>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="form-floating">
                  <input type="text" name="pass" class="form-control" id="floatingName" placeholder="Your Middle Name" required>
                  <label for="floatingName">Password</label>
                </div>
              </div>


              <div class="col-md-12 mb-2">

                    <select class="form-select" name="position" aria-label="Default select example" required>
                      <option value="" disabled selected>Please Select Position</option>
                      <option value="admin">ADMIN</option>
                      <option value="staff">STAFF</option>
                    </select>
                  </div>

              </div>
                  </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary me-2" id="addUser">Submit</button>
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
                            <p>Are you sure to delete <b><span id="name" value=""></span></b> from the list?</p>
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
                              <th>NAME</th>
                              <th>USERNAME</th>
                              <th>PASSWORD</th>
                              <th>POSITION</th>
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
              url: "../assets/php/u_getData.php",
              method: 'POST'
          },
          columns: [
              {
                  data: 'name',
                  className: 'text-center',
                  defaultValue: 'No data available'

              },
              {
                  data: 'username',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
              {
                  data: 'pass',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
              {
                  data: 'position',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
              {
                    data: null,
                    orderable: false,
                    className: 'text-center',
                    render: function(data, type, row, meta) {
                        console.log()
                        return '<a class="btn btn-sm rounded-0 mb-1 delete_data btn-danger" href="javascript:void(0)" data-id="' + (row.id) + '">Delete User</a>';
                    }
                }
          ],
          responsive: {
                  details: {
                          display: $.fn.dataTable.Responsive.display.modal( {
                                  header: function ( row ) {
                                      var data = row.data();
                                      return 'Details for '+data.first_name+' '+data.last_name;
                                  }
                              } ),
                  renderer: function ( api, rowIdx, columns ) {
                      var data = $.map( columns, function ( col, i ) {
                          return col.hidden ?
                              '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                                  '<td>'+col.title+':'+'</td> '+
                                  '<td>'+col.data+'</td>'+
                              '</tr>' :
                              '';
                      } ).join('');
      
                      return data ?
                          $('<table/>').append( data ) :
                          false;
                      }
              }
          },
          drawCallback: function(settings) {
            $('.delete_data').click(function() {
                    $.ajax({
                        url: '../assets/php/u_getSingle.php',
                        data: { id: $(this).attr('data-id') },
                        method: 'POST',
                        dataType: 'json',
                        error: err => {
                            alert("An error occurred while fetching single data")
                        },
                        success: function(resp) {
                            if (!!resp.status) {
                                $('#delete_modal').find('input[name="id"]').val(resp.data['id'])
                                $('#delete_modal span[value=""]').text(resp.data.name)
                                $('#delete_modal').modal('show')
                            } else {
                                alert("An error occurred while fetching single data")
                            }
                        }
                    })
                })
          },
          buttons: [{
                text: '<i class="bi bi-plus-lg me-2"></i>Add Users',
                className: "button is-dark py-0 mb-2",
                action: function(e, dt, node, config) {
                    $('#addModal').modal('show')
                }
            }],
          "order": [
              [0, "asc"]
          ],
          initComplete: function(settings) {
              $('.paginate_button').addClass('p-1')
          }
      });
  }
  //Load Data
  load_data()

     //Saving new Data
     $('#addUser').submit(function (e) {
            e.preventDefault();

                        $('#addModal button').attr('disabled', true)
                        $('#addModal button[id="addUser"]').text("Adding ...")

                    var formData = new FormData(this);
                    formData.append("addUser", true);

                    $.ajax({
                    type: "POST",
                    url: "../assets/php/u_saveData.php",
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
                                
                                $('#addModal').modal('hide');
                                //   $('#sanctionData')[0].reset();
                                $('#addUser').get(0).reset()
                                $('#addModal button').attr('disabled', false)
                                $('#addModal button[id="addUser"]').text("Submit")

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
        $('#delete_modal button[form="delete-frm"]').text("Deleting data ...")
        $.ajax({
            url: '../assets/php/u_deleteData.php',
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


</html>