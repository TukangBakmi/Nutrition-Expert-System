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
    <title>Login Admin | NCD</title>
    <link rel="icon" href="img/_logoCircle.png">
    <?php include 'framework/bootstrap.php'?>
</head>
<body>
    <?php include 'framework/navbar.php' ?>
    <link rel="stylesheet" href="css/admin.css">
    <div class="container login">
        <div class="box">
            <span></span>
            <div class="content">
                <h2 class="my-4">Login Admin</h2>
                <form autocomplete="on" method="POST" id="formLoginAdmin">
                    <div class="row my-5">
                        <label id="usernameLabel" class="input-label col-4">Username: </label>
                        <input id="username" name="username" type="text" class="input-text col-8" required>
                    </div>
                    <div class="row mt-5">
                        <label id="passwordLabel" class="input-label col-4">Password: </label>
                        <div class="col-8 nopadding text-start">
                            <input id="password" name="password" type="password" class="input-text w-100" required>
                            <div id="showPass">
                                <input type="checkbox" id="showPassword">
                                <label for="showPassword">Show Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="row my-5 justify-content-center">
                        <button id="adm_btnLogin" type="button" class="btn btn-primary w-50">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/admin.js"></script>
    <script>
        document.getElementById("home").classList.remove("active");
        document.getElementById("history").classList.remove("active");
        document.getElementById("about").classList.remove("active");
        document.getElementById("admin").classList.add("active");
    </script>
</body>
</html>