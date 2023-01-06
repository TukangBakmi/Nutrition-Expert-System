<?php

    include('../../../_dbconfig/dbconfig.php');

    // prepare and bind
    $stmt = $conn->prepare("UPDATE cf_penyakit SET code=?, name=?,
                            description=? WHERE id=?");
    $stmt->bind_param("sssi", $code, $name, $description, $id);

    // set parameters
    $id = $_POST['id'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    if($stmt->execute()){
        echo "<p>Edit data success.</p>";
        echo "<a href='adminPenyakit.php' class='btn btn-primary'>Back to Home</a>";
    } else {
        echo "<p>Edit data failed.</p>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<a href='adminPenyakit.php' class='btn btn-primary'>Try Again</a>";
    }
    
    $stmt->close();
    $conn->close();
?>