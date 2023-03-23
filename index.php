<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMS - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">BCP * SMS</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form method="POST" action="assets/php/check_login.php" class="row g-3 needs-validation" novalidate>

                     <!-- ALERT -->
<?php if (isset($_GET['error'])) { ?>
    <?php if ($_GET['error'] === 'exceeded_attempts') {
        $wait_time = $_GET['wait_time'];
    ?>
        <div class="alert alert-danger" role="alert">
            You have exceeded the maximum number of login attempts. <br> <br> Please try again in <span id="countdown"><?=$wait_time?></span> seconds.
        </div>
    <?php } else { ?>
        <div class="alert alert-danger" role="alert">
            <?=$_GET['error']?>
        </div>
    <?php } ?>
<?php } ?>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="uname" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <!-- An element to toggle between password visibility -->
                    <div class="col-12">
                    <input type="checkbox" id="show" onclick="myFunction()"> Show Password
                    </div>
                    

                    <div class="col-12">
                      <button class="btn btn-primary w-100" id="submit-button" type="submit">Login</button>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                <a>Created for <strong>Prefect of Discipline</strong>.</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php include "partials/footer.php";?>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    var urlParams = new URLSearchParams(window.location.search);
    var waitTime = urlParams.get('wait_time');
    if (waitTime) {
        var countdown = waitTime;
        document.getElementById('submit-button').disabled = true;
        document.getElementById('yourUsername').disabled = true;
        document.getElementById('yourPassword').disabled = true;
        document.getElementById('show').disabled = true;

        var countdownInterval = setInterval(function() {
            document.getElementById('countdown').innerHTML = countdown;
            countdown--;

            if (countdown < 0) {
                clearInterval(countdownInterval);
                window.location.href = '../../index.php'; // replace with your login page URL
            }
        }, 1000);
        
    }
</script>

  <script>
    function myFunction() {
  var x = document.getElementById("yourPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>

</body>

</html>