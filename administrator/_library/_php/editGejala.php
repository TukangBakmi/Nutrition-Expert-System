<?php

    include('../../../_dbconfig/dbconfig.php');

    // prepare and bind
    $stmt = $conn->prepare("UPDATE cf_gejala SET code=?, name=? WHERE id=?");
    $stmt->bind_param("ssi", $code, $name, $id);

    // set parameters
    $id = $_POST['id'];
    $code = $_POST['code'];
    $name = $_POST['name'];

    if($stmt->execute()){
        echo "<p>Edit data success.</p>";
        echo "<a href='adminGejala.php' class='btn btn-primary'>Back to Home</a>";
    } else {
        echo "<p>Edit data failed.</p>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<a href='adminGejala.php' class='btn btn-primary'>Try Again</a>";
    }
    
    $stmt->close();
    $conn->close();
?>