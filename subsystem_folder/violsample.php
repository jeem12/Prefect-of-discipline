
  
 
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

<table id="myTable">
    <thead>
        <tr>
            <th>Code</th>
            <th>Violation</th>
            <th>Sanction</th>
            <th>Category</th>
        </tr>
    </thead>



    <tbody>

        <tr>
            <td>
        <?php 
    include "../assets/php/db_connect.php"; 
    
    $query = "SELECT * FROM `podms_violation` WHERE `viol_category` = 'MINOR'";
    $result = mysqli_query($conn,$query);
    // Check if there are any rows returned
if ($result->num_rows > 0) {

    // Loop through each row and format the data
    while ($row = $result->fetch_assoc()) {
        
        // Format the data in the same way
        $formattedData = sprintf("%s: %s", $row['viol_num'], $row['viol_name']);

        // Output the formatted data
        echo $formattedData . "<br>";

        
    
    ?>

            <?php
        }
    }
        
        ?> </td>
            <td colspan="14" class="text-center">fsdsfs</td>
            <td>fsd</td>
        </tr>

    </tbody>


</table>

<!-- ======= Footer ======= -->

<?php include ('../partials/footer.php'); ?>

<!-- End Footer -->


</html>