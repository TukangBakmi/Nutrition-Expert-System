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
    <script src="_library/js/penyakit.js"></script>
</head>
    <body class="bg-secondary">
        <?php include('../framework/navbarAdmin.php') ?>
        <div class="container">
            <h3 class="text-center mt-3">LIST PENYAKIT</h3>
            <!-- Button trigger modal -->
            <button id="btnNew" type="button" class="btn btn-primary" data-bs-toogle="modal">
                Tambah Penyakit
            </button>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col" style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody id="penyakit">
                </tbody>
            </table>
        </div>

        <!-- Modal Add -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Tambah Penyakit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" enctype="multipart/form-data" id="formAdd">
                            <input type="hidden" name="id">
                            <div class="mb-3">
                                <label class="col-form-label">Code:</label>
                                <input type="text" value="" class="form-control" id="code" name="code" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Name:</label>
                                <input type="text" value="" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Description:</label>
                                <input type="text" value="" class="form-control" id="description" name="description" required>
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