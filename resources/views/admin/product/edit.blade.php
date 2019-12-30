@extends('admin.master')

@section('content')
<style>
    .icon_del {
        position: relative;
        top: 20px;
        right: -260px;
    }
    #addImages {margin-bottom: 15px;}
</style>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <form action="" method="POST" name="formEditProduct" enctype="multipart/form-data">
                <div class="col-lg-7" style="padding-bottom:120px">
                    @include('admin.blocks.message')
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <label>Category Parent</label>
                        <select class="form-control" name="cate_id">
                            <option value="">Please Choose Category</option>
                            {{ cate_parent($cates,0,"--",$product['cate_id'])}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" value="{!! old('name', isset($product) ? $product['name'] : null) !!}" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="price" value="{!! old('price', isset($product) ? $product['price'] : null) !!}" placeholder="Please Enter Price" />
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input class="form-control" name="quantity" value="{!! old('quantity', isset($product) ? $product['quantity'] : null) !!}" placeholder="Please Enter Quantity" />
                    </div>
                    <div class="form-group">
                        <label>Size</label>
                        <input class="form-control" name="size" value="{!! old('size', isset($product) ? $product['size'] : null) !!}" placeholder="Please Enter Size" />
                    </div>
                    <div class="form-group">
                        <label>Intro</label>
                        <textarea id="demo" class="form-control ckeditor" rows="3" name="intro">{!! old('intro', isset($product) ? $product['intro'] : null) !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="demo" class="form-control ckeditor" rows="3" name="content">{!! old('content', isset($product) ? $product['content'] : null) !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <img src="{!! asset('resources/upload/imageProduct/'.$product['image']) !!}" alt="" width="150px"> <br><br>
                        <input type="file" name="image">
                        <input type="hidden" value="{!! old('image', isset($product) ? $product['image'] : null) !!}" name="current_image">
                    </div>
                    <div class="form-group">
                        <label>Product Keywords</label>
                        <input class="form-control" name="keywords" value="{!! old('keywords', isset($product) ? $product['keywords'] : null) !!}" placeholder="Please Enter Category Keywords" />
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea id="demo" class="form-control ckeditor" name="description" rows="3">{!! old('description', isset($product) ? $product['description'] : null) !!}</textarea>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="submit" class="btn btn-primary form-control">Lưu sản phẩm</button>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="reset" class="btn btn-primary form-control">Làm mới</button>
                    </div>
                </div>
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    @foreach($productImageDetail as $key => $productImageDetail)
                        <div class="form-group" id="hinh{!! $key !!}">
                            <a href="javascript:void(0)" type="button" id="del_img_demo" class="btn btn-danger btn-circle icon_del del_img_demo"><i class="fa fa-times"></i></a>
                            <img src="{!! asset('resources/upload/imageProduct/imageDetail/'.$productImageDetail['image']) !!}" id="{!! $key !!}" idHinh="{!! $productImageDetail['id'] !!}" alt="" width="90%" style="margin-bottom: 5%;" >
                        </div>
                    @endforeach
                    <br>
                    <button type="button" class="btn btn-primary" id="addImages">Add Images</button>
                    <div id="insertMoreButtonImageDetail"></div>
                </div>

            <form>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()
