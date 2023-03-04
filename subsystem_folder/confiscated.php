
  
 
 <?php include('../partials/head.php'); ?>

 


<!-- ======= Header ======= -->
<title>Confiscated - PODMS</title>
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
    <h1>Confiscated</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item">Profiling</li>
        <li class="breadcrumb-item active">Confiscated</li>
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
                    className: 'text-center action',
                    render: function(data, type, row, meta) {
                        console.log()
                        if (data.status == 1){
                        return '<a class="btn btn-sm rounded mb-1 delete_data btn-primary" href="javascript:void(0)" data-id="' + (row.id) + '">Claimed</a>';
                            
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
                className: "btn btn-primary py-0 mb-2",
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

$(document).ready(function() {
  var table = $('#recordsTable').DataTable( {
      lengthChange: false,
      responsive: {
          details: {
              display: $.fn.dataTable.Responsive.display.modal( {
                  header: function ( row ) {
                      var data = row.data();
                      return 'Details for '+data[2]+ ' ' + data[3];
                  }
              } ),
              renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                  tableClass: 'table'
              } )
          }
      },    
      columnDefs: [ {
      className: 'dtr-control',
      orderable: false,
      targets:   -1
  } ],
  dom: 'Bfrtip',
  pagingType: 'simple',
  buttons: [
          'copy',
          {
              extend: 'pdfHtml5',
              customize: function ( doc ) {
                  doc.content.splice( 1, 0, {
                      margin: [ 0, 0, 0, 0 ],
                      alignment: 'center',
                      image: 'data:image/png;base64,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'
                  } );
              },
              messageTop: 'PDF created by Prefect of Discipline.',
              orientation: 'landscape',
              pageSize: 'A4',
              title: 'PODMS PDF'
          },
          {
              extend: 'excelHtml5',
              autoFilter: true,
              sheetName: 'Exported data',
              title: 'PODMS Excel'
          }, 
              'print',
           
      ]
  } );

  // Insert at the top left of the table
  table.buttons().container()
      .appendTo( $('div.column.is-half', table.table().container()).eq(0) );
} );



</script> -->

</html>