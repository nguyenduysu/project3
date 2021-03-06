@extends('admin.master')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>List</small>
                </h1>
                @include('admin.blocks.message')
            </div>
            <!-- /.col-lg-12 -->

            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @php $stt = 0;
                    @endphp
                    @foreach($users as $user)
                        @php $stt++;
                        @endphp
                        <tr class="odd gradeX" align="center">
                            <td>{!! $stt !!}</td>
                            <td>{!! $user['username'] !!}</td>
                            <td>{!! $user['email'] !!}</td>
                            <td>
                                @if ($user['level'] == 1)
                                    Admin
                                @elseif ($user['level'] == 2)
                                    Employer
                                @else
                                    Member
                                @endif
                            </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.user.getDelete', $user['id']) !!}" onclick="return xacnhanxoa('Bạn có chắc chắn muốn xóa người dùng này?')"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.user.getEdit', $user['id']) !!}">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()
