$(this).ready(function(){
    // Menampilkan data
    getPenyakit();
    function getPenyakit(){
        $.ajax({
            type: "GET",
            url: "_library/_php/action.php",
            data: {req:'penyakit'},
            dataType: "json",
            success: function(response){
                var table;
                $.each(response, function(i,obj){
                    table += "<tr><td>" + obj.id +
                            "</td><td>" + obj.code +
                            "</td><td>" + obj.name +
                            "</td><td>" + obj.description +
                            "</td><td style='text-align:center'>" +
                                "<button class='btn btn-warning' id='btnEdit' data-id ='" + obj.id +
                                "'>Edit</button> " +
                                "<button class='btn btn-danger' id='btnDelete' data-id ='" + obj.id +
                                "'>Delete</button>" +
                            "</td></tr>";
                })
                $('#penyakit').html(table);
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
        $('input[name="name"]').val("");
        $('input[name="code"]').val("");
        $('input[name="description"]').val("");
        $('#modalTitle').text(function(i, oldText) {
            return oldText = 'Tambah Penyakit';
        });
        // Meng-enable input-an
        $("#code").prop('disabled', false);
        $("#name").prop('disabled', false);
        $("#description").prop('disabled', false);
    })
})


//--------------------------------------------- Tombol Edit Data---------------------------------------------

$(document).on('click', '#btnEdit', function () {
    var itemId = $(this).data("id");
    $("#addModal").modal("show");
    $("#btnSave").attr("id", "btnSaveEdit");
    $("#btnSaveDelete").attr("id", "btnSaveEdit");
    //get all input
    $.ajax({
        type: "GET",
        url: "_library/_php/action.php",
        data: {
            req: "recordPenyakit",
            id: itemId,
        },
        dataType: "JSON",
        success: function (response) {
            $.each(response, function (i, obj) {
                // Mengganti title modal
                $('#modalTitle').text(function(i, oldText) {
                    return oldText = 'Edit Gejala';
                });
                // Mengisi input-an
                $('input[name="id"]').val(obj.id);
                $('input[name="code"]').val(obj.code);
                $('input[name="name"]').val(obj.name);
                $('input[name="description"]').val(obj.description);
                // Meng-enable input-an
                $("#code").prop('disabled', false);
                $("#name").prop('disabled', false);
                $("#description").prop('disabled', false);
            });
        },
    });
})


//------------------------------------------ Tombol Delete Data ------------------------------------------

$(document).on('click', '#btnDelete', function () {
    var itemId = $(this).data("id");
    $("#addModal").modal("show");
    $("#btnSave").attr("id", "btnSaveDelete");
    $("#btnSaveEdit").attr("id", "btnSaveDelete");
    //get all input
    $.ajax({
        type: "GET",
        url: "_library/_php/action.php",
        data: {
            req: "recordPenyakit",
            id: itemId,
        },
        dataType: "JSON",
        success: function (response) {
            $.each(response, function (i, obj) {
                // Mengganti title modal
                $('#modalTitle').text(function(i, oldText) {
                    return oldText = 'Hapus Gejala';
                });
                // Mengisi input-an
                $('input[name="id"]').val(obj.id);
                $('input[name="code"]').val(obj.code);
                $('input[name="name"]').val(obj.name);
                $('input[name="description"]').val(obj.description);
                // men-disable input-an
                $("#code").prop('disabled', true);
                $("#name").prop('disabled', true);
                $("#description").prop('disabled', true);
            });
        },
    });
})


//---------------------------------------------- Save Data----------------------------------------------
// Tambah data
$(this).ready(function () {
    $(document).on("click", "#btnSave", function () {
        const formData = new FormData(document.getElementById('formAdd'));
        $.ajax({
            type: 'POST',
            url: '_library/_php/createPenyakit.php',
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
            url: '_library/_php/editPenyakit.php',
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
            url: '_library/_php/deletePenyakit.php',
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