<?php

namespace App\Http\Controllers\Amin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use DB;


class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('admin.product.listProduct', compact('products'));
    }

    public function create()
    {
        return view('admin.product.createProduct');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'price' => 'required',
                'description' => 'required',
                'img' => 'required',
            ]
        );


        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name_file = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            if(strcasecmp($extension, 'jpg') === 0
                || strcasecmp($extension, 'png') === 0
                || strcasecmp($extension, 'jepg') === 0) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("shop/img/products/" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }

                $file->move('shop/img/products', $image);
            }
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->get('description'),
            'img' => $image,
        ]);

        return redirect()->route('admin.product.listProduct')->with('success', 'Thêm sản phẩm thành công! ');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.editProduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'price' => 'required',
                'description' => 'required',
            ]
        );


        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $name_file = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();

            if(strcasecmp($extension, 'jpg') === 0
                || strcasecmp($extension, 'png') === 0
                || strcasecmp($extension, 'jepg') === 0) {
                $image = Str::random(5) . "_" . $name_file;
                while (file_exists("shop/img/products/" . $image)) {
                    $image = Str::random(5) . "_" . $name_file;
                }

                $file->move('shop/img/products', $image);
            }
        }

        $product = Product::find($id);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->get('description'),
            'img' => isset($image) ? $image : $product->img,
        ]);

        return redirect()->route('admin.product.editProduct', $id)->with('success', 'Cập nhật sản phẩm thành công! ');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('admin.product.listProduct')->with('success', 'Xóa sản phẩm thành công! ');
    }
}
