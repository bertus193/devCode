@extends('admin')
@section('adminPage')

{{HTML::script('js/jquery.dataTables.min.js')}}
<script type="text/javascript">
function btn_tutorial_create(){
    var tutorialData = JSON.parse(JSON.stringify(
    {
        'name': $('input[id=name]').val(), 
        'description': $('textarea[id=description]').val()
    }));
    if(tutorialData.name && tutorialData.description){
        $.ajax({
            url: "{{ route('tutorial.post') }}",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: tutorialData,
            dataType: 'JSON',
            success: function (data) {
                if(data.response && data.response == "OK"){
                    publicSuccessMsg("Tutorial creado correctamente")
                } else if(data.error){
                    publicErrorMsg(data.error);
                }    
            }
        });
    }
    else{
        publicErrorMsg("Los campos están vacíos");
    }
}
function btn_tutorial_edit(id){
    var tutorialData = JSON.parse(JSON.stringify(
    {
        'name': $('input[id=name]').val(), 
        'description': $('textarea[id=description]').val()
    }));
    var urlData = "{{ route('tutorial.edit.post', ['id'=> '']) }}" + "/" + id;
    console.log(tutorialData);
    if(tutorialData.name && tutorialData.description){
        $.ajax({
            url: urlData,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: tutorialData,
            dataType: 'JSON',
            success: function (data) {
                console.log(data.response);
                if(data.response && data.response == "OK"){
                    publicSuccessMsg("Tutorial eliminado correctamente")
                } else if(data.error){
                    publicErrorMsg(data.error);
                }    
            }
        });
    }
    else{
        publicErrorMsg("Los campos están vacíos");
    }
}
</script>
        
@if($tutorial == null)
    El tutorial indicado no existe
@else
<div class="text-center">
        @if($tutorial == "new")
            <h4 class="form-signin-heading text-left">Nuevo tutorial</h4>
            <div id="notificationMsg" style=""></div>
            <input id="name" class="form-control" placeholder="Nombre" required="" autofocus="" type="text">
            <textarea id="description" style="margin-top: 20px;" placeholder="Descripción" class="form-control" id="exampleTextarea" rows="3"></textarea>
            <button onclick="btn_tutorial_create()" style="margin-top: 20px;width:auto" class="btn btn-primary" type="submit">Crear tutorial</button>
        @else
            <h4 class="form-signin-heading text-left" style="margin-top: 40px;">Editar tutorial</h4>
            <div id="notificationMsg"></div>
            <input id="name" class="form-control" placeholder="Nombre" required="" autofocus="" type="text" value="{{$tutorial->name}}">
            <textarea id="description" style="margin-top: 20px;" placeholder="Descripción" class="form-control" id="exampleTextarea" rows="3">{{$tutorial->description}}</textarea>
            <button onclick="btn_tutorial_edit({{$tutorial->id}})" style="margin-top: 20px;width:auto" class="btn btn-primary" type="submit">Editar tutorial</button>
        @endif
</div>
@endif

@endsection