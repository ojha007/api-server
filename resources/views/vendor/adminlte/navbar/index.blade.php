@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>SITE SETTING</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
                <span class="box-header pull-left">
                        <button type="button" class="btn btn-primary" data-toggle="modal" id="navbar-modal-btn">
                            <i class="fa fa-plus"></i>
                                  Add New
                        </button>
                </span>
        </div>
        <div class="box-body">
            <table id="navbar" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Is-Parent</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="navbar-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Add Menu</h4>
                </div>
                <form method="post" id="createOrUpdateNavbar" action="{{route('admin.navbar.createOrUpdate')}}">
                    <div class="modal-body">

                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Menu Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="is_parent">Select Parent</label>
                                <select id="is_parent" class="form-control">
                                    <option value="0">No Parent</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary createOrUpdateBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('adminlte_js')
    <script>
        $(document).ready(function () {
            $('#navbar').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": '{{route('admin.navbar.data-table')}}',
                    "method": 'get',
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'parent_id', name: 'Is_parent'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]


            });

            $('#navbar-modal-btn').on('click', function () {
                $('.modal-title').html('Add Navbar');
                $('.createOrUpdateBtn').html('save');
                $('#createOrUpdateNavbar').attr('method', 'POST');
                $('#is_parent').html('');
                $.ajax({
                    url: '{{route('admin.navbar.is_parent')}}',
                    method: 'GET',
                    success: function (res) {
                        $.each(res, function (i, item) {
                            $('#is_parent').append('<option value="' + item.id + '">' + item.name + '</option>')
                        });
                        for (let i = 0; i <= res; i++) {

                        }
                        $('#navbar-modal').modal('show');
                    }
                })
            });

            $(' table').on('click', '.editNavbar', function () {
                let slug = $(this).data('title');
                $('.modal-title').html('Update Navbar');
                $('.createOrUpdateBtn').html('Update');
                $('#navbar-modal').modal('show');
                $('#createOrUpdateNavbar').attr('method', 'PATCH')
            })

        });
    </script>

@stop
