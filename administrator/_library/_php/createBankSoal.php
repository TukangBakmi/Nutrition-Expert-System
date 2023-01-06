<?php

    include('../../../_dbconfig/dbconfig.php');

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO cf_bank_soal (code,id_gejala,pertanyaan) VALUES(?, ?, ?)");
    $stmt->bind_param("sis", $code, $gejala, $pertanyaan);

    // set parameters
    $code = $_POST['code'];
    $gejala = $_POST['gejala'];
    $pertanyaan = $_POST['pertanyaan'];

    if($stmt->execute()){
        echo "<p>Insert data success.</p>";
        echo "<a href='adminBankSoal.php' class='btn btn-primary'>Back to Home</a>";
    } else {
        echo "<p>Insert data failed.</p>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<a href='adminBankSoal.php' class='btn btn-primary'>Try Again</a>";
    }
    
    $stmt->close();
    $conn->close();
?>