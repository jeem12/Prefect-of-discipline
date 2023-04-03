
  
 
 <?php include('../partials/head.php'); ?>


  <!-- ======= Header ======= -->
  <title>Reports - PODMS</title>
  <?php include('../partials/header.php'); ?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('../partials/sidebar.php'); ?>

    <!-- End Sidebar-->


    <?php include "../partials/preloader.php"?>

  <main id="main" class="main" >

  <div class="pagetitle">
      <h1>Reports</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Notification</li>
          <li class="breadcrumb-item active">Reports</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  

	<!-- MAIN CONTENT -->

    <div class="post-search-panel">
    <input type="text" id="searchInput" placeholder="Type keywords..." />
    <select id="sortBy">
    <option disabled>Select filter</option>
            <option value="bsba" >BSBA</option>
            <option value="bsit" >BSIT</option>
            <option value="BSTM" >BSTM</option>
            <option value="BSCRIM" >BSCRIM</option>
            <option value="BSOA" >BSOA</option>
    </select>
</div>

<div class="container" id="table">
    <div class="row">
        <table id="reportsTable" class="table table-striped nowrap" style="width:100%">
        <div class="col-lg-12">
                                        <?php
                                            include "../assets/php/db_connect.php";

                                            $query = "SELECT * FROM podms_reports ORDER BY `id` DESC";
                                            $query_run = mysqli_query($conn, $query);
                                        ?>
                        <thead class="has-text-light">
                            <tr>
                                <th data-priority="1">DATE</th>
                                <th>FROM</th>
                                <th>MESSAGE</th>
                                <th>DATE</th>

                            </tr>
                        </thead>
                        <tbody class="table-warning">
                            <?php

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                    ?>
                                    <tr id="<?=$row['id'];?>">

                                        <td><?= $row['date'] ?></td>
                                        <td><?= $row['from'] ?></td>
                                        <td><?= $row['content'] ?></td>
                                        <td>You discovered Livestamp.js <span data-livestamp="1677363130"></span>.</td>


                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>

                    </div>
                    </table>
    </div>
</div>

        </div>

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->

              <?php include ('../partials/footer.php'); ?>

  <!-- End Footer -->





  <!-- DATATABLE SCRIPT -->
  <script>

   
// $(document).ready(function() {
//     $('#reportsTable').DataTable( {
//       dom: '<"top"l>rt<"bottom"ip><"clear">',
//       fixedHeader: true,
//       "ordering": false,
//       "orderFixed": [ 3, 'dsc' ],
//         responsive: {
//             details: {
//                 display: $.fn.dataTable.Responsive.display.modal( {
//                     header: function ( row ) {
//                         var data = row.data();
//                         return 'Details for '+data[2];
//                     }
//                 } ),
//                 renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
//                     tableClass: 'table'
//                 } )
//             }
//         }
//     } );
// } );



// $(document).on('click', '#unreadNotif', function (e) {
// e.preventDefault();

// $.ajax({
//     type: "submit",
//     url: "../assets/php/data_status.php",
//     data: formData,
//     processData: false,
//     contentType: false,
//     success: function (response) {
        
//         var res = jQuery.parseJSON(response);
//         if(res.status == 422) {
//             $('#errorMessageSanction').removeClass('d-none');
//             $('#errorMessageSanction').text(res.message);

//         }else if(res.status == 200){

//             $('#errorMessageSanction').addClass('d-none');

//             alertify.set('notifier','position', 'bottom-left');
//             alertify.success(res.message);
            
//             $('#sanctionModal').modal('hide');
//             $('#sanctionData')[0].reset();

//             $('#head').load("#");
//             //location.reload(true);



//         }else if(res.status == 500) {
//             alert(res.message);
//         }
//     }
// });

// });
</script>


</html>