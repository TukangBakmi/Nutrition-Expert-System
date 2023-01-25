<?php
    include('_dbConfig/dbConfig.php');
    $riwayat = $conn->query("SELECT * FROM riwayat");
?>

<?php
    // get id
    $arrPercentage = [];
    $arr = [];

    if(collectData($arr, "kwashiorkor", "Kwashiorkor") != false)
        array_push($arrPercentage, collectData($arr, "kwashiorkor", "Kwashiorkor"));

    if(collectData($arr, "marasmus", "Marasmus") != false)
        array_push($arrPercentage, collectData($arr, "marasmus", "Marasmus"));

    if(collectData($arr, "gula_darah", "Gula Darah") != false)
        array_push($arrPercentage, collectData($arr, "gula_darah", "Gula Darah"));

    if(collectData($arr, "masuk_angin", "Penurunan daya tahan tubuh (Masuk angin)") != false)
        array_push($arrPercentage, collectData($arr, "masuk_angin", "Penurunan daya tahan tubuh (Masuk angin)"));
    
    if(collectData($arr, "hipertensi", "Hipertensi") != false)
        array_push($arrPercentage, collectData($arr, "hipertensi", "Hipertensi"));

    if(collectData($arr, "jantung", "Jantung") != false)
        array_push($arrPercentage, collectData($arr, "jantung", "Jantung"));

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
                    <th style="width:2%; font-weight: bold; ">No.</th>
                    <th style="width:22%;">Tanggal</th>
                    <th style="width:46%;">Hasil Diagnosa</th>
                    <th class="text-center">Aksi</th>
                </tr>
                
                <?php $var=1;?>
                <?php while($rowRiwayat = $riwayat->fetch_assoc()):?>
                    <tr>
                        <td><?=$var?></td>
                        <td>
                            <?=$rowRiwayat["tanggal"];?>
                        </td>
                        <td>
                            <?php $i=1?>
                            <?php foreach ($arrPercentage as $val): ?>
                                <?php 
                                    if($val[0][0] == $rowRiwayat["id"]){
                                        echo '<div class="d-flex justify-content-between"><span class = "text-start">'.$val[0][1].'</span>';
                                        echo '<span class = "text-end">'.$val[0][2].'</span></div>';
                                    }
                                ?>
                            <?php endforeach;?>
                        </td>
                        <td style='text-align:center'>
                            <button class='btn btn-warning' id='btnDetail' data-id='<?=$rowRiwayat["id"]?>'>Detail</button>
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