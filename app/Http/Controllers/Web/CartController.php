<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Cart;
use Session;
use App\Models\User;

class CartController extends Controller
{
    public function showIndexShop()
    {
        $users = DB::table('users')->get();
        $products = DB::table('products')->get();
        return view('web.shop.index', compact('products'));
    }

    public function listCart(){
        return view('web.shop.listCart');
    }


    public function AddCart(Request $req, $id)
    {
        $products = DB::table('products')
            ->where('id', $id)
            ->first();
        if ($products != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($products, $id);

            $req->Session()->put('Cart', $newCart);
        }
        return view('web.shop.layout.cart');
    }


    public function deleteItemCart(Request $req, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);

        if(Count($newCart->products) > 0 ){
            $req->Session()->put('Cart', $newCart);
        }else {
            $req->Session()->forget('Cart');
        }
        return view('web.shop.layout.cart');
    }

    public function deleteListItemCart(Request $req, $id)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItemCart($id);

        if(Count($newCart->products) > 0 ){
            $req->Session()->put('Cart', $newCart);
        }else {
            $req->Session()->forget('Cart');
        }
        return view('web.shop.layout.list-cart');
    }

    public function saveListItemCart(Request $req, $id, $quanty)
    {
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->updateItemCart($id, $quanty);

        $req->Session()->put('Cart', $newCart);
        return view('web.shop.layout.list-cart');
    }
}
