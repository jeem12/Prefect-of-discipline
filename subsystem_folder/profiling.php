
  
 
 <?php include('../partials/head.php'); ?>

 


  <!-- ======= Header ======= -->
  <title>Profiling - PODMS</title>
  <?php include('../partials/header.php'); ?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('../partials/sidebar.php'); ?>

    <!-- End Sidebar-->


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



<!-- <button id="addModal" class="btn btn-primary">Show Table on Modal</button> -->


<!-- <button type="button" class="modal-button btn btn-primary btn-sm" title="ADD REPORT" id="addModal"><i class="bi bi-plus me-2 " ></i>ADD RECORD</button> -->

 <!-- Vertically centered Modal -->

              <div class="modal fade" id="addModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
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
                
<!-- End Vertically centered Modal-->



<!-- SANCTION MODAL START -->

<div class="modal fade" id="sanctionModal" data-bs-backdrop="static"  tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Sanctions</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<form id="sanctionData">
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
                                <input type="file">
                                <i class = "fa fa-upload" style = "color: #fff;"></i>
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
</div>

<!-- SANCTION MODAL END -->

<div class="container" id="table">
    <div class="row">
        <table id="profilingTable" class="table table-striped nowrap" style="width:100%">
        <div class="col-lg-auto">
             <?php
             include "../assets/php/db_connect.php";
                 $query = "SELECT * FROM podms_profiling";
                 $query_run = mysqli_query($conn, $query);
            ?>
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
        <tbody class="table-warning" >
            <?php

            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $row)
                {
                    ?>
                    <tr id="<?=$row['id'];?>">
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['id_number'] ?></td>
                        <td><?= strtoupper($row['last_name']) ?></td>
                        <td><?= strtoupper($row['first_name'])  ?></td>
                        <td><?= strtoupper($row['middle_name']) ?></td>
                        <td><?= strtoupper($row['course']) ?></td>
                        <td><?php if ($row['status']==1){
                                echo '<p class="badge text-bg-danger">FOR INVESTIGATION</p>';
                            }elseif ($row['status']==3){
                                echo '<p class="badge text-bg-success">CLEARED</p>';
                            }else{
                                echo '<p class="badge text-bg-warning">UNDEFINED STATUS!</p>';
                            }
                            ?>
                        </td>
                        <td>
                        <button type="button" value="<?=$row['id'];?>" class="btn btn-secondary btn-sm" id="sanctionBtn">Sanction</button>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            
        </tbody>
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

$(document).ready(function() {
    var table = $('#profilingTable').DataTable( {
        lengthChange: false,
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[2];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }, 
        buttons: [
            {
                text: '<i class="bi bi-plus me-2"></i>ADD RECORD',
                action: function ( e, dt, node, config ){
                  $('#addModal').modal('show') 
          }   
            },
        ],   
        columnDefs: [ {
        className: 'dtr-control',
        orderable: false,
        targets:   -1
    } ],
    pagingType: 'simple',
    dom: 'Bfrtip',
    } );
 
    // Insert at the top left of the table
    table.buttons().container()
        .appendTo( $('div.column.is-half', table.table().container()).eq(0) );
} );


        
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
        
        $('#head').load("profiling.php");
        
        alertify.set('notifier','position', 'bottom-left');
        alertify.success(res.message);
        
        
        // location.reload(true);


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


</script>


</html>