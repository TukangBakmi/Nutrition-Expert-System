<?php
    session_start();
    include('_dbConfig/dbConfig.php');
    if(isset($_SESSION['userId'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html translate="no">
<head>
  <title>Nutrition Expert System</title>
  <link rel="icon" href="img/_logoCircle.png">
  <?php include 'framework/bootstrap.php'?>
</head>
<body>
    <?php include 'navbar.php' ?>
    <link rel="stylesheet" href="css/admin.css">
    <div class="login" data-aos="fade-up" data-aos-duration="2400">
        <div class="box">
            <span></span>
            <div class="content">
                <h2 class="my-4">Login Admin</h2>
                <form autocomplete="on" method="POST" id="formLoginAdmin">
                    <div class="row my-5">
                        <label id="emailLabel" class="input-label col-4">Email: </label>
                        <input id="email" name="email" type="email" class="input-text col-8" required>
                    </div>
                    <div class="row my-5">
                        <label id="passwordLabel" class="input-label col-4">Password: </label>
                        <input id="password" name="password" type="password" class="input-text col-8" required>
                    </div>
                    <div class="row">
                        <button id="adm_btnBack" class="btn btn-danger">Back</button>
                        <button id="adm_btnLogin" type="button" class="btn btn-primary">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>