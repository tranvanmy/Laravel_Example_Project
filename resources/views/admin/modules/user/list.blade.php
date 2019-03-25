@extends('admin.master')
@section('style')
@endsection
@section('content')
<section class="content">
    <div class="row">
        <section class="col-lg-12 connectedSortable">
            <div class="box box-primary" id="create_user">
                <div class="box-header with-border">
                    <h3 class="box-title">Create User</h3>
                </div>
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</section>
@endsection
@section('script')
    <script src="{{ asset('/js/admin/user.js') }}"></script>
@endsection
