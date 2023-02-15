
 
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


    <div class="container" id="table">
    <div class="row">
        <table id="dutyTable" class="table table-striped nowrap" style="width:100%">
        <div class="col-lg-auto">
             <?php
             include "../assets/php/db_connect.php";
                 $query = "SELECT * FROM podms_duty";
                 $query_run = mysqli_query($conn, $query);
            ?>
        <thead id="thead">
            <tr class="has-text-light">
                <th>DATE</th>
                <th data-priority="1">STUDENT NUMBER</th>
                <th>LAST NAME</th>
                <th>FIRST NAME</th>
                <th>MIDDLE NAME</th>
                <th data-priority="2">DUTIES</th>
                <th data-priority="3">STATUS</th>

                <th data-priority="4">ACTION</th>
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
                        <td><?= $row['inci_date'] ?></td>
                        <td><?= $row['id_number'] ?></td>
                        <td><?= strtoupper($row['last_name']) ?></td>
                        <td><?= strtoupper($row['first_name'])  ?></td>
                        <td><?= strtoupper($row['middle_name']) ?></td>
                        <td><?= strtoupper($row['duty']) ?></td>
                        <td><?php if ($row['status']==1){
                                echo '<p class="badge text-bg-danger">FOR INVESTIGATION</p>';
                            }elseif ($row['status']==2){
                                echo '<p class="badge text-bg-info">ON DUTY</p>';
                            }else{
                                echo '<p class="badge text-bg-warning">UNDEFINED STATUS!</p>';
                            }
                            ?>
                        </td>
                        <td>
                        <button type="button" value="<?=$row['id'];?>" class="btn btn-secondary btn-sm" id="clearBtn">Clear</button>
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
    $('#dutyTable').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+ data[1] + ' ' + data[3];
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
    } ]
    } );
} );

</script>

</html>