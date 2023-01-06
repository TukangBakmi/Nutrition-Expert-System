<?php

if(isset($_REQUEST['req'])){

    include('../../../_dbConfig/dbConfig.php');
    $req = $_REQUEST['req'];



    // ------------------------------------------------ Gejala ------------------------------------------------
    if($req=="gejala"){
        $result = $conn->query("SELECT * FROM cf_gejala ");
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        }
    }
    if ($req == 'recordGejala') {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM cf_gejala WHERE id = $id");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }



    // ------------------------------------------------ Penyakit ------------------------------------------------
    if($req=="penyakit"){
        $result = $conn->query("SELECT * FROM cf_penyakit");
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        }
    }
    if ($req == 'recordPenyakit') {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM cf_penyakit WHERE id = $id");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }



    // ---------------------------------------------- Rules ----------------------------------------------
    if($req=="rules"){
        $result = $conn->query("SELECT a.id, b.name AS bmi, c.name AS penyakit, 
                        d.name AS gejala, mb, md, 
                        id_bmi, id_penyakit, id_gejala FROM cf_rules a
                        LEFT JOIN cf_bmi b ON a.id_bmi = b.id
                        LEFT JOIN cf_penyakit c ON a.id_penyakit = c.id
                        LEFT JOIN cf_gejala d ON a.id_gejala = d.id");
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        }
    }
    if ($req == 'recordRules') {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM cf_rules WHERE id = $id");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }



    // ------------------------------------------------ BMI ------------------------------------------------
    if($req=="bmi"){
        $result = $conn->query("SELECT * FROM cf_bmi ");
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        }
    }
    if ($req == 'recordBMI') {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM cf_bmi WHERE id = $id");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }



    // ---------------------------------------------- Pertanyaan ----------------------------------------------
    if($req=="pertanyaan"){
        $result = $conn->query("SELECT a.id, a.code, b.name AS gejala, 
                        pertanyaan, id_gejala FROM cf_bank_soal a
                        LEFT JOIN cf_gejala b ON a.id_gejala = b.id");
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        }
    }
    if ($req == 'recordPertanyaan') {
        $id = $_GET['id'];
        $result = $conn->query("SELECT * FROM cf_bank_soal WHERE id = $id");
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }



    echo json_encode($data);
}
?>