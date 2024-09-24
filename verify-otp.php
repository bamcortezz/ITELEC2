<?php
include_once 'config/setting-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify OTP</title>
  <link rel="stylesheet" href="src/css/bootstrap.css">
  <link rel="stylesheet" href="src/js/bootstrap.js">
</head>

<body>
  <div class="wrapper">
  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row">
      <div class="col-md shadow p-3 mb-5 bg-body-tertiary rounded p-5">

        <div class="text-center mb-3">
          <h1>Enter OTP</h1>
        </div>
        <form action="dashboard/admin/authentication/admin-class.php" method="post">
          <div class="input-box">

            <div class="form-group">
              <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
            </div>

            <div class="form-group">
              <input type="number" name="otp" placeholder="Enter OTP" required class="form-control"><br>
            </div>

            <div class="form-group">
              <button type="submit" name="btn-verify" class="btn btn-primary w-100">Verify</button>
            </div>

          </div>


        </form>

      </div>
    </div>
  </div>
</div>
</body>

</html>