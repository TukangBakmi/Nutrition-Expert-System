$(document).on('click', '#btnDetail', function () {
    var itemId = $(this).data("id");
    window.location = "hasil.php?id=" + itemId;
    // $("#addModal").modal("show");
    // $("#btnSave").attr("id", "btnSaveDelete");
    // $("#btnSaveEdit").attr("id", "btnSaveDelete");
    // //get all input
    // $.ajax({
    //     type: "GET",
    //     url: "_library/_php/action.php",
    //     data: {
    //         req: "recordBMI",
    //         id: itemId,
    //     },
    //     dataType: "JSON",
    //     success: function (response) {
    //         $.each(response, function (i, obj) {
    //             // Mengganti title modal
    //             $('#modalTitle').text(function(i, oldText) {
    //                 return oldText = 'Hapus BMI';
    //             });
    //             // Mengisi input-an
    //             $('input[name="id"]').val(obj.id);
    //             $('input[name="code"]').val(obj.code);
    //             $('input[name="name"]').val(obj.name);
    //             // men-disable input-an
    //             $("#code").prop('disabled', true);
    //             $("#name").prop('disabled', true);
    //         });
    //     },
    // });
})