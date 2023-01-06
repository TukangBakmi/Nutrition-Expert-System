$(this).ready(function(){
    // Menampilkan data
    getRules();
    function getRules(){
        $.ajax({
            type: "GET",
            url: "_library/_php/action.php",
            data: {req:'rules'},
            dataType: "json",
            success: function(response){
                var table;
                $.each(response, function(i,obj){
                    table += "<tr><td>" + obj.id +
                            "</td><td>" + obj.bmi +
                            "</td><td>" + obj.penyakit +
                            "</td><td>" + obj.gejala +
                            "</td><td>" + obj.mb +
                            "</td><td>" + obj.md +
                            "</td><td style='text-align:center'>" +
                                "<button class='btn btn-warning' id='btnEdit' data-id ='" + obj.id +
                                "' data-bmi ='" + obj.id_bmi + "' data-penyakit ='" + obj.id_penyakit +
                                "' data-gejala ='" + obj.id_gejala +
                                "'>Edit</button> " +
                                "<button class='btn btn-danger' id='btnDelete' data-id ='" + obj.id +
                                "' data-bmi ='" + obj.id_bmi + "' data-penyakit ='" + obj.id_penyakit +
                                "' data-gejala ='" + obj.id_gejala +
                                "'>Delete</button>" +
                            "</td></tr>";
                })
                $('#rules').html(table);
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
        $('input[name="mb"]').val("");
        $('input[name="md"]').val("");
        // Mengganti title modal
        $('#modalTitle').text(function(i, oldText) {
            return oldText = 'Tambah Rules';
        });
        // Meng-enable input-an
        $("#title").prop('disabled', false);
        $("#bmi").prop('disabled', false);
        $("#penyakit").prop('disabled', false);
        $("#gejala").prop('disabled', false);
        $("#mb").prop('disabled', false);
        $("#md").prop('disabled', false);
        //get all bmi records
        $.ajax({
            type: 'GET',
            url: '_library/_php/action.php',
            data: {req:'bmi'},
            dataType: 'json',
            success: function(result){
                var select;
                $.each(result, function(i,obj){
                    select += "<option value=\"" + obj.id + "\">" + obj.name + "</option>";
                })
                $('#bmi').html(select);
            }
        })
        //get all penyakit records
        $.ajax({
            type: 'GET',
            url: '_library/_php/action.php',
            data: {req:'penyakit'},
            dataType: 'json',
            success: function(result){
                var select;
                $.each(result, function(i,obj){
                    select += "<option value=\"" + obj.id + "\">" + obj.name + "</option>";
                })
                $('#penyakit').html(select);
            }
        })
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
    var idBmi = $(this).data("bmi");
    var idPenyakit = $(this).data("penyakit");
    var idGejala = $(this).data("gejala");
    $("#addModal").modal("show");
    $("#btnSave").attr("id", "btnSaveEdit");
    $("#btnSaveDelete").attr("id", "btnSaveEdit");
    //get all input
    $.ajax({
        type: "GET",
        url: "_library/_php/action.php",
        data: {
            req: "recordRules",
            id: itemId,
        },
        dataType: "JSON",
        success: function (response) {
            $.each(response, function (i, obj) {
                // Mengganti title modal
                $('#modalTitle').text(function(i, oldText) {
                    return oldText = 'Edit Rules';
                });
                // Mengisi input-an
                $('input[name="id"]').val(obj.id);
                $('input[name="mb"]').val(obj.mb);
                $('input[name="md"]').val(obj.md);
                // Meng-enable input-an
                $("#title").prop('disabled', false);
                $("#bmi").prop('disabled', false);
                $("#penyakit").prop('disabled', false);
                $("#gejala").prop('disabled', false);
                $("#mb").prop('disabled', false);
                $("#md").prop('disabled', false);
            });
        },
    });
    //get all bmi records
    $.ajax({
        type: 'GET',
        url: '_library/_php/action.php',
        data: {req:'bmi'},
        dataType: 'json',
        success: function(result){
            var select;
            $.each(result, function(i,obj){
                if (obj.id == idBmi) {
                    select +=
                        "<option value='" + obj.id + "' selected >" + obj.name + "</option>";
                } else {
                    select +=
                        "<option value='" + obj.id + "' >" + obj.name + "</option>";
                }
            })
            $('#bmi').html(select);
        }
    })
    //get all penyakit records
    $.ajax({
        type: 'GET',
        url: '_library/_php/action.php',
        data: {req:'penyakit'},
        dataType: 'json',
        success: function(result){
            var select;
            $.each(result, function(i,obj){
                if (obj.id == idPenyakit) {
                    select +=
                        "<option value='" + obj.id + "' selected >" + obj.name + "</option>";
                } else {
                    select +=
                        "<option value='" + obj.id + "' >" + obj.name + "</option>";
                }
            })
            $('#penyakit').html(select);
        }
    })
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
    var idBmi = $(this).data("bmi");
    var idPenyakit = $(this).data("penyakit");
    var idGejala = $(this).data("gejala");
    $("#addModal").modal("show");
    $("#btnSave").attr("id", "btnSaveDelete");
    $("#btnSaveEdit").attr("id", "btnSaveDelete");
    //get all input
    $.ajax({
        type: "GET",
        url: "_library/_php/action.php",
        data: {
            req: "recordRules",
            id: itemId,
        },
        dataType: "JSON",
        success: function (response) {
            $.each(response, function (i, obj) {
                // Mengganti title modal
                $('#modalTitle').text(function(i, oldText) {
                    return oldText = 'Delete Rules';
                });
                // Mengisi input-an
                $('input[name="id"]').val(obj.id);
                $('input[name="mb"]').val(obj.mb);
                $('input[name="md"]').val(obj.md);
                // Men-disable input-an
                $("#title").prop('disabled', true);
                $("#bmi").prop('disabled', true);
                $("#penyakit").prop('disabled', true);
                $("#gejala").prop('disabled', true);
                $("#mb").prop('disabled', true);
                $("#md").prop('disabled', true);
            });
        },
    });
    //get all bmi records
    $.ajax({
        type: 'GET',
        url: '_library/_php/action.php',
        data: {req:'bmi'},
        dataType: 'json',
        success: function(result){
            var select;
            $.each(result, function(i,obj){
                if (obj.id == idBmi) {
                    select +=
                        "<option value='" + obj.id + "' selected >" + obj.name + "</option>";
                } else {
                    select +=
                        "<option value='" + obj.id + "' >" + obj.name + "</option>";
                }
            })
            $('#bmi').html(select);
        }
    })
    //get all penyakit records
    $.ajax({
        type: 'GET',
        url: '_library/_php/action.php',
        data: {req:'penyakit'},
        dataType: 'json',
        success: function(result){
            var select;
            $.each(result, function(i,obj){
                if (obj.id == idPenyakit) {
                    select +=
                        "<option value='" + obj.id + "' selected >" + obj.name + "</option>";
                } else {
                    select +=
                        "<option value='" + obj.id + "' >" + obj.name + "</option>";
                }
            })
            $('#penyakit').html(select);
        }
    })
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
            url: '_library/_php/createRules.php',
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
            url: '_library/_php/editRules.php',
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
            url: '_library/_php/deleteRules.php',
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