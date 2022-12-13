<!DOCTYPE html>
<html lang="en">

<head>
  <title>Nutrition Condition Detection</title>
  <link rel="icon" href="img/_logoCircle.png">
  <?php include 'framework/bootstrap.php'?>
</head>

<body>
  <?php include 'framework/navbar.php' ?>
  <link rel="stylesheet" href="css/index.css">
  <div class="container">
    <div class="d-flex text-center flex-column align-items-center">
      <div class="card">
        <h5 class="card-title">Expert System <br> Nutrition Condition Detection</h5>
      </div>
      <div class="btn-start">
        <button id="btnStart" type="button" class="btn">Start</button>
      </div>
    </div>
  </div>

  <script>
    document.getElementById("home").classList.add("active");
    document.getElementById("history").classList.remove("active");
    document.getElementById("about").classList.remove("active");
    document.getElementById("admin").classList.remove("active");

    document.getElementById("btnStart").addEventListener("click", function(){
      window.location.href = "input.php";
    });
  </script>
  
</body>

</html>