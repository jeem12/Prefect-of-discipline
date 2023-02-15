
 
 <?php include('../partials/head.php'); ?>


<!-- ======= Header ======= -->
<title>Violation - PODMS</title>
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


        <!-- Add Modal -->
        <div class="modal fade" id="add_modal" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Violation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="new-frm">
                            <div class="form-group">
                                <label for="viol_name" class="control-label">Violation Name</label>
                                <input type="text" class="form-control rounded-0" id="viol_name" name="viol_name" required>
                            </div>
                            <div class="form-group">
                                <label for="first_off" class="control-label">First Offense</label>
                                <input type="text" class="form-control rounded-0" id="first_off" name="first_off" required>
                            </div>
                            <div class="form-group">
                                <label for="second_off" class="control-label">Second Offense</label>
                                <input type="text" class="form-control rounded-0" id="second_off" name="second_off" required>
                            </div>
                            <div class="form-group">
                                <label for="third_off" class="control-label">Third Offense</label>
                                <input type="text" class="form-control rounded-0" id="third_off" name="third_off" required>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="new-frm">Add</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->

    <!-- Edit Modal -->
    <div class="modal fade" id="edit_modal" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Violation Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="" id="edit-frm">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="viol_name" class="control-label">Violation Name</label>
                                <input type="text" class="form-control rounded-0" id="viol_name" name="viol_name" required>
                            </div>
                            <div class="form-group">
                                <label for="first_off" class="control-label">First Offense</label>
                                <input type="text" class="form-control rounded-0" id="first_off" name="first_off" required>
                            </div>
                            <div class="form-group">
                                <label for="second_off" class="control-label">Second Offense</label>
                                <input type="text" class="form-control rounded-0" id="second_off" name="second_off" required>
                            </div>
                            <div class="form-group">
                                <label for="third_off" class="control-label">Third Offense</label>
                                <input type="text" class="form-control rounded-0" id="third_off" name="third_off" required>
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
        <table id="myTable" class="table table-striped " style="width: 100%;" >
        <div class="col-lg-auto">
                    <thead class="bg-secondary-subtle" >
                        <tr>
                            <th>Violation Name</th>
                            <th>First Offense</th>
                            <th>Second Offense</th>
                            <th>Third Offense</th>
                            <th>Action</th>
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
                url: "../assets/php/get_data.php",
                method: 'POST'
            },
            columns: [
                {
                    data: 'viol_name',
                    className: 'text-center'
                },
                {
                    data: 'viol_first_off',
                    className: 'text-center'
                },
                {
                    data: 'viol_sec_off',
                    className: 'text-center'
                },
                {
                    data: 'viol_third_off',
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
            drawCallback: function(settings) {
                $('.edit_data').click(function() {
                    $.ajax({
                        url: '../assets/php/get_single.php',
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
                                $('#edit_modal').find('input[name="id"]').val(resp.data['id'])

                                $('#edit_modal').find('input[name="viol_name"]').val(resp.data['viol_name'])
                                $('#edit_modal').find('input[name="first_off"]').val(resp.data['viol_first_off'])
                                $('#edit_modal').find('input[name="second_off"]').val(resp.data['viol_sec_off'])
                                $('#edit_modal').find('input[name="third_off"]').val(resp.data['viol_third_off'])

                                $('#edit_modal').modal('show')
                            } else {
                                alert("An error occurred while fetching single data")
                            }
                        }
                    })
                })
                $('.delete_data').click(function() {
                    $.ajax({
                        url: '../assets/php/get_single.php',
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
        //Saving new Data
    $('#new-frm').submit(function(e) {
            e.preventDefault()
            $('#add_modal button').attr('disabled', true)
            $('#add_modal button[form="new-frm"]').text("saving ...")
            $.ajax({
                url: '../assets/php/save_data.php',
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
                        } else if (resp.status == 'success' && !!resp.msg) {
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
        // Update Data
    $('#edit-frm').submit(function(e) {
            e.preventDefault()
            $('#edit_modal button').attr('disabled', true)
            $('#edit_modal button[form="edit-frm"]').text("saving ...")
            $.ajax({
                url: '../assets/php/update_data.php',
                data: $(this).serialize(),
                method: 'POST',
                dataType: "json",
                error: err => {
                    alert("An error occurred. Please check the server-side code and try again")
                },
                success: function(resp) {
                    if (!!resp.status) {
                        if (resp.status == 'success') {
                            var _el = $('<div>')
                            alertify.set('notifier','position', 'bottom-right');
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
        // DELETE Data
    $('#delete-frm').submit(function(e) {
        e.preventDefault()
        $('#delete_modal button').attr('disabled', true)
        $('#delete_modal button[form="delete-frm"]').text("deleting data ...")
        $.ajax({
            url: '../assets/php/delete_data.php',
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
