@extends('layout')
@section('page')

{{HTML::script('js/jquery.dataTables.min.js')}}
<style>
#notificationMsg{
    width: 320px;
    position: absolute;
    left: 37.5%;
}
</style>
<script type="text/javascript">
function btn_tutorial_create(){
        /*$.ajax({
            url: "",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { id : id },
            dataType: 'JSON',
            success: function (data) {
                console.log(data.response);
                if(data.response && data.response == "OK"){
                    publicSuccessMsg("Tutorial eliminado correctamente")
                    table.row('.selected').remove().draw( false );
                } else if(data.error){
                    publicErrorMsg(data.error);
                }    
            }
        });*/
}
function btn_tutorial_edit(id){
        /*$.ajax({
            url: "",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { id : id },
            dataType: 'JSON',
            success: function (data) {
                console.log(data.response);
                if(data.response && data.response == "OK"){
                    publicSuccessMsg("Tutorial eliminado correctamente")
                    table.row('.selected').remove().draw( false );
                } else if(data.error){
                    publicErrorMsg(data.error);
                }    
            }
        });*/
}
</script>

        
<div class="inner-body">
    <div class="inner-box">
        <center>
            <h4>Panel de administración</h4>
            <div id="notificationMsg"></div>
        </center>

        <div class="inner-body">
            @if($tutorial == null)
                El tutorial indicado no existe
            @else
            <div class="text-center">
                    @if($tutorial == "new")
                        <h4 class="form-signin-heading text-left" style="margin-top: 40px;">Nuevo tutorial</h4>
                        <div id="notificationMsg" style="height: 65px;margin-top: -80px;"></div>
                        <input id="email" class="form-control" placeholder="Nombre" required="" autofocus="" type="text">
                        <textarea style="margin-top: 20px;" placeholder="Descripción" class="form-control" id="exampleTextarea" rows="3"></textarea>
                        <button onclick="btn_tutorial_create()" style="margin-top: 20px;width:auto" class="btn btn-primary" type="submit">Crear tutorial</button>
                    @else
                        <h4 class="form-signin-heading text-left" style="margin-top: 40px;">Editar tutorial</h4>
                        <div id="notificationMsg" style="height: 65px;margin-top: -80px;"></div>
                        <input id="email" class="form-control" placeholder="Nombre" required="" autofocus="" type="text">
                        <textarea style="margin-top: 20px;" placeholder="Descripción" class="form-control" id="exampleTextarea" rows="3"></textarea>
                        <button onclick="btn_tutorial_edit({{$tutorial->id}}" style="margin-top: 20px;width:auto" class="btn btn-primary" type="submit">Editar tutorial</button>
                    @endif
            </div>
            @endif
           
        </div>
    </div>
</div>
@stop