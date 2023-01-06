<?php

    include('../../../_dbconfig/dbconfig.php');

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO cf_rules (id_bmi,id_penyakit,id_gejala,mb,md) VALUES(?, ?, ?, ?, ?)");
    $stmt->bind_param("iiidd", $bmi, $penyakit, $gejala, $mb, $md);

    // set parameters
    $bmi = $_POST['bmi'];
    $penyakit = $_POST['penyakit'];
    $gejala = $_POST['gejala'];
    $mb = $_POST['mb'];
    $md = $_POST['md'];

    if($stmt->execute()){
        echo "<p>Insert data success.</p>";
        echo "<a href='adminRules.php' class='btn btn-primary'>Back to Home</a>";
    } else {
        echo "<p>Insert data failed.</p>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<a href='adminRules.php' class='btn btn-primary'>Try Again</a>";
    }
    
    $stmt->close();
    $conn->close();
?>