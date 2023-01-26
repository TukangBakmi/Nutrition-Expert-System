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
  <div class="top-wrapper">
    <div class="container">
      <h1>Nutrition Condition Detection</h1>
      <h2>"Eat Healthy to Stay Healthy"</h2>
      <p class="mx-5">Nutrition Condition Detection adalah sebuah website untuk mendeteksi penyakit nutrisi yang mungkin anda miliki dengan menggunakan metode Certainty Factor dan Forward Chaining.</p>
      <div class="btn-start">
        <button id="btnStart" type="button" class="btn">Mulai</button>
      </div>
    </div>
  </div>

  <script>
    document.getElementById("home").classList.add("active");
    document.getElementById("consult").classList.remove("active");
    document.getElementById("history").classList.remove("active");
    document.getElementById("about").classList.remove("active");
    document.getElementById("admin").classList.remove("active");

    document.getElementById("btnStart").addEventListener("click", function(){
      window.location.href = "input.php";
    });
  </script>
  
</body>

</html>