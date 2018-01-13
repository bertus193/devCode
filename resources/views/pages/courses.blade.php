@extends('layout')
@section('page')

<style>
.dataTables_length{
    display: inline-block;
}
.dataTables_filter{
    display: inline-block;float: right;
}

#courses_info, #courses_paginate{
    text-align: center;
}
#courses_paginate *{
    margin: 3px;
    cursor: pointer;
}

</style>

<div class="inner-body">
    <div class="inner-box">
        <h2>Cursos</h2><br>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <div class="container">
        <table id="courses" class="table table-hover table-condensed">
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
            oTable = $('#courses').DataTable({
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