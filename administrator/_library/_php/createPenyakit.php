<?php

    include('../../../_dbConfig/dbConfig.php');

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO cf_penyakit (code,name,description) 
                            VALUES(?, ?, ?)");
    $stmt->bind_param("sss", $code, $name, $description);

    // set parameters
    $code = $_POST['code'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    if($stmt->execute()){
        echo "<p>Insert data success.</p>";
        echo "<a href='adminPenyakit.php' class='btn btn-primary'>Back to Home</a>";
    } else {
        echo "<p>Insert data failed.</p>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<a href='adminPenyakit.php' class='btn btn-primary'>Try Again</a>";
    }
    
    $stmt->close();
    $conn->close();
?>