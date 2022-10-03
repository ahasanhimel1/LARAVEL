<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnValue;

class ProductController extends Controller
{
    private $product, $products;
    public function add()
    {
        return view('product.add');
    }

    public function manage()
    {
        $this->products=Product::all();
        return view('product.manage',['products'=>$this->products]);
    }

    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect('/add-product')->with('message','Product info save successfully.');
    }

    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('product.edit',['product'=>$this->product]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message','Product Update Successfully.');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message','Product Delete Successfully.');
    }
}
