<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartProduct;
use App\Cate;
use App\Deal;
use App\Product;
use App\ProductImage;
use App\ProductSizeQuantity;
use App\UserCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Session()->has('cart')) {
//                Session()->forget('cart');
                $cart = $request->session()->get('cart');
                $totalCart = $this->countProductInCart($cart);
                $priceCart = $this->getPriceCart($cart);
            } else {
                $totalCart = 0;
                $priceCart = 0;
            }

            $categories = Cate::select('id', 'name')->get()->toArray();
            $data = array(
                'categories' => $categories,
                'totalCart' => $totalCart,
                'priceCart' => $priceCart
            );
            View::share($data);
            return $next($request);
        });
    }


    public function getAllProduct()
    {
        $products = Product::all()->toArray();
        $data = array(
            'products' => $products,
        );
        return view('user.index', $data);
    }

//    public function getParentCategory($product_id, $parent_id)
//    {
//        $product = Product::find($product_id)->toArray();
//        $category = Cate::find($product['cate_id'])->toArray();
//
//        $categories = array($category);
//        while($parent_id != 0)
//        {
//            $cate = Cate::select('id', 'name', 'parent_id')->where('id', $parent_id)->first()->toArray();
//            array_unshift($categories, $cate);
//            $parent_id = $cate['parent_id'];
//            if($parent_id == 0) {
//                break;
//            }
//        }
//        return $categories;
//    }

    public function getProductById($id)
    {
        $product = Product::find($id)->toArray();
        $category = Cate::find($product['cate_id'])->toArray();
        $productImagesDetail = ProductImage::select('image')->where('product_id', $id)->get()->toArray();
        $relatedProducts = Product::select('id', 'name', 'price', 'image')->where('cate_id', $product['cate_id'])->get()->toArray();

        $parent_id = $category['parent_id'];
        $categories = array($category);
        while ($parent_id != 0) {
            $cate = Cate::select('id', 'name', 'parent_id')->where('id', $parent_id)->first()->toArray();
            array_unshift($categories, $cate);
            $parent_id = $cate['parent_id'];
            if ($parent_id == 0) {
                break;
            }
        }

        $product_size_quantity = DB::table('product_size_quantity as PSQ')
            ->select('PSQ.size', 'PSQ.quantity', 'PSQ.product_id')
            ->join('products as P', 'P.id', '=', 'PSQ.product_id')
            ->where('PSQ.product_id', $id)
            ->get()->toArray();


        $data = array(
            'product' => $product,
            'productImagesDetail' => $productImagesDetail,
            'category' => $category,
            'relatedProducts' => $relatedProducts,
            'categories' => $categories,
            'product_size_quantity' => $product_size_quantity
        );
        return view('user.product-page', $data);
    }

    public function getProductByCategory($id)
    {
        $products = Product::select('id', 'name', 'price', 'image')->where('cate_id', $id)->get()->toArray();
        $category = Cate::find($id)->toArray();

        $parent_id = $category['parent_id'];
        $categories = array($category);
        while ($parent_id != 0) {
            $cate = Cate::select('id', 'name', 'parent_id')->where('id', $parent_id)->first()->toArray();
            array_unshift($categories, $cate);
            $parent_id = $cate['parent_id'];
            if ($parent_id == 0) {
                break;
            }
        }

        $data = array(
            'products' => $products,
            'category' => $category,
            'categories' => $categories
        );
        return view('user.categories', $data);
    }

    public function deQuyCategoryToGetProduct($categories, $parent_id)
    {
        $products = array();
        if(!empty($categories)) {
            foreach ($categories as $category) {
                if($category['parent_id'] == $parent_id) {
                    $categoriesChild = Cate::select('id', 'name', 'parent_id')->where('parent_id', $category['parent_id'])->get()->toArray();
//                    dd($categoriesChild);
                    if(!empty($categoriesChild)) {
                        foreach ($categoriesChild as $categorySubChild) {
                            $cate = Cate::select('id', 'name', 'parent_id')->where('parent_id', $categorySubChild['id'])->get()->toArray();
                            dd($cate);
                            $this->deQuyCategoryToGetProduct($cate, $categorySubChild['id']);
                        }
                    } else {
                        $productsSub = Product::select('id', 'name', 'price', 'image')->where('cate_id', $category['id'])->get()->toArray();
                        array_push($products, $productsSub);
                        dd($products);
                        echo "1 ";
                    }
                }
            }
        }
//        dd($products);
        return $products;
    }

    public function getProductByParentCategory($id)
    {
//        $categoriesChild = array('');
//        $products = array();
//        while (!empty($categoriesChild)) {
//            $categoriesChild = Cate::select('id', 'name', 'parent_id')->where('parent_id', $id)->get()->toArray();
//
//            if (empty($categoriesChild)) {
//                break;
//            } else {
//                $i = 0;
//                while (!empty($categoriesChild)) {
//                    foreach ($categoriesChild as $categoryChild) {
//
//
//                        $categoriesSubChild = Cate::select('id', 'name', 'parent_id')->where('parent_id', $categoryChild['id'])->get()->toArray();
//                        if (empty($categoriesSubChild)) {
//                            $productsSub = Product::select('id', 'name', 'price', 'image')->where('cate_id', $categoryChild['id'])->get()->toArray();
//                            array_push($products, $productsSub);
//                            dd($products);
//                        } else {
//                            $categoryChild = $categoriesSubChild;
//                        }
//                    }
//                    dd($products);
//                    $i++;
//                }
//            }
//
//        }
        $categories = Cate::all()->toArray();

        dd($this->deQuyCategoryToGetProduct($categories, $id));


        $category = Cate::find($id)->toArray();

        $parent_id = $category['parent_id'];
        $categories = array($category);
        while ($parent_id != 0) {
            $cate = Cate::select('id', 'name', 'parent_id')->where('id', $parent_id)->first()->toArray();
            array_unshift($categories, $cate);
            $parent_id = $cate['parent_id'];
            if ($parent_id == 0) {
                break;
            }
        }

        $data = array(
            'products' => $products,
            'category' => $category,
            'categories' => $categories
        );
        return view('user.categories', $data);
    }

    public function countProductInCart($cart) {
        $total = 0;
        foreach($cart as $id => $product) {
            foreach($product as $size => $detail) {
                $total += $detail['quantity'];
            }
        }
        return $total;
    }

    public function getPriceCart($cart) {
        $price = 0;
        foreach($cart as $id => $product) {
            foreach($product as $size => $detail) {
                $price += $detail['quantity'] * $detail['price'];
            }
        }
        return $price;
    }

    public function addProductToCart(Request $request)
    {
        if ($request->ajax()) {
            $product_id = (int)$request->get('product_id');
            $quantity = (int)$request->get('quantity');
            $size = (int)$request->get('size');
            $product = Product::find($product_id);

            $cart = $request->session()->get('cart');

            if(!$cart) {
                $cart = [
                    $product_id => [
                        $size => [
                            'name' => $product->name,
                            'image' => $product->image,
                            'price' => $product->price,
                            'quantity' => $quantity,
                        ]
                    ]
                ];
                $request->session()->put('cart', $cart);
//                $request->session()->flash('flash_level', 'success');
//                $request->session()->flash('flash_message', 'Successful!');
                $request->session()->save();
//                dd(Session()->get('flash_level'));
                $totalCart = $this->countProductInCart($cart);
                $data = [
                    'status' => 'success',
                    'totalCart' => $totalCart
                ];
                return $data;
            }

            if(isset($cart[$product_id][$size])) {
                $cart[$product_id][$size]['quantity'] = $quantity;
                $request->session()->put('cart', $cart);
//                    $request->session()->flash('flash_level', 'success');
//                    $request->session()->flash('flash_message', 'Successful!');
                $request->session()->save();
//                    dd(Session()->get('flash_level'));

                $totalCart = $this->countProductInCart($cart);
                $data = [
                    'status' => 'success',
                    'totalCart' => $totalCart
                ];
                return $data;
            }

            $cart[$product_id][$size] = [
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => $quantity,
            ];
            $request->session()->put('cart', $cart);
//            $request->session()->flash('flash_level', 'success');
//            $request->session()->flash('flash_message', 'Successful!');
            $request->session()->save();
//            dd(Session()->get('flash_level'));

            $totalCart = $this->countProductInCart($cart);
            $data = [
                'status' => 'success',
                'totalCart' => $totalCart
            ];
            return $data;
        }
    }

    public function getCart()
    {
        $cart = Session()->get('cart');
        $categories = Cate::select('id', 'name')->get()->toArray();

        $data = array(
            'cart' => $cart,
//            'categories' => $categories
        );

        return view('user.shopping-cart', $data);
    }

    public function deleteProductInCart( Request $request )
    {
        if($request->ajax())
        {
            $product_id   = $request->get('product_id');
            $product_size = $request->get('product_size');
            $cart         = $request->session()->get('cart');
            unset($cart[$product_id][$product_size]);
            $request->session()->put('cart', $cart);
            $request->session()->save();
            $priceCart = number_format($this->getPriceCart($cart), 0, ",", ".");
            $totalCart = $this->countProductInCart($cart);
            $data      = [
                'status'       => 'success',
                'product_id'   => $product_id,
                'product_size' => $product_size,
                'cart'         => $cart,
                'priceCart'    => $priceCart,
                'totalCart'    => $totalCart
            ];
            return $data;
        }
    }

    public function getCheckOut()
    {
        return view('user.check-out');
    }

    public function postCheckOut(Request $request)
    {
        $this->validate($request,
            [
                'name'     => 'required',
                'street'   => 'required',
                'district' => 'required',
                'city'     => 'required',
                'phone'    => 'required',
            ],
            [
                'name.required'     => 'Xin hãy nhập tên người mua hàng',
                'street.required'   => 'Xin hãy nhập địa chỉ người mua hàng',
                'district.required' => 'Xin hãy nhập địa chỉ quận/huyện người mua hàng',
                'city.required'     => 'Xin hãy nhập địa chỉ tỉnh/thành phố người mua hàng',
                'phone.required'    => 'Xin hãy nhập số điện người mua hàng',
            ]
        );

        $cart       = $request->session()->get('cart');
        $totalPrice = $this->getPriceCart($cart);

        // add Data to Table carts
        $newCart             = new Cart();
        $newCart->totalPrice = $totalPrice;
        $newCart->save();

        // add Data to Table cart_product
        $cartProduct = new CartProduct();
        foreach ($cart as $product_id => $products) {
            foreach ($products as $size => $detail) {
                $product_size_quantity = ProductSizeQuantity::where([
                                                    ['product_id', $product_id],
                                                    ['size', $size]
                                                ])->first();
                $product_size_quantity->quantity = $product_size_quantity->quantity - $detail['quantity'];
                if($product_size_quantity->quantity < 0) {
                    return redirect()->route('getCheckOut')->with(['flash_level' => 'fail', 'flash_message' => 'Số lượng sản phẩm hiện không đủ. Rất xin lỗi quý khách vì điều này!']);
                } else {
                    $product_size_quantity->save();
                }

                $cartProduct             = new CartProduct();
                $cartProduct->cart_id    = $newCart->id;
                $cartProduct->product_id = $product_id;
                $cartProduct->size       = $size;
                $cartProduct->quantity   = $detail['quantity'];
                $cartProduct->save();
            }
        }

        // add Data to Table user_cart
        $userCart          = new UserCart();
        $userCart->user_id = Auth::user()->id;
        $userCart->cart_id = $newCart->id;
        $userCart->save();

        // add Data to Table deals
        $deal                 = new Deal();
        $deal->user_cart_id   = $userCart->id;
        $deal->name           = $request->name;
        $deal->street         = $request->street;
        $deal->district       = $request->district;
        $deal->city           = $request->city;
        $deal->phone          = $request->phone;
        $deal->email          = $request->email;
        $deal->payment        = 0;
        $deal->status_payment = 0;
        $deal->status         = 0;

        $deal->save();

        $request->session()->forget('cart');

        return redirect()->route('getCheckOut')->with(['flash_level' => 'success', 'flash_message' => 'Đặt hàng thành công']);
    }

    public function getAllDealByUserId($user_id)
    {
        $deals = DB::table('deals as D')
            ->select('D.*', 'C.totalPrice')
            ->join('user_cart as UC', 'UC.id', '=', 'D.user_cart_id')
            ->join('carts as C', 'C.id', '=', 'UC.cart_id')
            ->where('UC.user_id', $user_id)
            ->orderBy('created_at', 'DESC')
            ->get()->toArray();

        $data = [
            'deals' => $deals
        ];

        return view('user.dealt', $data);
    }

    public function getDealDetail($id)
    {
        $deal_detail = DB::table('cart_product as CP')
            ->select('CP.product_id', 'CP.size', 'CP.quantity', 'P.price', 'P.name', 'P.image', 'P.keywords')
            ->join('products as P', 'P.id', '=', 'CP.product_id')
            ->join('carts as C', 'C.id', '=', 'CP.cart_id')
            ->join('user_cart as UC', 'UC.cart_id', '=', 'C.id')
            ->join('deals as D', 'D.user_cart_id', '=', 'UC.id')
            ->where('D.id', '=', $id)
            ->get()
            ->toArray();

        $data = [
            'deal_detail' => $deal_detail
        ];

        return view('user.dealt-detail', $data);
    }

    public function changeQuantityProductInCart( Request $request )
    {
        if($request->ajax()) {
            $quantity     = (int)$request->input('quantity');
            $product_id   = (int)$request->input('product_id');
            $product_size = (int)$request->input('product_size');

            $cart = $request->session()->get('cart');

            if ($quantity <= 0) {
                unset($cart[$product_id][$product_size]);
            } else {
                $cart[$product_id][$product_size]['quantity'] = $quantity;
            }
            $request->session()->put('cart', $cart);
            $request->session()->save();

            $totalCart = $this->countProductInCart($cart);
            $priceCart = number_format($this->getPriceCart($cart), 0, ",", ".");
            if ($quantity <= 0) {
                $totalPrice = 0;
            } else {
                $totalPrice = $cart[$product_id][$product_size]['price'] * $quantity;
            }

            $data = [
                'status'       => 'success',
                'quantity'     => $quantity,
                'product_id'   => $product_id,
                'product_size' => $product_size,
                'totalPrice'   => number_format($totalPrice, 0, ",", "."),
                'totalCart'    => $totalCart,
                'priceCart'    => $priceCart,
            ];
            return $data;
        }
    }

    public function postSearch( Request $request )
    {
        $key_search = $request->search;
        $products = DB::table('products as P')
            ->select('P.*')
            ->where('P.name', 'like', '%'.$key_search.'%')
            ->orWhere('P.alias', 'like', '%'.$key_search.'')
            ->paginate(8);

        $data = [
            'products' => $products
        ];

        return view('user.search', $data);
    }
}
