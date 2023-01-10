<?php
    include('_dbConfig/dbConfig.php');
    // hitung angka imt
    $angkaIMT = number_format((float)$_POST["weight"]/($_POST["height"]*$_POST["height"]/10000), 3, '.', '');
    // tentukan kategori imt
    if($angkaIMT <= 18.5){
        $stringIMT = "Kurus";
    }else if($angkaIMT >= 25){
        $stringIMT = "Gemuk";
    }else{
        $stringIMT = "Normal";
    }
    echo "IMT Anda: {$angkaIMT} ({$stringIMT})";
    // cari id imt
    $IMT = $conn->query("SELECT * FROM cf_bmi WHERE name = '$stringIMT'")->fetch_assoc();
    $idIMT = $IMT["id"];
    $rules = $conn->query("SELECT DISTINCT id_gejala FROM cf_rules WHERE id_bmi = '$idIMT'");
    // $selectQuestion = $conn->query("SELECT * FROM cf_bank_soal WHERE ");
?>