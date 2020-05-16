<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        $viewData = [
            'products' => $products
        ];
        return view('admin.product.index', $viewData);
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }
    public function store(ProductRequest $request)
    {
        $file['name'] = "";
        if ($request->hasFile('avatar')) {
            $file = upload_image('avatar');
        }
        Product::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'category_id' => $request->category_id,
            'price' => $request->price,
            'sale' => $request->sale,
            'avatar' => $file['name'],
            'description' => $request->description,
            'contents' => $request->contents,
        ]);
        return redirect()->back();
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.product.update', compact('product', 'categories'));
    }
    public function update(ProductRequest $request, $id)
    {
        $file['name'] = "";
        if ($request->hasFile('avatar')) {
            $file = upload_image('avatar');
        }
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'category_id' => $request->category_id,
            'price' => $request->price,
            'sale' => $request->sale,
            'avatar' => $file['name'],
            'description' => $request->description,
            'contents' => $request->contents,
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function active($id)
    {
        $product = Product::find($id);
        $product->active = !$product->active;
        $product->save();
        return redirect()->back();
    }

    public function hot($id)
    {
        $product = Product::find($id);
        $product->hot = !$product->hot;
        $product->save();
        return redirect()->back();
    }
}
