@extends('admin.master')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Deal
                        <small>Detail</small>
                    </h1>
                    @include('admin.blocks.message')
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Keyword</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Size</th>
                        <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $stt = 0; ?>
                    @foreach($products as $product)
                        <?php $stt++; ?>
                        <tr class="odd gradeX" align="center">
                            <td>{!! $stt !!}</td>
                            <td>{!! $product->keywords !!}</td>
                            <td>{!! $product->name !!}</td>
                            <td><img width="30%" src="{{ asset('resources/upload/imageProduct/'.$product->image) }}" alt=""></td>
                            <td>{!! number_format($product->price,0,",",".") !!} VNĐ</td>
                            <td>{!! $product->size !!}</td>
                            <td>{!! $product->quantity !!}</td>
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
