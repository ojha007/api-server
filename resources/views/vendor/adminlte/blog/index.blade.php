@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>BLOG SECTIONS</h1>
@stop

@section('content')
        <div class="box-body">
            <table id="blogs" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>BODY</th>
                    <th>STATUS</th>
                    <th>FEATURED_IMAGE</th>
                    <th>AUTHOR</th>
                    <th>PUBLISHED_ON</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>


@stop
@section('adminlte_js')
    <script>
        $(document).ready(function () {

            $('#blogs').DataTable({
                processing: true,
                serverSide: true,
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'body', name: 'body'},
                    {data: 'status', name: 'status'},
                    {data: 'featured_image', name: 'featured_image'},
                    {data: 'author', name: 'author'},
                    {data: 'published_on', name: 'published_on'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]


            });

        });
    </script>

@stop
