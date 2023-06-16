<?php include('../partials/head.php'); ?>




<!-- ======= Header ======= -->
<title>General List - PODMS</title>
<?php include('../partials/header.php'); ?>

<!-- End Header -->

<!-- ======= Sidebar ======= -->

<?php include('../partials/sidebar.php'); ?>

<!-- End Sidebar-->


<?php include('../partials/preloader.php'); ?>

<main id="main" class="main">



    <div class="pagetitle">
        <h1>General List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Forms/Slip & Reports</li>
                <li class="breadcrumb-item active">Student Call Slip</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <!-- MAIN CONTENT -->

    <!-- ENTRY PASS MODAL -->

    <div class="modal fade" id="f8" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ENTRY PASS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="errorMessage" class="alert alert-warning d-none"></div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="eSlip.php" method="POST" id="f8">
                            <input type="hidden" name="id" id="id">

                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" name="f8-reason" class="form-control" id="floatingName"
                                        placeholder="to" required>
                                    <label for="floatingName">Reason</label>
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


    <!-- POD-F3 MODAL -->

    <div class="modal fade" id="f3" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">REFERRAL SLIP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="errorMessage" class="alert alert-warning d-none"></div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="POST" action="rSlip.php" id="f3">
                            <input type="hidden" name="id" id="id">

                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="number" name="f3-age" class="form-control" id="floatingName"
                                        placeholder="Your Middle Name" required>
                                    <label for="floatingName">Age</label>
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <select class="form-select" name="f3-sex" id="attempt">
                                        <option value="" selected>Sex</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea2" name="f3-reason" style="height: 100px"></textarea>
                                    <label for="floatingName">Reason for Referral</label>
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" name="f3-reffto" class="form-control" id="floatingName"
                                        placeholder="Your Last Name" required>
                                    <label for="floatingName">Reffered to</label>
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

    <!-- POD-F6 MODAL -->

    <div class="modal fade" id="f6" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PARENT/GUARDIAN SLIP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="errorMessage" class="alert alert-warning d-none"></div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="POST" action="pSlip.php" id="f6">
                            <input type="hidden" name="id" id="id">

                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" name="f6-pname" class="form-control" id="floatingName"
                                        placeholder="Your Middle Name" required>
                                    <label for="floatingName">Parent/Guardian name</label>
                                </div>
                            </div>


                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="date" name="f6-date" class="form-control" id="floatingName"
                                        placeholder="Your Last Name" required>
                                    <label for="floatingName">Date</label>
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="time" name="f6-time" class="form-control" id="floatingName"
                                        placeholder="Your Last Name" required>
                                    <label for="floatingName">Time</label>
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


    <!-- POD-F5 MODAL -->

    <div class="modal fade" id="f5" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">ADMISSION SLIP (TARDY)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="errorMessage" class="alert alert-warning d-none"></div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form method="POST" action="tSlip.php" id="f5">
                            <input type="hidden" name="id" id="id">

                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" name="f5-subject" class="form-control" id="floatingName"
                                        placeholder="Your Middle Name" required>
                                    <label for="floatingName">Subject</label>
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="text" name="f5-teacher" class="form-control" id="floatingName"
                                        placeholder="Your Middle Name" required>
                                    <label for="floatingName">Teacher</label>
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <div class="form-floating">
                                    <input type="time" name="f5-time" class="form-control" id="floatingName"
                                        placeholder="Your Middle Name" required>
                                    <label for="floatingName">Time Arrived</label>
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


    <!-- Bordered Tabs Justified -->
    <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
        <li class="nav-item flex-fill" role="presentation">
            <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home"
                aria-selected="true">Student List</button>
        </li>
        <li class="nav-item flex-fill" role="presentation">
            <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile"
                aria-selected="false">Student Status</button>
        </li>
    </ul>

    <div class="tab-content pt-2" id="borderedTabJustifiedContent">
        <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">

            <br>
            <!-- TABLE -->
            <div class="container" id="table">
                <div class="row">
                    <div class="pagetitle">
                    </div>
                    <table id="myTable" class="table table-striped nowrap" style="width:100%">
                        <div class="col-lg-auto">



                            <thead>
                                <tr>
                                    <th>Student #</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Year</th>
                                    <th>Course</th>
                                    <th>Room</th>
                                    <th>Schedule</th>
                                    <th data-priority="1">Action</th>
                                </tr>
                            </thead>

                        </div>
                    </table>

                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="col-md-12" style="margin-top: 15px; display: none;" id="approvedTable"> </div>
            <div class="col-md-12" style="margin-top: 15px; display: none;" id="approvedMTable"> </div>

            <br>

            <!-- Claimed TABLE -->
            <div class="container" id="table">
                <div class="row">
                    <div class="pagetitle">
                    </div>
                    <table id="myTable2" class="table table-striped nowrap" style="width:100%">
                        <div class="col-lg-auto">



                            <thead>
                                <tr>
                                    <th class="text-center">Student #</th>
                                    <th class="text-center">Full Name</th>
                                    <th class="text-center">Year</th>
                                    <th class="text-center">Course</th>
                                    <th class="text-center">Section</th>
                                    <th class="text-center">Room</th>
                                    <th class="text-center">Schedule</th>
                                    <th class="text-center">Status</th>
                                    <th data-priority="1">Action</th>
                                </tr>
                            </thead>

                        </div>
                    </table>

                </div>
            </div>

        </div>
    </div><!-- End Bordered Tabs Justified -->










