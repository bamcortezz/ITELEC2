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
   <section>
   <div class="container border" style="width: 600px;">
         <h1 class="text-center mb-3">Registration</h1>
         <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <div class="form-group">
               <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
            </div>
            <div class="form-group">
               <input type="text" name="username" placeholder="Enter Username" required class="form-control">
            </div>
            <div class="form-group">
               <input type="email" name="email" placeholder="Enter Email" required class="form-control">
            </div>
            <div class="form-group">
               <input type="password" name="password" placeholder="Enter Password" required class="form-control">
            </div>
            <div class="form-btn">
               <button type="submit" name="btn-signup" class="btn btn-primary">Register</button>
            </div>
         </form>
      </div>

      
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
      </div>

   </section>

</html>