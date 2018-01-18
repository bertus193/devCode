@extends('layout')
@section('page')
{{HTML::script('js/jquery.dataTables.min.js')}}

<div class="inner-body">
    <div class="inner-box">
        <h2>Cursos</h2><br>
        <div class="container">
        <table id="datatable" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
        </table>
        </div>

        <script type="text/javascript">
        $(document).ready(function() {
            oTable = $('#datatable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('datatable.getCourses') }}",
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'},
                ]
            });
        });
        </script>
    </div>
</div>
@stop