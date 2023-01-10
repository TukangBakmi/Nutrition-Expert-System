<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>Konsultasi | NCD</title>
  <link rel="icon" href="img/_logoCircle.png">
  <?php include 'framework/bootstrap.php'?>
</head>

<body>
    <?php include 'framework/navbar.php' ?>
    <link rel="stylesheet" href="css/konsultasi.css">
    <div class="container">
        <h1 class="text-center">Konsultasi</h1>
        <?php include '_backprocess/getQuestion.php'?>
        <p>Pilih tingkat keyakinan sesuai gejala yang dialami</p>
        <table class="table1">
            <tr>
                <th style="width:2%; font-weight: bold; ">#</th>
                <th style="width:75%;">Gejala</th>
                <th>Tingkat Keyakinan</th>
            </tr>
            
            <?php $var=1;?>
            <?php while($rowRules = $rules->fetch_assoc()):?>
                <tr>
                    <td><?=$var?></td>
                    <td>
                        <?php
                            $idGejala = $rowRules["id_gejala"];
                            $bankSoal = $conn->query("SELECT DISTINCT * FROM cf_bank_soal WHERE id_gejala = '$idGejala'")->fetch_assoc();
                            echo $bankSoal["pertanyaan"];
                        ?>
                    </td>
                    <td>
                        <form action="hasil.php" id="formKonsultasi" method="POST">
                            <select name="cf_user" id="cf_user" class="keyakinan">
                                <option value="" disabled selected hidden>Pilih Jawaban</option>
                                <option value="-1.0">Pasti tidak</option>
                                <option value="-0.8">Hampir pasti tidak</option>
                                <option value="-0.6">Kemungkinan besar tidak</option>
                                <option value="-0.4">Mungkin tidak</option>
                                <option value="0.0">Ragu-ragu</option>
                                <option value="0.4">Mungkin iya</option>
                                <option value="0.6">Kemungkinan besar iya</option>
                                <option value="0.8">Hampir pasti iya</option>
                                <option value="1.0">Pasti iya</option>
                            </select>
                        </form>
                    </td>
                </tr>
            <?php $var++;?>
            <?php endwhile;?>
        </table>
        <div class="col-auto btn-start">
            <button type="submit" class="btn mb-5">Submit</button>
        </div>
    </div>

    <script>
        document.getElementById("home").classList.remove("active");
        document.getElementById("consult").classList.add("active");
        document.getElementById("history").classList.remove("active");
        document.getElementById("about").classList.remove("active");
        document.getElementById("admin").classList.remove("active");
    </script>

</body>

</html>