<!DOCTYPE html>
<html lang="en">
<?php include 'framework/bootstrap.php'
?>

<body>
    <?php include 'navbar.php' ?>
    <link rel="stylesheet" href="css/input.css">
    <div class="container">
        <h1 style="text-align:center">Masukkan Data</h1>
        <div class="row   justify-content-center">
            <form class="col-7 col-md-7 col-lg-4 align-self-center">
                <h4>Nama Pasien</h4>
                <input type="text" name="name" required="required" class="input form-control" size="30" placeholder="Masukkan nama anda">
                <h4>Tinggi Pasien</h4>
                <input type="number" name="height" required="required" class="input form-control" size="30" placeholder="Masukkan tinggi badan anda">
                <h4>Berat Pasien</h4>
                <input type="number" name="weight" required="required" class="input form-control" size="30" placeholder="Masukkan berat badan anda">
                <div class="d-flex justify-content-center btn-start">
                    <a href="konsultasi.php"><button type="button" class="btn">Submit</button></a>
                </div>
            </form>
            <div class="col-lg-4  ">
                <img class="imt" style="height:400px;" src="img/imt.png"></img>
            </div>
        </div>
    </div>

</body>

</html>