</main><!-- End #main -->



<!-- ======= Footer ======= -->

<?php include('../partials/footer.php'); ?>

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

        myTable1 = $('#myTable').DataTable({
            dom: 'flr<"py-2 my-2"t>ip',
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "../assets/php/s_list.php",
                method: 'POST'
            },
            columns: [{
                    data: 'stud_num',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'

                },
                {
                    data: 'lastname',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: 'firstname',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: 'middlename',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: 'year',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: 'course',
                    className: 'text-center text-uppercase word-wrap',
                    defaultValue: 'No data available'
                },
                {
                    data: 'room',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: 'sched',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: null,
                    orderable: false,
                    className: 'text-center text-uppercase word-wrap action <?= $limitation ?>',
                    render: function(data, type, row, meta) {
                        console.log()
                        return '<a class="me-2 btn btn-sm rounded-2 mb-1 call btn-info" href="javascript:void(0)" data-id="' +
                            (row.id) +
                            '">Call Student</a><a class="me-2 btn btn-sm rounded-2 mb-1 parent btn-info" href="javascript:void(0)" data-id="' +
                            (row.id) +
                            '">Call Parent</a><a class="me-2 btn btn-sm rounded-2 mb-1 refer btn-primary" href="javascript:void(0)" data-id="' +
                            (row.id) +
                            '">Refer</a><a class="me-2 btn btn-sm rounded-2 mb-1 tardy btn-secondary" href="javascript:void(0)" data-id="' +
                            (row.id) +
                            '">Tardy</a><a class="me-2 btn btn-sm rounded-2 mb-1 absent btn-danger" href="javascript:void(0)" data-id="' +
                            (row.id) +
                            '">Absent</a><a class="me-2 btn btn-sm rounded-2 mb-1 entry btn-warning" href="javascript:void(0)" data-id="' +
                            (row.id) + '">Entry</a>';
                    }
                }
            ],
            drawCallback: function(settings) {
                $('.call').click(function() {
                    $.ajax({
                        url: '../assets/php/s_list_getSingle.php',
                        data: {
                            id: $(this).attr('data-id')
                        },
                        method: 'POST',
                        dataType: 'json',
                        error: err => {
                            alert(
                                "An error occurred while fetching single data1"
                            )
                        },
                        success: function(resp) {
                            if (!!resp.status) {

                                $.ajax({
                                    url: '../assets/php/s_listUpdate.php',
                                    data: {
                                        id: resp.data.id,
                                        function: 'updateCall'
                                    },
                                    method: 'POST',
                                    dataType:'json',
                                    error: err=> {
                                        alert(
                                            "ERROR!!"
                                        )
                                    },
                                    success: function(response){
                                        if (!!response.status){
                                            window.location.href = 'cSlip.php?id=' + response.data.id;
                                            
                                        }else{
                                            alert("ERROR RESPONSE")
                                        }
                                    }
                                })
                            } else {
                                alert(
                                    "An error occurred while fetching single data2"
                                )
                            }
                        }
                    })

                })
                $('.parent').click(function() {
                    $.ajax({
                        url: '../assets/php/s_list_getSingle.php',
                        data: {
                            id: $(this).attr('data-id')
                        },
                        method: 'POST',
                        dataType: 'json',
                        error: err => {
                            alert(
                                "An error occurred while fetching single data"
                            )
                        },
                        success: function(resp) {
                            if (!!resp.status) {

                                $.ajax({
                                    url: '../assets/php/s_listUpdate.php',
                                    data: {
                                        id: resp.data.id,
                                        function: 'updateParent'
                                    },
                                    method: 'POST',
                                    dataType:'json',
                                    error: err=> {
                                        alert(
                                            "ERROR!!"
                                        )
                                    },
                                    success: function(response){
                                        if (!!response.status){
                                            console.log(response.data.id)
                                            $('#f6').find('input[name="id"]').val(resp
                                    .data[
                                        'id'])

                                $('#f6').modal('show')
                                        }else{
                                            alert("ERROR RESPONSE")
                                        }
                                    }
                                })
                                


                            } else {
                                alert(
                                    "An error occurred while fetching single data"
                                )
                            }
                        }
                    })
                })

                $('.refer').click(function() {
                    $.ajax({
                        url: '../assets/php/s_list_getSingle.php',
                        data: {
                            id: $(this).attr('data-id')
                        },
                        method: 'POST',
                        dataType: 'json',
                        error: err => {
                            alert(
                                "An error occurred while fetching single data"
                            )
                        },
                        success: function(resp) {
                            if (!!resp.status) {

                                $('#f3').find('input[name="id"]').val(resp
                                    .data[
                                        'id'])

                                $('#f3').modal('show')


                            } else {
                                alert(
                                    "An error occurred while fetching single data"
                                )
                            }
                        }
                    })
                })

                $('.tardy').click(function() {
                    $.ajax({
                        url: '../assets/php/s_list_getSingle.php',
                        data: {
                            id: $(this).attr('data-id')
                        },
                        method: 'POST',
                        dataType: 'json',
                        error: err => {
                            alert(
                                "An error occurred while fetching single data"
                            )
                        },
                        success: function(resp) {
                            if (!!resp.status) {

                                $('#f5').find('input[name="id"]').val(resp
                                    .data[
                                        'id'])

                                $('#f5').modal('show')


                            } else {
                                alert(
                                    "An error occurred while fetching single data"
                                )
                            }
                        }
                    })
                })

                $('.absent').click(function() {
                    let id = $(this).attr('data-id');

                    window.location.href = 'aSlip.php?id=' + id;
                })

                $('.entry').click(function() {
                    $.ajax({
                        url: '../assets/php/s_list_getSingle.php',
                        data: {
                            id: $(this).attr('data-id')
                        },
                        method: 'POST',
                        dataType: 'json',
                        error: err => {
                            alert(
                                "An error occurred while fetching single data"
                            )
                        },
                        success: function(resp) {
                            if (!!resp.status) {

                                $('#f8').find('input[name="id"]').val(resp
                                    .data[
                                        'id'])

                                $('#f8').modal('show')

                            } else {
                                alert(
                                    "An error occurred while fetching single data"
                                )
                            }
                        }
                    })
                })
            },
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Details for ' + data.firstname + ' ' + data
                                .lastname;
                        }
                    }),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                }


            },
            initComplete: function(settings) {
                $('.paginate_button').addClass('p-1')
            }
        });
    }
    //Load Data
    load_data()


});
</script>

