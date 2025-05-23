<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::paginate(10);
        return view('product.products', ['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                // យក Categories ទាំងអស់ និង Products របស់ពួកវា
        $category = category::all();
        return view('product.create_product', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'price' => $request->price,
            'qty' => $request->qty,
            'category_id' => $request->category_id,
        ]);
        return redirect(route('product.index'));
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $item = Product::with('category')->findOrFail($id);
        $category = category::all();
     return view('product.EditProduct', ['item'=>$item, 'category'=>$category]);
    }



    public function update(Request $request, $id)
    {
        $item = Product::with('category')->findOrFail($id);
        $category = category::all();
        if(!$category){
            return 'No data';
        }
        //dd($request->all());
        $item->name = $request->name;
        $item->slug = $request->slug;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->qty = $request->qty;
        $item->category_id = $request->category_id;
        $item->save();
        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Product::with('category')->findOrFail($id);
        $category = category::all();
        if(!$category){
            return 'No data';
        }
        $item->delete($item->$id);
        return redirect()->route('product.index');
    }
}
