<?php
    // get id
    $arrPercentage = [];

    if(collectData("kwashiorkor", "Kwashiorkor") != false)
        array_push($arrPercentage, collectData("kwashiorkor", "Kwashiorkor"));

    if(collectData("marasmus", "Marasmus") != false)
        array_push($arrPercentage, collectData("marasmus", "Marasmus"));

    if(collectData("gula_darah", "Gula Darah") != false)
        array_push($arrPercentage, collectData("gula_darah", "Gula Darah"));

    if(collectData("masuk_angin", "Penurunan daya tahan tubuh (Masuk angin)") != false)
        array_push($arrPercentage, collectData("masuk_angin", "Penurunan daya tahan tubuh (Masuk angin)"));
    
    if(collectData("hipertensi", "Hipertensi") != false)
        array_push($arrPercentage, collectData("hipertensi", "Hipertensi"));

    if(collectData("jantung", "Jantung") != false)
        array_push($arrPercentage, collectData("jantung", "Jantung"));
    var_dump($arrPercentage);
    function collectData($penyakit, $namaPenyakit){
        include('_dbConfig/dbConfig.php');
        $getid = $conn->query("SELECT MAX(id) AS id FROM riwayat")->fetch_assoc()["id"];
        $getHasil = $conn->query("SELECT * FROM riwayat WHERE id='$getid'")->fetch_assoc();
        
        if($getHasil[$penyakit] > 0 && $getHasil[$penyakit] != null){
            $sql = $conn->query("SELECT * FROM cf_penyakit WHERE name='$namaPenyakit'")->fetch_assoc();
            $percentage = $getHasil[$penyakit] * 100 . "%";
            return array($namaPenyakit, $percentage, $sql['description']);
        }else{
            return false;
        }
    }
    usort($arrPercentage, fn($a, $b) => $b[1] <=> $a[1]);
?>