<?php

    include('../../../_dbconfig/dbconfig.php');

    $id = $_POST['id'];
    $sql = "DELETE FROM cf_bmi
            WHERE id='$id'";

    if($conn->query($sql)){
        echo "<p>Delete data success.</p>";
        echo "<a href='adminBMI.php' class='btn btn-primary'>Back to Home</a>";
    } else {
        echo "<p>Delete data failed.</p>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<a href='adminBMI.php' class='btn btn-primary'>Try Again</a>";
    }
?>