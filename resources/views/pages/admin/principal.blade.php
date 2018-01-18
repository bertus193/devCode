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
var table;
function btn_tutorial_remove(id){
        var urlDelete = "{{ route('tutorial.delete', ['id'=> '']) }}" + '/' + id;
        console.log(urlDelete);
        $.ajax({
            url: urlDelete,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
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
        });
}

function loadTutorialAdmin() {
   var tutos_admin_content = document.getElementById("tutos_admin_content");
   if(tutos_admin_content.innerHTML == ''){
    tutos_admin_content.innerHTML = '<br><h5>Tutoriales</h5>\
    <div style="text-align: right;margin-bottom: 7px;">\
    <form action="{{route("tutorial.edit",["id"=> "new"])}}">\
    <button type="submit" class="btn btn-success" style="padding: 0.35rem 0.75rem;">\
        Nuevo tutorial\
    </button></form></div>\
        <div class="container">\
        <table id="datatable" class="table table-hover table-condensed">\
            <thead>\
                <tr>\
                    <th>ID</th>\
                    <th>Nombre</th>\
                    <th>Descripción</th>\
                    <th></th>\
                    <th></th>\
                </tr>\
            </thead>\
        </table>\
        </div>';
        loadDataTable();
   }
   else{
    tutos_admin_content.innerHTML = '';
   }

}

function loadDataTable(){
    table = $('#datatable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('datatable.getTutorials') }}",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'description', name: 'description'},
            {
                sortable: false,
                "render": function ( data, type, full, meta ) {
                    return '<button id="btn_tutorial_edit" type="button" class="btn btn-primary" style="padding: 0.35rem 0.75rem;"><i class="fa fa-pencil"></i></button>';
                }
            },
            {
                sortable: false,
                "render": function ( data, type, full, meta ) {
                    return '<button onclick="btn_tutorial_remove('+full.id+')" type="button" class="btn btn-danger" style="padding: 0.35rem 0.75rem;"><i class="fa fa-trash"></i></button>';
                }
            }
        ]
    });
}
</script>

        
<div class="inner-body">
    <div class="inner-box">
        <center>
            <h4>Panel de administración</h4>
            <div id="notificationMsg"></div>
        </center>
        <button onclick="loadTutorialAdmin()" class="btn btn-success" type="submit" style="margin-top: 70px;">Administrar tutoriales</button>
        <div id="tutos_admin_content"></div>    
    </div>
</div>
@stop