<!-- TABLE 2 -->

<script>
var myTable2 = '';
$(function() {
    // draw function [called if the database updates]
    function draw_data() {
        if ($.fn.dataTable.isDataTable('#myTable2') && myTable2 != '') {
            myTable2.draw(true)
        } else {
            load_data();
        }
    }


    function load_data() {
        myTable2 = $('#myTable2').DataTable({
            dom: '<"row"B>flr<"py-2 my-2"t>ip',
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "../assets/php/s_stat.php",
                method: 'POST'
            },
            columns: [{
                    data: 'stud_num',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'

                },
                {
                    data: 'fullname',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'

                },
                {
                    data: 'year',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: 'course',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: 'section',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: 'room',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: 'sched',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: 'status',
                    className: 'text-center text-uppercase',
                    defaultValue: 'No data available'
                },
                {
                    data: null,
                    orderable: false,
                    className: 'text-center text-uppercase word-wrap action <?= $limitation ?>',
                    render: function(data, type, row, meta) {
                        console.log()
                        return '<a class="btn btn-md rounded-4 mb-1 p-2 px-6 clear_data btn-primary" href="javascript:void(0)" data-id="' +
                            (row.id) + '">Clear</a>';
                    }
                }
            ],
            drawCallback: function(settings) {
                $('.clear_data').click(function() {
                    $.ajax({
                        url: '../assets/php/clear_stat.php',
                        data: {
                            id: $(this).attr('data-id')
                        },
                        method: 'POST',
                        dataType: 'json',
                        error: err => {
                            alert(
                                "An error occurred while fetching single data"
                            )
                        },
                        success: function(resp) {
                            if (!!resp.status) {
                                draw_data();

                            } else {
                                alert(
                                    "An error occurred while fetching single data"
                                )
                            }
                        }
                    })
                })
            },
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Details for ' + data.firstname + ' ' + data
                                .lastname;
                        }
                    }),

                    renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                }

            },
            columnDefs: [{
                targets: 7,
                render: function(data, type, row, meta) {
                    if (data == 0) {
                        return '<p class="badge text-bg-info text-wrap text-center">Calling Student</p>';
                    } else if (data == 1) {
                        return '<p class="badge text-bg-info text-wrap text-center">Calling Parent</p>';
                    } else {
                        return '<p class="badge text-bg-warning text-wrap text-center">Undefined Status</p>';
                    }
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


});
</script>

</html>