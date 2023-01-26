<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>Tentang Kami | NCD</title>
  <link rel="icon" href="img/_logoCircle.png">
  <?php include 'framework/bootstrap.php'?>
</head>

<body>
    <?php include 'framework/navbar.php' ?>
    <link rel="stylesheet" href="css/about.css">
    <div class="container">
        <div id="aboutWeb" class="d-flex flex-column align-items-center">
            <div class="d-flex flex-column align-items-center text-center p-2">
                <img id="webLogo" src="img/_logoCircle.png"/>
            </div>
            <h1 class="text-center p-2">Nutrition Condition Detection</h1>
            <p class="p-2">
                NCD (Nutrition Condition Detection) adalah sebuah website yang 
                dapat digunakan untuk mendiagnosis beberapa penyakit terkait 
                nutrisi yang mungkin saja dimiliki oleh seseorang. Anda hanya 
                perlu memasukkan nama, tinggi, berat badan  Anda, dan menjawab 
                beberapa pertanyaan. Kemudian sistem kami akan memulai diagnosis 
                dengan menggunakan metode Certainty Factor dan Forward Chaining 
                untuk memperoleh persentase hasil diagnosis seorang pasien. 
                Sistem pakar ini dapat mendeteksi hingga enam penyakit, yaitu 
                Kwarshiorkor, Marasmus, Gula darah, Penurunan daya tahan tubuh 
                (masuk angin), hipertensi, dan jantung.
            </p>
        </div>
        <div id="aboutWeb" class="d-flex flex-column align-items-center">
            <h1 class="text-center p-2">About Developers</h1>

            <!-- Personal Cards </ul> -->
            <div class="card-category-5">
                <ul class="all-pr-cards">
                    <li>
                        <div class="per-card-3">
                            <div class="card-image d-flex">
                                <span></span>
                                <img src="img/vaneza.png"/>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="per-name">Vaneza Citra</span>
                                    <span class="per-nim">412020011</span>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="card-text">
                                    <span>Mendesain dan membuat bagian front-end website, serta mengumpulkan knowledge base dari beberapa referensi</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="per-card-3">
                            <div class="card-image d-flex">
                                <span></span>
                                <img src="img/albert.png"/>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="per-name">Albert Ardiansyah</span>
                                    <span class="per-nim">412020031</span>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="card-text">
                                    <span>Mendesain website, membuat database dan back-end website, serta membuat perhitungan Certainty Factor</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="per-card-3">
                            <div class="card-image d-flex">
                                <span></span>
                                <img src="img/chelsy.png"/>
                                <div class="d-flex flex-column justify-content-center">
                                    <span class="per-name">Chelsy Kwan</span>
                                    <span class="per-nim">412020035</span>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="card-text">
                                    <span>Mengusulkan ide project, mendesain dan membuat bagian front-end website, serta membuat poster ilmiah</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("home").classList.remove("active");
        document.getElementById("consult").classList.remove("active");
        document.getElementById("history").classList.remove("active");
        document.getElementById("about").classList.add("active");
        document.getElementById("admin").classList.remove("active");
    </script>

    <?php include 'framework/footer.php' ?>
</body>

</html>