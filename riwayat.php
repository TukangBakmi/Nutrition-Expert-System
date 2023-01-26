<?php
    include('_dbConfig/dbConfig.php');
    $riwayat = $conn->query("SELECT * FROM riwayat");
?>

<?php
    // get id
    $arrPercentage = [];
    $arr = [];

    if(collectData($arr, "kwashiorkor", "Kwashiorkor") != false){
        foreach (collectData($arr, "kwashiorkor", "Kwashiorkor") as $x){
            array_push($arrPercentage, $x);
        }
    }
    if(collectData($arr, "marasmus", "Marasmus") != false){
        foreach (collectData($arr, "marasmus", "Marasmus") as $x){
            array_push($arrPercentage, $x);
        }
    }
    if(collectData($arr, "gula_darah", "Gula Darah") != false){
        foreach (collectData($arr, "gula_darah", "Gula Darah") as $x){
            array_push($arrPercentage, $x);
        }
    }
    if(collectData($arr, "masuk_angin", "Penurunan daya tahan tubuh (Masuk angin)") != false){
        foreach (collectData($arr, "masuk_angin", "Penurunan daya tahan tubuh (Masuk angin)") as $x){
            array_push($arrPercentage, $x);
        }
    }
    if(collectData($arr, "hipertensi", "Hipertensi") != false){
        foreach (collectData($arr, "hipertensi", "Hipertensi") as $x){
            array_push($arrPercentage, $x);
        }
    }
    if(collectData($arr, "jantung", "Jantung") != false){
        foreach (collectData($arr, "jantung", "Jantung") as $x){
            array_push($arrPercentage, $x);
        }
    }
    function collectData($arr, $penyakit, $namaPenyakit){
        include('_dbConfig/dbConfig.php');
        $getHasil = $conn->query("SELECT * FROM riwayat");
        while($row = $getHasil->fetch_assoc()){
            if($row[$penyakit] > 0 && $row[$penyakit] != null){
                $sql = $conn->query("SELECT * FROM cf_penyakit WHERE name='$namaPenyakit'")->fetch_assoc();
                $percentage = $row[$penyakit] * 100 . "%";
                array_push($arr, array($row["id"], $namaPenyakit, $percentage, $sql['description']));
            }
        }
        return $arr;
    }
    usort($arrPercentage, fn($a, $b) => $b[2] <=> $a[2]);
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>Riwayat | NCD</title>
  <link rel="icon" href="img/_logoCircle.png">
  <?php include 'framework/bootstrap.php'?>
</head>

<body>
    <?php include 'framework/navbar.php' ?>
    <link rel="stylesheet" href="css/riwayat.css">
    <div class="container">
        <h1 class="text-center">Riwayat Diagnosis</h1>
        <div class="row justify-content-center">
            <table class="table1 table table-bordered">
                <tr>
                    <th class="text-center" style="width:4%; font-weight: bold; ">No.</th>
                    <th class="text-center" style="width:16%;">Tanggal</th>
                    <th class="text-center" style="width:54%;">Hasil Diagnosis</th>
                    <th class="text-center">Aksi</th>
                </tr>
                
                <?php $var=1;?>
                <?php while($rowRiwayat = $riwayat->fetch_assoc()):?>
                    <tr>
                        <td class="text-center align-middle"><?=$var?></td>
                        <td class="text-center align-middle">
                            <?=$rowRiwayat["tanggal"];?>
                        </td>
                        <td class="align-middle">
                            <?php $i=1?>
                            <?php foreach ($arrPercentage as $val): ?>
                                <?php 
                                    if($val[0] == $rowRiwayat["id"]){
                                        if($i == 1){
                                            echo '<div class="d-flex justify-content-between fw-bolder"><span class = "text-start">'.$val[1].'</span>';
                                            echo '<span class = "text-end">'.$val[2].'</span></div>';
                                        }else{
                                            echo '<div class="d-flex justify-content-between"><span class = "text-start">'.$val[1].'</span>';
                                            echo '<span class = "text-end">'.$val[2].'</span></div>';
                                        }
                                        $i++;
                                    }
                                ?>
                            <?php endforeach;?>
                        </td>
                        <td  class="text-center align-middle">
                            <button class='btn btn-warning w-80' id='btnDetail' data-id='<?=$rowRiwayat["id"]?>'>Detail</button>
                        </td>
                    </tr>
                <?php $var++;?>
                <?php endwhile;?>
            </table>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/riwayat.js"></script>
    <script>
        document.getElementById("home").classList.remove("active");
        document.getElementById("consult").classList.remove("active");
        document.getElementById("history").classList.add("active");
        document.getElementById("about").classList.remove("active");
        document.getElementById("admin").classList.remove("active");
    </script>

</body>

</html>