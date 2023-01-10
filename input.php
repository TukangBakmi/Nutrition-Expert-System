<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>Input Data | NCD</title>
  <link rel="icon" href="img/_logoCircle.png">
  <?php include 'framework/bootstrap.php'?>
</head>

<body>
    <?php include 'framework/navbar.php' ?>
    <link rel="stylesheet" href="css/input.css">
    <div class="container">
        <h1 class="text-center">Masukkan Data</h1>
        <div class="row justify-content-center">
            <form action="konsultasi.php" id="formInput" method="POST" class="col-7 col-md-7 col-lg-4 align-self-center">
                <h4>Nama Pasien</h4>
                <input type="text" id="name" name="name" required="required" class="input form-control" size="30" placeholder="Masukkan nama anda">
                <h4>Tinggi Pasien (cm)</h4>
                <input type="number" id="height" name="height" required="required" class="input form-control" size="30" placeholder="Masukkan tinggi badan anda">
                <h4>Berat Pasien (kg)</h4>
                <input type="number" id="weight" name="weight" required="required" class="input form-control" size="30" placeholder="Masukkan berat badan anda">
                <div class="d-flex justify-content-center btn-start">
                    <button id="btnInput" type="submit" class="btn">Submit</button>
                </div>
            </form>
            <div class="col-lg-4  ">
                <img class="imt" style="height:400px;" src="img/imt.png"></img>
            </div>
        </div>
    </div>
    
    <script>
        document.getElementById("home").classList.remove("active");
        document.getElementById("consult").classList.add("active");
        document.getElementById("history").classList.remove("active");
        document.getElementById("about").classList.remove("active");
        document.getElementById("admin").classList.remove("active");
    </script>

</body>

</html>