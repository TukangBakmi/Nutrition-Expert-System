<?php
    include('../_dbConfig/dbConfig.php');

    // get cf dari semua penyakit
    if ($_POST[0]['name_bmi'] == 'Kurus') {
        $kwarshiorkor = getCFPenyakit('1', $conn);
        $marasmus = getCFPenyakit('2', $conn);
    }
    $gulaDarah = getCFPenyakit('3', $conn);
    $masukAngin = getCFPenyakit('4', $conn);
    $hipertensi = getCFPenyakit('5', $conn);
    $jantung = getCFPenyakit('6', $conn);
    
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO riwayat (name_patient,height,weight,
                            kwashiorkor,marasmus,gula_darah,masuk_angin,
                            hipertensi,jantung) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sdddddddd", $name, $height,$weight, $kwarshiorkor,
                        $marasmus, $gulaDarah, $masukAngin, $hipertensi, $jantung);

    // set parameters
    $name = $_POST[0]['name'];
    $height = $_POST[0]['height'];
    $weight = $_POST[0]['weight'];
    
    $stmt->execute();

    $stmt->close();
    $conn->close();

    // Me-return nilai CF salah satu penyakit
    function getCFPenyakit($penyakit, $conn){
        $arrCFGejala = [];
        foreach ($_POST as $row) {
            $idGejala = $row['id_gejala'];
            $nameBMI = $row['name_bmi'];
            $cfUser = $row['cf_user'];

            $idBMI = $conn->query("SELECT * FROM cf_bmi 
                                    WHERE name = '$nameBMI'")->fetch_assoc()["id"];

            $tbl_rule = $conn->query("SELECT * FROM cf_rules 
                                WHERE id_gejala = '$idGejala'
                                AND id_penyakit = '$penyakit' 
                                AND id_bmi = '$idBMI'");

            if ($tbl_rule->num_rows > 0) {
                $fetch = $tbl_rule->fetch_assoc();
                $mb = $fetch["mb"];
                $md = $fetch["md"];
                $cf_rule =  $mb - $md;

                $cf_comb = $cfUser * $cf_rule;
                array_push($arrCFGejala, $cf_comb);
            }
        }
        
        $cf = calculateCF($arrCFGejala[0], $arrCFGejala[1]);
        for($i=1; $i<count($arrCFGejala)-1; $i++){
            $cf = calculateCF($cf, $arrCFGejala[$i+1]);
        }
        return $cf;
    }

    // Menghitung nilai CF antara 2 nilai
    function calculateCF($a, $b){
        $cf1 = $a;
        $cf2 = $b;
        if($cf1 >= 0 && $cf2 >= 0){
            $cf = $cf1 + $cf2 - ($cf1 * $cf2);
        } else if($cf1 < 0 && $cf2 < 0){
            $cf = $cf1 + $cf2 + ($cf1 * $cf2);
        } else{
            $cf = ($cf1 + $cf2) / (1-min(abs($a), abs($b)));
        }
        return $cf;
    }
?>