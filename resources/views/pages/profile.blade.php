@extends('layout')
@section('page')
<script>
$(document).ready(function() {
    $('#btn-logout').click(function(event) {
        $.ajax({
            url: "{{ route('user.logout.post') }}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                window.location="{{route('home')}}";
            }
        });
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});
</script>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: auto;
    text-align: center;
    font-family: arial;
    padding: 20px;
}
</style>
<div class="inner-body">
    <div class="card">
        <h2>{{$user->name}}</h2>
        <p><b>Email:</b> {{$user->email}}</p>
        <p><b>Registrado el:</b> <?php print date("d-m-Y", strtotime($user->created_at)); ?></p>
        <p><button id="btn-logout" class="btn btn-danger">Logout</button></p>
        
    </div>
</div>

@stop