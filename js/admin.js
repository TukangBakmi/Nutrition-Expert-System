$(document).ready(function() {

    $("#showPass").click(function(){
        if(document.getElementById("showPassword").checked == true){
            $("#password").get(0).type='text';
        } else if(document.getElementById("showPassword").checked == false){
            $("#password").get(0).type='password';
        }
    });
    
  
	$('#adm_btnLogin').on('click', function() {
        // Mengambil data yang di-input user
        var createUsernameEntry = $("#username").val();
        var createPasswordEntry = $("#password").val();
        // Untuk validasi
        var createUsernameValid = false;
        var createPasswordValid = false;
        
        var createUserenameObject = $("#username");
        var createPasswordObject = $("#password");

        // Validate email
        if((createUsernameEntry).length == 0 || createUsernameEntry == "Please fill out this field.") {
            $(createUserenameObject).addClass("alert-note");
            $(createUserenameObject).val("Please fill out this field.");
        } else {
            createUsernameValid = true;
        }

        // Validate password
        if((createPasswordEntry).length == 0 || createPasswordEntry == "Please fill out this field.") {
            $(createPasswordObject).get(0).type='text';
            $(createPasswordObject).addClass("alert-note");
            $(createPasswordObject).val("Please fill out this field.");
        } else {
            createPasswordValid = true;
        }
        
        $(createUserenameObject).on('click', function () {
            if($(this).val() == "Please fill out this field."){
                $(this).val("");
            }
            $(this).removeClass("alert-note");
        });
        
        $(createPasswordObject).on('click', function () {
            $(this).get(0).type='password';
            if($(this).val() == "Please fill out this field."){
                $(this).val("");
            }
            $(this).removeClass("alert-note");
        });
    
		if(createUsernameValid == true && createPasswordValid == true) {
            // Mengirim data
            var dataSend = $('#formLoginAdmin').serialize();
            $.ajax({
                type: 'POST',
                url: '_backprocess/postLoginAdmin.php',
                data: dataSend,
                dataType: 'html',
                success: function(result){
                    if(result === 'Account not found'){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            confirmButtonText: 'Try Again',
                            text: result,
                        })
                    } else if(result === 'Wrong password'){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            confirmButtonText: 'Try Again',
                            text: result,
                        })
                    } else{
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            confirmButtonText: 'Go to Admin Page',
                            text: "Welcome back, " + result,
                        }).then(function() {
                            window.location = "administrator/adminBankSoal.php";
                        });
                    }
                }
            })
        }
    });
});