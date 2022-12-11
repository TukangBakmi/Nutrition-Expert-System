<!DOCTYPE html>
<html lang="en">
<?php include 'framework/bootstrap.php'
?>

<body>
    <?php include 'navbar.php' ?>
    <link rel="stylesheet" href="css/konsultasi.css">
    <div class="container">
        <h1 style="text-align:center">Konsultasi</h1>
        <p>Pilih tingkat keyakinan sesuai gejala yang dialami</p>
        <table class="table1">
            <tr>
                <th style="width:2%; font-weight: bold; ">#</th>
                <th style="width:75%;">Gejala</th>
                <th>Tingkat Keyakinan</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Apakah anda mengalami anemia ringan
                    (sering kelelahan, kelopak mata pucat, sering mual)
                </td>
                <td>
                    <select class="keyakinan">
                        <option value="" disabled selected hidden>Pilih Jawaban</option>
                        <option value="man">Sangat yakin</option>
                        <option value="woman">Mungkin</option>
                        <option value="another">Tidak yakin</option>
                    </select>
                </td>
            </tr>

        </table>
        <div class="col-auto btn-start">
            <a href="hasil.php"><button type="button" class="btn">Submit</button></a>
        </div>
    </div>

</body>

</html>