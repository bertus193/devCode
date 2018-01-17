@extends('layout')
@section('page')

<div class="inner-body">
    <div class="inner-box">
        <h2>Cursos</h2><br>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
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