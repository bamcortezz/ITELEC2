<?php
include_once 'config/setting-configuration.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="src/css/bootstrap.css">
   <link rel="stylesheet" href="src/js/bootstrap.js">
   <link rel="stylesheet" href="src/css/style.css">
</head>

<body>

   <div class="wrapper">
      <div class="container main">
         <div class="row">
            <div class="col-md-6 side-image">
               <img src="././src/img/side-pic.jpg" alt="">
            </div>
            <div class="col-md-6 right">
               <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                  <div class="input-box">
                     <h1>Login</h1>
                     <div class="input-field">
                        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                     </div>
                     <div class="input-field">
                        <input type="email" name="email" required class="form-control" placeholder="Enter Email">
                     </div>
                     <div class="input-field">
                        <input type="password" name="password" required class="form-control" placeholder="Enter Password">
                     </div>
                     <div class="input-field">
                        <button type="submit" name="btn-signin" class="submit">Sign in</button>
                     </div>
                     <div class="signin">
                        <span>Need to register? <a href="registration.php">Register here</a></span>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <!-- <section>
      <div class="container border" style="width: 600px;">
         <h1 class="text-center mb-3">Sign in</h1>
         <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <div class="form-group">
               <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
            </div>
            <div class="form-group">
               <input type="email" name="email" placeholder="Enter Email" required class="form-control">
            </div>
            <div class="form-group">
               <input type="password" name="password" placeholder="Enter Password" required class="form-control">
            </div>
            <div class="form-btn">
               <button type="submit" name="btn-signin" class="btn btn-primary">Sign in</button>
            </div>
         </form>
         <p>already have an account <a href="registration.php">sign up here</a></p>
      </div>

   </section> -->

</html>