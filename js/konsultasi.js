$(document).ready(function() {
    
    $(".keyakinan").each(function( index ) {
        $("#cf_user"+(index+1)).on('change', function() {
            $('#cf_user'+(index+1)).css({ 'color': 'black'})
        });
    });

	$('#btnKonsultasi').on('click', function() {
        var valid = [];
        $(".keyakinan").each(function( index ) {
            var value = document.getElementById("cf_user"+(index+1)).value;
            if(value == "none"){
                valid[index] = false;
            }else {
                valid[index] = true;
            }
        });
        if(valid.includes(false)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                confirmButtonText: 'Coba Lagi',
                text: "Ada pertanyaan yang belum dijawab nih",
            })
        }else{
            Swal.fire({
                title: 'Sedang Menghitung...',
                html: 'Tunggu Sebentar...',
                timer: 1500,
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                },
                willClose: () => {
                    getCFPenyakit();
                    clearInterval(timerInterval);
                }
            });
            
        }
    });
});

function getCFPenyakit(){
    var dataSend = {};
    $(".keyakinan").each(function( index ) {
        var idGejala = $('#gejala'+(index+1)).val();
        var cfUser = $('#cf_user'+(index+1)).val();
        var name = $('#name').val();
        var height = $('#height').val();
        var weight = $('#weight').val();
        var nameBmi = $('#bmi').val();
        dataSend[index] = {
            id_gejala : idGejala,
            cf_user : cfUser,
            name : name,
            height : height,
            weight : weight,
            name_bmi : nameBmi
        };
    });
    $.ajax({
        type: 'POST',
        url: '_backprocess/getCFScore.php',
        async: false,
        data: dataSend,
        dataType: 'html',
        success: function(result){
            window.location = "hasil.php";
        }
    })
}