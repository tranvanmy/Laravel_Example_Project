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
                <form role="form" @submit.prevent='createUser'>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <div class="form-group" v-bind:class="{ 'has-error': formErrors && formErrors.name }">
                                <input type="text" class="form-control" id="name" v-model='user.name' placeholder="text">
                                <span  v-if="formErrors && formErrors.name" class="help-block">@{{ formErrors.name[0] }}</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <div class="form-group" v-bind:class="{ 'has-error': formErrors && formErrors.name }">
                                <input type="email" class="form-control" id="email" v-model="user.email" placeholder="Enter email">
                                <span v-if="formErrors && formErrors.email" class="help-block">
                                    @{{ formErrors.email[0] }}
                                </span>
                            </div>
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
