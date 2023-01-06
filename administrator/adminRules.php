<?php
    session_start();
    include('../_dbconfig/dbConfig.php');
    if(!isset($_SESSION['adminName'])){
        header("Location: ../admin.php");
    }
?>

<!DOCTYPE html>
<html translate="no">
<head>
    <title>Admin | NCD</title>
    <link rel="icon" href="../img/_logoCircle.png">
    <?php include('_library/lib-include.php')?>
    <script src="_library/js/rules.js"></script>
</head>
    <body class="bg-secondary">
        <?php include('../framework/navbarAdmin.php') ?>
        <div class="container">
            <h3 class="text-center mt-3">LIST RULES</h3>
            <!-- Button trigger modal -->
            <button id="btnNew" type="button" class="btn btn-primary" data-bs-toogle="modal">
                Tambah Rules
            </button>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Kategori BMI</th>
                        <th scope="col">Nama Penyakit</th>
                        <th scope="col">Gejala</th>
                        <th scope="col">Measure of Belief</th>
                        <th scope="col">Measure of Disbelief</th>
                        <th scope="col" style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody id="rules">
                </tbody>
            </table>
        </div>

        <!-- Modal Add -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Tambah Rules</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" enctype="multipart/form-data" id="formAdd">
                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label class="col-form-label">BMI:</label>
                                <select class="form-select" id="bmi" name="bmi">
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Nama Penyakit:</label>
                                <select class="form-select" id="penyakit" name="penyakit">
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Gejala:</label>
                                <select class="form-select" id="gejala" name="gejala">
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Measure of Belief:</label>
                                <input type="text" value="" class="form-control" id="mb" name="mb" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Measure of Disbelief:</label>
                                <input type="text" value="" class="form-control" id="md" name="md" required>
                            </div>
                            <div class="modal-footer">
                                <button id="btnClose" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button id="btnSave" type="button" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>