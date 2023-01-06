<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>Tentang Kami | NCD</title>
  <link rel="icon" href="img/_logoCircle.png">
  <?php include 'framework/bootstrap.php'?>
</head>

<body>
    <?php include 'framework/navbar.php' ?>
    <link rel="stylesheet" href="css/about.css">
    <div class="container">
        <div id="aboutWeb" class="d-flex flex-column align-items-center">
            <div class="d-flex flex-column align-items-center text-center p-2">
                <img id="webLogo" src="img/_logoCircle.png"/>
            </div>
            <h1 class="text-center p-2">Nutrition Condition Detection</h1>
            <p class="p-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                
            </p>
        </div>
    </div>

    <script>
        document.getElementById("home").classList.remove("active");
        document.getElementById("consult").classList.remove("active");
        document.getElementById("history").classList.remove("active");
        document.getElementById("about").classList.add("active");
        document.getElementById("admin").classList.remove("active");
    </script>

</body>

</html>