@extends('admin.master')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Deal
                        <small>List</small>
                    </h1>
                    @include('admin.blocks.message')
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Info Customer</th>
                        <th>Price</th>
                        <th>Status Payment</th>
                        <th>Status</th>
                        <th>Salesman</th>
                        <th>Created At</th>
                        <th>Note</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($deals as $deal)
                        <tr class="odd gradeX" align="center">
                            <td>S{!! $deal->id !!}</td>
                            <td>
                                {!! $deal->name !!}<br>
                                {!! $deal->phone !!}<br>
                                {!! $deal->email !!}<br>
                                {!! $deal->street !!}<br>
                                {!! $deal->district !!}<br>
                                {!! $deal->city !!}
                            </td>
                            <td>{!! number_format($deal->totalPrice,0,",",".") !!} VNĐ</td>
                            <td style="position: relative;">
                                <div class="status-payment" id="status-payment-{{$deal->id}}">
                                    @if($deal->status_payment == 0)
                                        {!! 'Chưa thanh toán' !!}
                                    @elseif($deal->status_payment == 1)
                                        {!! 'Đã thanh toán' !!}
                                    @endif
                                </div>
                                <input type="hidden" value="{{ $deal->status_payment }}">
                                <div class="edit-button-status-payment" id="edit-button-status-payment-{{$deal->id}}" style="cursor: pointer; position: absolute; bottom: 0; padding: 0 8% 0 30%;">
                                    <i class="fa fa-pencil fa-fw" style="bottom: 0;"></i> <div>Edit</div>
                                </div>
                                <div class="change_status_payment unvisible">
                                    <select class="form-control contentStatus">
                                        <option value="0"
                                            @if($deal->status_payment == 0)
                                                {{ 'selected' }}
                                                >Chưa thanh toán</option>
                                            @else
                                                <option value="0">Chưa thanh toán</option>
                                            @endif
                                        <option value="1"
                                            @if($deal->status_payment == 1)
                                            {{ 'selected' }}
                                            >Đã thanh toán</option>
                                            @else
                                                <option value="1">Đã thanh toán</option>
                                            @endif
                                    </select>
                                    <i class="btn btn-success btn-sm glyphicon glyphicon-ok done-status-payment"></i>
                                    <input type="hidden" value="{!! $deal->id !!}">
                                    <input type="hidden" value="{!! Auth::user()->id !!}">
                                </div>
                            </td>
                            <td style="position: relative;">
                                <div class="status" id="status-{{$deal->id}}">
                                    @if($deal->status == 0)
                                        {!! 'Đang trong kho' !!}
                                    @elseif($deal->status == 1)
                                        {!! 'Xuất kho, đang vận chuyển' !!}
                                    @elseif($deal->status == 2)
                                        {!! 'Đã giao nhận hàng' !!}
                                    @endif
                                </div>
                                <input type="hidden" value="{{ $deal->status }}">
                                <div class="edit-button-status" style="cursor: pointer; position: absolute; bottom: 0; padding: 0 8% 0 30%;">
                                    <i class="fa fa-pencil fa-fw"></i><div>Edit</div>
                                </div>
                                <div class="change_status unvisible">
                                    <select class="form-control contentStatus">
                                        <option value="0"
                                            @if($deal->status == 0)
                                                {{ 'selected' }}
                                            >Đang trong kho</option>
                                            @else
                                                <option value="0">Đang trong kho</option>
                                            @endif
                                        <option value="1"
                                            @if($deal->status == 1)
                                                {{ 'selected' }}
                                            >Xuất kho, đang vận chuyển</option>
                                            @else
                                                <option value="1">Xuất kho, đang vận chuyển</option>
                                            @endif
                                        <option value="2"
                                            @if($deal->status == 2)
                                                {{ 'selected' }}
                                            >Đã giao nhận hàng</option>
                                            @else
                                            <option value="2">Đã giao nhận hàng</option>
                                            @endif
                                    </select>
                                    <i class="btn btn-success btn-sm glyphicon glyphicon-ok done-status"></i>
                                    <input type="hidden" value="{!! $deal->id !!}">
                                    <input type="hidden" value="{!! Auth::user()->id !!}">
                                </div>
                            </td>
                            <td id="td-salesman-{{$deal->id}}">
                                <?php $salesman = DB::table('users')->select('username')->where('id', $deal->sale_id)->first();?>
                                @if(!empty($salesman->username))
                                    {!! $salesman->username !!}
                                @else
                                    {!! 'Trống' !!}
                                @endif
                            </td>
                            <td>{!! $deal->created_at !!}</td>
                            <td>{!! 'Khách không nhận hàng' !!}</td>
                            {{--                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.product.getDelete', $deal->id) !!}" onclick="return xacnhanxoa('Bạn có chắc chắn muốn xóa sản phẩn này?')"> Delete</a></td>--}}
                            <td class="center"><i class="fa fa-info"></i><br> <a href="{!! URL::route('admin.deal.detail', $deal->id) !!}">Detail</a></td>
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

