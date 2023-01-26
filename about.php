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
                NCD (Nutrition Condition Detection) adalah sebuah website yang 
                dapat digunakan untuk mendiagnosis beberapa penyakit terkait 
                nutrisi yang mungkin saja dimiliki oleh seseorang. Website ini 
                menggunakan metode Certainty Factor dan Forward Chaining untuk menghitung persentase 
                hasil diagnosis seorang pasien.
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