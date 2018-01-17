@extends('layout')
@section('page')

{{HTML::script('js/jquery.dataTables.min.js')}}
<script type="text/javascript">
var table;
function btn_tutorial_remove(id){
        $.ajax({
            url: "{{ route('tutorial.delete') }}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { id : id },
            dataType: 'JSON',
            success: function (data) {
                console.log(data.response);
                if(data.response && data.response == "OK"){
                    table.row('.selected').remove().draw( false );
                } else if(data.error){
                    document.getElementById("errorMsg").innerHTML = 
                    '<div class="alert alert-dismissible alert-danger">\
                    <button type="button" class="close" data-dismiss="alert">&times;</button>\
                    <strong>Error:</strong><br>' + data.error + '.\
                    </div>'
                }    
            }
        });
}

function loadTutorialAdmin() {
   var tutos_admin_content = document.getElementById("tutos_admin_content");
   if(tutos_admin_content.innerHTML == ''){
    tutos_admin_content.innerHTML = '<br><h5>Tutoriales</h5><br>\
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
            <div id="errorMsg" style="width: 320px;"></div>
        </center>
        <button onclick="loadTutorialAdmin()" class="btn btn-success" type="submit">Administrar tutoriales</button>
        <div id="tutos_admin_content"></div>    
    </div>
</div>
@stop