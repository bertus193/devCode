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

// process the form
$('form').submit(function(event) {
    // get the form data
    // there are many ways to get this data using jQuery (you can use the class or id also)
    var userData = JSON.parse(JSON.stringify({'email': $('input[id=email]').val(), 'password': $('input[id=password]').val()}));

    $.ajax({
        url: "{{ route('user.login.post') }}",
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: userData,
        dataType: 'JSON',
        success: function (data) {
            if(data.response && data.response == "OK"){
                console.log(data.response)
            } else if(data.error){
                document.getElementById("errorMsg").innerHTML = 
                '<div class="alert alert-dismissible alert-danger">\
                <button type="button" class="close" data-dismiss="alert">&times;</button>\
                <strong>Error:</strong><br>' + data.error + '.\
                </div>'
            }
            //var user = JSON.parse(data);
            
        },
        error: function(data){
            console.log(data);
        }
    });
    // stop the form from submitting the normal way and refreshing the page
    event.preventDefault();
});

});

</script>

<div class="inner-body">
    <div class="container">
        <form class="form-signin">
            <h2 class="form-signin-heading">Inciar sesión</h2>
            <div id="errorMsg"></div>
            <input id="email" class="form-control" placeholder="Email" required="" autofocus="" ><!--type="email"-->   
            <input style="margin-top: 20px;" id="password" class="form-control" placeholder="Contraseña" required="" type="password">
            <button style="margin-top: 20px;" class="btn btn-lg btn-primary btn-block" type="submit">Inciar sesión</button>
        </form>
    </div>
</div>

@stop