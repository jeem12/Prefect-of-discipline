
 
 <?php include('../partials/head.php'); ?>


<!-- ======= Header ======= -->
<title>Duty - PODMS</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->


<!-- <div class="preloader-wrapper">
  <img src="../assets/img/logo300.png" alt="Preloader Logo">
  <div class="text-center">
<div class="spinner-border text-light" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</div>
</div> -->

<script>

var x = document.getElementById('mod2')
x.className = "active";

var y = document.getElementById('pod')
y.className = "nav-link ";

var h = document.getElementById('components-nav')
h.className = "nav-content collapse show";

</script>

<main id="main" class="main">

<div class="pagetitle">
      <h1>Duty</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Profiling</li>
          <li class="breadcrumb-item active">Duty</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


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
                            <p>Are you sure you want to complete <b><span id="name"></span></b> from the list?</p>
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

      <thead id="thead">
          <tr class="has-text-light">
                <th data-priority="1">ID NUMBER</th>
                <th>LAST NAME</th>
                <th>FIRST NAME</th>
                <th>MIDDLE NAME</th>
                <th>COURSE</th>
                <th>SECTION</th>
                <th>DUTIES</th>
                <th>DUTY START</th>
                <th>DUTY END</th>
                <th>DUTY LOCATION</th>
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
                url: "../assets/php/d_getData.php",
                method: 'POST'
            },
            columns: [
                {
                    data: 'complained_id_number',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'complained_last_name',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'complained_first_name',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'complained_middle_name',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'complained_section',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'complained_course',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'duties',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'duty_start',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'duty_end',
                    className: 'text-center',
                    defaultContent: 'No Data Available'
                },
                {
                    data: 'duty_location',
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
                        return '<a class="btn btn-sm rounded-0 mb-1 delete_data btn-primary" href="javascript:void(0)" data-id="' + (row.id) + '">Complete Duty</a>';
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
                // { responsivePriority: 1, targets: 9 },
                        {
                            targets: 10,
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
                        },
                        {
                            className: 'dtr-control',
                            orderable: false,
                            targets:   -1
                        }


            ],
            drawCallback: function(settings) {
                $('.delete_data').click(function() {
                    $.ajax({
                        url: '../assets/php/d_getSingle.php',
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

        // DELETE Data
        $('#delete-frm').submit(function(e) {
        e.preventDefault()
        $('#delete_modal button').attr('disabled', true)
        $('#delete_modal button[form="delete-frm"]').text("Completing Duty ...")
        $.ajax({
            url: '../assets/php/d_dataUpdate.php',
            data: $(this).serialize(),
            method: 'POST',
            dataType: "json",
            error: err => {
                alert("An error occurred. Please check the source code and try again")
                $('#delete_modal button').attr('disabled', false)
                $('#delete_modal button[form="delete-frm"]').text("Yes")
                $('.modal').modal('hide')
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
                        $('#delete_modal button').attr('disabled', false)
                        $('#delete_modal button[form="delete-frm"]').text("Yes")
                        $('.modal').modal('hide')
                    }
                } else {
                    alert("An error occurred. Please check the source code and try again")
                    $('#delete_modal button').attr('disabled', false)
                    $('#delete_modal button[form="delete-frm"]').text("Yes")
                    $('.modal').modal('hide')
                }

                $('#delete_modal button').attr('disabled', false)
                $('#delete_modal button[form="delete-frm"]').text("Yes")
            }
        })
    })


    

});//END TAG FOR DATA TABLES


</script>

</html>