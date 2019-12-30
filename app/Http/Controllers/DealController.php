<?php

namespace App\Http\Controllers;

use App\Deal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DealController extends Controller
{
    public function getList()
    {
        $deals = DB::table('deals as D')
            ->select('D.*', 'C.totalPrice')
            ->join('user_cart as UC', 'UC.id', '=', 'D.user_cart_id')
            ->join('carts as C', 'C.id', '=', 'UC.cart_id')
            ->get()->toArray();

        $data  = [
            'deals' => $deals
        ];
        return view('admin.deal.list', $data);
    }

    public function postUpdate(Request $request)
    {
        if($request->ajax())
        {
            $deal_id        = $request->get('deal_id');
            $status_paymemt = $request->get('status_payment');
            $sale_id        = $request->get('sale_id');

            $deal                 = Deal::find($deal_id);
            $deal->status_payment = $status_paymemt;
            $deal->sale_id        = $sale_id;
            $deal->save();

            $salesman = User::find($sale_id);

            $data = [
                'status'         => 'success',
                'deal_id'        => $deal_id,
                'status_payment' => $status_paymemt,
                'salesman'       => $salesman->username
            ];

            return $data;
        }
    }

    public function postUpdateStatusDeal( Request $request )
    {
        if($request->ajax())
        {
            $deal_id = $request->get('deal_id');
            $status  = $request->get('status');
            $sale_id = $request->get('sale_id');

            $deal          = Deal::find($deal_id);
            $deal->status  = $status;
            $deal->sale_id = $sale_id;
            $deal->save();

            $salesman = User::find($sale_id);

            $data = [
                'status_ajax' => 'success',
                'deal_id'     => $deal_id,
                'status'      => $status,
                'salesman'    => $salesman->username
            ];

            return $data;
        }
    }

    public function getDealDetailById($id)
    {
        $user_cart_id = DB::table('deals')
            ->select('user_cart_id')
            ->where('id', $id)
            ->get()->toArray()[0]->user_cart_id;

        $deal_detail = DB::table('cart_product as CP')
            ->select('CP.product_id', 'CP.size', 'CP.quantity', 'P.price', 'P.name', 'P.image', 'P.keywords')
            ->join('products as P', 'P.id', '=', 'CP.product_id')
            ->join('carts as C', 'C.id', '=', 'CP.cart_id')
            ->join('user_cart as UC', 'UC.cart_id', '=', 'C.id')
            ->where('UC.id', '=', $user_cart_id)
            ->get()
            ->toArray();

        $data = [
            'products' => $deal_detail
        ];

        return view('admin.deal.detail', $data);
    }
}
