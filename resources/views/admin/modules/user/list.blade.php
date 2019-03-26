@extends('admin.master')
@section('style')
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">UserList</h3>
                    <div class="pull-right">
                        <div class="dt-buttons btn-group">
                            <a href="{{ route('admin.user.create') }}" class="btn btn-primary btn-flat action-item">
                                
                                <i class="fa fa-plus"></i> &nbsp;
                                <span>
                                    Create
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div id="list_user" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>
                        <div class="row" v-if="users">
                            <div class="col-sm-12">
                                <table id="example2" class="display nowrap dataTable dtr-inline collapsed" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Avatar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="user in users">
                                            <td>@{{ user.id }}</td>
                                            <td>@{{ user.name }}</td>
                                            <td>@{{ user.email }}</td>
                                            <td>@{{ user.avatar }}</td>
                                            <td class="action-table">
                                                <a href="{!! route('admin.user.edit', 1) !!}" class="btn btn-default btn-edit btn-xs btn-flat">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger btn-xs member__action bnt-delete btn-flat">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
</section>
@endsection
@section('script')
<script src="{{ asset('/js/admin/user/list.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#example2').DataTable();
    });
</script>
@endsection
