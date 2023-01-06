<?php

    include('../../../_dbconfig/dbconfig.php');

    // prepare and bind
    $stmt = $conn->prepare("UPDATE cf_rules SET id_bmi=?,id_penyakit=?,
                            id_gejala=?,mb=?,md=? WHERE id=?");
    $stmt->bind_param("iiiddi", $bmi, $penyakit, $gejala, $mb, $md, $id);

    // set parameters
    $id = $_POST['id'];
    $bmi = $_POST['bmi'];
    $penyakit = $_POST['penyakit'];
    $gejala = $_POST['gejala'];
    $mb = $_POST['mb'];
    $md = $_POST['md'];
    
    if($stmt->execute()){
        echo "<p>Edit data success.</p>";
        echo "<a href='adminRules.php' class='btn btn-primary'>Back to Home</a>";
    } else {
        echo "<p>Edit data failed.</p>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<a href='adminRules.php' class='btn btn-primary'>Try Again</a>";
    }
    
    $stmt->close();
    $conn->close();
?>