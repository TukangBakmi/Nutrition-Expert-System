<?php

    include('../../../_dbconfig/dbconfig.php');

    // prepare and bind
    $stmt = $conn->prepare("UPDATE cf_bank_soal SET code=?,id_gejala=?,
                            pertanyaan=? WHERE id=?");
    $stmt->bind_param("sisi", $code, $gejala, $pertanyaan, $id);

    // set parameters
    $id = $_POST['id'];
    $code = $_POST['code'];
    $gejala = $_POST['gejala'];
    $pertanyaan = $_POST['pertanyaan'];
    
    if($stmt->execute()){
        echo "<p>Edit data success.</p>";
        echo "<a href='adminBankSoal.php' class='btn btn-primary'>Back to Home</a>";
    } else {
        echo "<p>Edit data failed.</p>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<a href='adminBankSoal.php' class='btn btn-primary'>Try Again</a>";
    }
    
    $stmt->close();
    $conn->close();
?>