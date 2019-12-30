<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\ProductSizeQuantity;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use File;
use Request;

use App\Cate;
use App\Product;
use App\ProductImage;

class ProductController extends Controller
{
    public function getList()
    {
        $products = Product::select('id', 'name', 'price', 'cate_id', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
        $data = array(
            'products' => $products
        );
        return view('admin.product.list', $data);
    }

    public function getAdd()
    {
        $cates = Cate::select('id', 'name', 'parent_id')->get()->toArray();
        $data = array(
            'cates' => $cates
        );
        return view('admin.product.add', $data);
    }

    public function postAdd(ProductRequest $request)
    {
        $path_image = 'resources/upload/imageProduct/';
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();

        $product = new Product;

        $product->name = $request->name;
        $product->alias = Str::slug($request->name, '-');;
        $product->price = $request->price;
        $product->intro = $request->intro;
        $product->content = $request->content;
        $product->image = $image_name;
        $product->keywords = $request->keywords;
        $product->description = $request->description;
        $product->user_id = Auth::user()->id;
        $product->cate_id = $request->cate_id;

        $product->save();

        $image->move($path_image, $image_name);

        $product_id = $product->id;

        foreach ($request->size as $key => $size) {
            $productSizeQuantity = new ProductSizeQuantity();
            foreach ($request->quantity as $keyTwo => $quantity) {
                if($keyTwo == $key) {
                    $productSizeQuantity->product_id = $product_id;
                    $productSizeQuantity->size = $size;
                    $productSizeQuantity->quantity = $quantity;
                    $productSizeQuantity->save();
                    break;
                }
            }
        }

        if ($request->has('imagesProductDetail')) {
            foreach ($request->file('imagesProductDetail') as $imageDetail) {
                $imageProductDetail = new ProductImage;
                if (isset($imageDetail)) {
                    $imageProductDetail->image = $imageDetail->getClientOriginalName();
                    $imageProductDetail->product_id = $product_id;
                    $imageProductDetail->save();
                    $imageDetail->move('resources/upload/imageProduct/imageDetail/', $imageDetail->getClientOriginalName());
                }
            }
        }
        return redirect()->route('admin.product.getAdd')->with(['flash_level' => 'success', 'flash_message' => 'Thêm dữ liệu thành công']);
    }

    public function getDelete($id)
    {
        $product_detail = Product::find($id)->pimages->toArray();
        foreach ($product_detail as $product_detail) {
            File::delete('resources/upload/imageProduct/imageDetail/' . $product_detail['image']);
        }
        $product = Product::find($id);
        File::delete('resources/upload/imageProduct/' . $product->image);
        $product->delete($id);
        return redirect()->route('admin.product.list')->with(['flash_level' => 'success', 'flash_message' => 'Xóa dữ liệu thành công']);
    }

    public function getEdit($id)
    {
        $cates = Cate::select('id', 'name', 'parent_id')->get()->toArray();
        $product = Product::find($id);
        $productImageDetail = Product::find($id)->pimages->toArray();
        // echo "<pre>";
        // print_r($productImageDetail);
        $data = [
            'cates' => $cates,
            'product' => $product,
            'productImageDetail' => $productImageDetail
        ];
        return view('admin.product.edit', $data);
    }

    public function postEdit($id, Request $request)
    {
        $product = Product::find($id);

        // xu ly image Product
        $path_image = 'resources/upload/imageProduct/';
        $img_current = $path_image . Request::input('current_image');
        if (!empty(Request::file('image'))) {
            $image = Request::file('image');
            $image_name = $image->getClientOriginalName();
            $product->image = $image_name;
            $image->move($path_image, $image_name);
            if (File::exists($img_current)) {
                File::delete($img_current);
            }
        } else {
            echo "No file";
        }

        $product->name = Request::input('name');
        $product->alias = Str::slug(Request::input('name'), '-');;
        $product->price = Request::input('price');
        $product->quantity = Request::input('quantity');
        $product->size = Request::input('size');
        $product->intro = Request::input('intro');
        $product->content = Request::input('content');
        $product->keywords = Request::input('keywords');
        $product->description = Request::input('description');
        $product->user_id = 1;
        $product->cate_id = Request::input('cate_id');

        $product->save();

        // xu ly image detail Product
        $path_imageDetail = 'resources/upload/imageProduct/imageDetail/';
        $images_detail = Request::file('imagesProductDetail');
        if (isset($images_detail)) {
            foreach ($images_detail as $image_detail) {
                $product_image = new ProductImage();
                if (isset($image_detail)) {
                    $product_image->image = $image_detail->getClientOriginalName();
                    $product_image->product_id = $id;
                    $image_detail->move($path_imageDetail, $image_detail->getClientOriginalName());
                    $product_image->save();
                }
            }
        }
        return redirect()->route('admin.product.list')->with(['flash_level' => 'success', 'flash_message' => 'Sửa dữ liệu thành công']);
    }

    public function getDeleteImgDetailByAjax($id)
    {
        if (Request::ajax()) {
            $idHinh = (int)Request::get('idHinh');
            $image_detail = ProductImage::find($idHinh);
            if (!empty($image_detail)) {
                $img = 'resources/upload/imageProduct/imageDetail/' . $image_detail->image;
                if (File::exists($img)) {
                    File::delete($img);
                }
                $image_detail->delete();
            }
            return "Success";
        }
    }
}
