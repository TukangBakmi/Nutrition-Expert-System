$(this).ready(function(){
    // Menampilkan data
    getPertanyaan();
    function getPertanyaan(){
        $.ajax({
            type: "GET",
            url: "_library/_php/action.php",
            data: {req:'pertanyaan'},
            dataType: "json",
            success: function(response){
                var table;
                $.each(response, function(i,obj){
                    table += "<tr><td>" + obj.id +
                            "</td><td>" + obj.code +
                            "</td><td>" + obj.gejala +
                            "</td><td>" + obj.pertanyaan +
                            "</td><td style='text-align:center'>" +
                                "<button class='btn btn-warning' id='btnEdit' data-id ='" + obj.id +
                                "' data-gejala ='" + obj.id_gejala +
                                "'>Edit</button> " +
                                "<button class='btn btn-danger' id='btnDelete' data-id ='" + obj.id +
                                "' data-gejala ='" + obj.id_gejala +
                                "'>Delete</button>" +
                            "</td></tr>";
                })
                $('#bankSoal').html(table);
            }
        })
    }


    //------------------------------------------ Tombol Tambah Data ------------------------------------------

    // Menampilkan modal add
    $('#btnNew').click(function(){
        $('#addModal').modal('show');
        $("#btnSaveEdit").attr("id", "btnSave");
        $("#btnSaveDelete").attr("id", "btnSave");
        $('input[name="id"]').val("");
        $('input[name="code"]').val("");
        $('input[name="pertanyaan"]').val("");
        // Mengganti title modal
        $('#modalTitle').text(function(i, oldText) {
            return oldText = 'Tambah Pertanyaan';
        });
        // Meng-enable input-an
        $("#code").prop('disabled', false);
        $("#gejala").prop('disabled', false);
        $("#pertanyaan").prop('disabled', false);
        //get all gejala records
        $.ajax({
            type: 'GET',
            url: '_library/_php/action.php',
            data: {req:'gejala'},
            dataType: 'json',
            success: function(result){
                var select;
                $.each(result, function(i,obj){
                    select += "<option value=\"" + obj.id + "\">" + obj.name + "</option>";
                })
                $('#gejala').html(select);
            }
        })
    })
})


//--------------------------------------------- Tombol Edit Data---------------------------------------------

$(document).on('click', '#btnEdit', function () {
    var itemId = $(this).data("id");
    var idGejala = $(this).data("gejala");
    $("#addModal").modal("show");
    $("#btnSave").attr("id", "btnSaveEdit");
    $("#btnSaveDelete").attr("id", "btnSaveEdit");
    //get all input
    $.ajax({
        type: "GET",
        url: "_library/_php/action.php",
        data: {
            req: "recordPertanyaan",
            id: itemId,
        },
        dataType: "JSON",
        success: function (response) {
            $.each(response, function (i, obj) {
                // Mengganti title modal
                $('#modalTitle').text(function(i, oldText) {
                    return oldText = 'Edit Pertanyaan';
                });
                // Mengisi input-an
                $('input[name="id"]').val(obj.id);
                $('input[name="code"]').val(obj.code);
                $('input[name="pertanyaan"]').val(obj.pertanyaan);
                // Meng-enable input-an
                $("#code").prop('disabled', false);
                $("#gejala").prop('disabled', false);
                $("#pertanyaan").prop('disabled', false);
            });
        },
    });
    //get all gejala records
    $.ajax({
        type: 'GET',
        url: '_library/_php/action.php',
        data: {req:'gejala'},
        dataType: 'json',
        success: function(result){
            var select;
            $.each(result, function(i,obj){
                if (obj.id == idGejala) {
                    select +=
                        "<option value='" + obj.id + "' selected >" + obj.name + "</option>";
                } else {
                    select +=
                        "<option value='" + obj.id + "' >" + obj.name + "</option>";
                }
            })
            $('#gejala').html(select);
        }
    })
})


//------------------------------------------ Tombol Delete Data ------------------------------------------

$(document).on('click', '#btnDelete', function () {
    var itemId = $(this).data("id");
    var idGejala = $(this).data("gejala");
    $("#addModal").modal("show");
    $("#btnSave").attr("id", "btnSaveDelete");
    $("#btnSaveEdit").attr("id", "btnSaveDelete");
    //get all input
    $.ajax({
        type: "GET",
        url: "_library/_php/action.php",
        data: {
            req: "recordPertanyaan",
            id: itemId,
        },
        dataType: "JSON",
        success: function (response) {
            $.each(response, function (i, obj) {
                // Mengganti title modal
                $('#modalTitle').text(function(i, oldText) {
                    return oldText = 'Delete Pertanyaan';
                });
                // Mengisi input-an
                $('input[name="id"]').val(obj.id);
                $('input[name="code"]').val(obj.code);
                $('input[name="pertanyaan"]').val(obj.pertanyaan);
                // Men-disable input-an
                $("#code").prop('disabled', true);
                $("#gejala").prop('disabled', true);
                $("#pertanyaan").prop('disabled', true);
            });
        },
    });
    //get all gejala records
    $.ajax({
        type: 'GET',
        url: '_library/_php/action.php',
        data: {req:'gejala'},
        dataType: 'json',
        success: function(result){
            var select;
            $.each(result, function(i,obj){
                if (obj.id == idGejala) {
                    select +=
                        "<option value='" + obj.id + "' selected >" + obj.name + "</option>";
                } else {
                    select +=
                        "<option value='" + obj.id + "' >" + obj.name + "</option>";
                }
            })
            $('#gejala').html(select);
        }
    })
})


//---------------------------------------------- Save Data----------------------------------------------
// Tambah data
$(this).ready(function () {
    $(document).on("click", "#btnSave", function () {
        const formData = new FormData(document.getElementById('formAdd'));
        $.ajax({
            type: 'POST',
            url: '_library/_php/createBankSoal.php',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'html',
            success: function(result){
                $('.modal-body').html(result);
                $('#back').hide();
                $('#signUp').hide();
            }
        })
    });
    //Edit data
    $(document).on("click", "#btnSaveEdit", function () {
        const formData = new FormData(document.getElementById('formAdd'));
        $.ajax({
            type: 'POST',
            url: '_library/_php/editBankSoal.php',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'html',
            success: function(result){
                $('.modal-body').html(result);
                $('#back').hide();
                $('#signUp').hide();
            }
        })
    });
    // Hapus data
    $(document).on("click", "#btnSaveDelete", function () {
        const formData = new FormData(document.getElementById('formAdd'));
        $.ajax({
            type: 'POST',
            url: '_library/_php/deleteBankSoal.php',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'html',
            success: function(result){
                $('.modal-body').html(result);
                $('#back').hide();
                $('#signUp').hide();
            }
        })
    });
})