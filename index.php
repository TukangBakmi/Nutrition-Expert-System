<!DOCTYPE html>
<html lang="en">

<head>
  <title>Nutrition Expert System</title>
  <link rel="icon" href="img/_logoCircle.png">
  <?php include 'framework/bootstrap.php'?>
</head>

<body>
  <?php include 'navbar.php' ?>
  <link rel="stylesheet" href="css/index.css">
  <div class="container">
    <div class=" d-flex card position-absolute top-50 start-50 translate-middle">
      <div class="card-body">
        <h5 class="card-title text-center">Expert System <br> Nutrition Condition Detection</h5>
      </div>
    </div>
    <div class="d-flex justify-content-center btn-start">
      <button id="btnStart" type="button" class="btn">Start</button>
    </div>
  </div>

  <script>
    document.getElementById("btnStart").addEventListener("click", function(){
      window.location.href = "input.php";
    });
  </script>
  
</body>

</html>