<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = category::query(); //DOM SQL

        if($request->input('search')){
            $category->where('name', 'like', '%'.$request->input('search').'%');
        }

        $category = $category->orderBy('id','desc')->paginate(10);
        return view('category.category',['category' => $category]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create_category');
    }

    public function store(Request $request)
    {
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('image'), $filename);
        }

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'status' => $request->status,
            'image' =>$filename ?? "",
        ]);
        return redirect(route('category.index'))->with('successed','Create succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::find($id);
        if(!$category){
            return 'No data';
        }
        return view('category.update_category', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if(!$category){
            return 'No data';
        }
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->save();

        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if(!$category){
            return 'No data';
        }
        $category->delete($category->$id);
        return redirect(route('category.index'));
    }
}
