$(document).ready(function() {
  
	$('#btnInput').on('click', function() {
        // Mengambil data yang di-input user
        var createNameEntry = $("#name").val();
        var createHeightEntry = $("#height").val();
        var createWeightEntry = $("#weight").val();

        // Validate name
        if((createNameEntry).length == 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                confirmButtonText: 'Coba Lagi',
                text: "Silakan isi nama Pasien",
            })
        }

        // Validate height
        else if((createHeightEntry).length == 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                confirmButtonText: 'Coba Lagi',
                text: "Silakan isi tinggi badan Pasien",
            })
        }

        // Validate weight
        else if((createWeightEntry).length == 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                confirmButtonText: 'Coba Lagi',
                text: "Silakan isi berat badan Pasien",
            })
        } else {
            window.location = "konsultasi.php";
        }
    });
});

window.onbeforeunload = confirmExit;
function confirmExit() {
  return "";
}