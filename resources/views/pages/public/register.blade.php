@extends('layout')
@section('page')
<style>
.form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
</style>
<script>
$(document).ready(function() {
    $('#btn-register').click(function(event) {
        var errorMsg = document.getElementById("errorMsg");
        var password = $('input[id=password]').val();
        var password_rep = $('input[id=password_rep]').val();

        if(password != password_rep){
            errorMsg.innerHTML = '<div class="alert alert-dismissible alert-danger">\
                        <button type="button" class="close" data-dismiss="alert">&times;</button>\
                        <strong>Error:</strong><br>Las contraseñas deben coincidir.\
                        </div>';
        }
        else{
            var userData = JSON.parse(JSON.stringify(
                {
                    'name': $('input[id=name]').val(), 
                    'email': $('input[id=email]').val(), 
                    'password': password
                }));

            $.ajax({
                url: "{{ route('user.register.post') }}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: userData,
                dataType: 'JSON',
                success: function (data) {
                    console.log(data)
                    if(data.response && data.response == "OK"){
                        errorMsg.innerHTML = 
                        '<div class="alert alert-dismissible alert-success">\
                        <button type="button" class="close" data-dismiss="alert">&times;</button>\
                        <strong>¡Enhorabuena!</strong><br> te has registrado correctamente ya puedes iniciar sesión.\
                        </div>'
                    } else if(data.error){
                        errorMsg.innerHTML = 
                        '<div class="alert alert-dismissible alert-danger">\
                        <button type="button" class="close" data-dismiss="alert">&times;</button>\
                        <strong>Error:</strong><br>' + data.error + '.\
                        </div>'
                    }    
                }
            });
        }
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});
</script>

<div class="inner-body">
    <div class="container form-signin">
        <h2 class="form-signin-heading">Registrarse</h2>
        <div id="errorMsg"></div>
        <input id="email" class="form-control" placeholder="Email" required="" autofocus="" type="email">
        <input style="margin-top: 20px;" id="name" class="form-control" placeholder="Nombre" required="" autofocus="">
        <input style="margin-top: 20px;" id="password" class="form-control" placeholder="Contraseña" required="" type="password">
        <input style="margin-top: 20px;" id="password_rep" class="form-control" placeholder="Repetir contraseña" required="" type="password">
        <button id="btn-register" style="margin-top: 20px;" class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
    </div>
</div>

@stop