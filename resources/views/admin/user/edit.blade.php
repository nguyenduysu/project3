@extends('admin.master')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User
                        <small>Edit</small>
                    </h1>
                    @include('admin.blocks.message')
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" name="username"
                                   value="{!! old('user', isset($user) ? $user['username'] : null) !!}" disabled/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password"
                                   placeholder="Please Enter Password"/>
                        </div>
                        <div class="form-group">
                            <label>RePassword</label>
                            <input type="password" class="form-control" name="passwordConfirm"
                                   placeholder="Please Enter RePassword"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email"
                                   value="{!! old('user', isset($user) ? $user['email'] : null) !!}"
                                   placeholder="Please Enter Email"/>
                        </div>
                        <div class="form-group">
                            <label>User Level</label>
                            <label class="radio-inline">
                                <input name="level" value="1" type="radio"
                                @if($user['level'] == 1)
                                    checked="checked"
                                @endif
                                >Admin
                            </label>
                            <label class="radio-inline">
                                <input name="level" value="2" type="radio"
                                @if($user['level'] == 2)
                                    checked="checked"
                                @endif
                                >Employer
                            </label>
                            <label class="radio-inline">
                                <input name="level" value="3" type="radio"
                                @if($user['level'] == 3)
                                    checked="checked"
                                @endif
                                >Member
                            </label>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <button type="submit" class="btn btn-primary form-control">Lưu thông tin người dùng</button>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <button type="reset" class="btn btn-primary form-control">Làm mới</button>
                        </div>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection()
