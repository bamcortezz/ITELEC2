<?php
require_once 'authentication/admin-class.php';

$admin = new ADMIN();

if (!$admin->isUserLoggedIn()) {
  $admin->redirect('../../');
}

$stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
$stmt->execute(array(":id" => $_SESSION['adminSession']));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../../src/css/bootstrap.css">
  <link rel="stylesheet" href="../../src/js/bootstrap.js">
</head>

<body>

  <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded w-100 ">
    <div class="container d-flex align-items-center justify-content-between">
      <div>
        <h1><?php echo $user_data['username'] ?></h1>
      </div>
      <div>
        <button class="btn btn-warning"><a href="authentication/admin-class.php?admin_signout" class="text-decoration-none text-black">Sign Out</a></button>
      </div>
    </div>
  </div>
  
</body>

</html>