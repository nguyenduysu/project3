@extends('admin.master')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="col-lg-7" style="padding-bottom:120px">
                    @include('admin.blocks.message')
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <label>Category Parent</label>
                        <select class="form-control" name="cate_id">
                            <option value="">Please Choose Category</option>
                            {{ cate_parent($cates, 0, "--", old('cate_id')) }}
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" value="{!! old('name') !!}" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="price" value="{!! old('price') !!}" placeholder="Please Enter Price" />
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 0;">
                            <label>Size - Quantity</label>
                            <button type="button" class="btn btn-primary" id="addFormSizeQuantity">Add More Form Size Quantity</button>
                        </div>
                        <div class="form-group" id="formSizeQuantity">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Size</label>
                                <input class="form-control" name="size[]" placeholder="Please Enter Quantity" />
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label>Quantity</label>
                                <input class="form-control" name="quantity[]" placeholder="Please Enter Size" />
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <br><br>
                        <label>Intro</label>
                        <textarea id="demo" class="form-control ckeditor" rows="3" name="intro">{!! old('intro') !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="demo" class="form-control ckeditor" rows="3" name="content">{!! old('content') !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" value="{!! old('image') !!}" name="image">
                    </div>
                    <div class="form-group">
                        <label>Product Keywords</label>
                        <input class="form-control" name="keywords" value="{!! old('keywords') !!}" placeholder="Please Enter Category Keywords" />
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea id="demo" class="form-control ckeditor" name="description" rows="3">{!! old('description') !!}</textarea>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="submit" class="btn btn-primary form-control">Thêm sản phẩm</button>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="reset" class="btn btn-primary form-control">Làm mới</button>
                    </div>
                </div>
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    @for($i = 1; $i <= 10; $i++)
                        <div class="form-group">
                            <label>Images Product Detail {!! $i !!}</label>
                            <input type="file" value="" name="imagesProductDetail[]">
                        </div>
                    @endfor
                </div>
            </form>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()
