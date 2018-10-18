function efetuaLogin(){
    alert("Autenticando...");
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        method: "GET",
        url: "login/auth",
        data: {
        }
    }).done(function( msg ) {
        alert("Usuário autenticado!");
        // window.location = "/dash"
    });
}

function openPageRegister(){
    $("#register-user-page").show();
    $("#login-page").hide();
    $("#send-password-page").hide();
}
function openPageSendPassword(){
    $("#register-user-page").hide();
    $("#login-page").hide();
    $("#send-password-page").show();
}

function voltaLogin(){
    $("#register-user-page").hide();
    $("#send-password-page").hide();
    $("#login-page").show();
}

function registraUsuario(){
    alert("registrandooo");
}

function enviaSenhaEsquecida(){
    alert("esquecendoooo");
}
