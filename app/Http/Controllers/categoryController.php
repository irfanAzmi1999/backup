<?php

namespace App\Http\Controllers;

use App\Models\bullet;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = category::where('role','=','product')->get();
        return view('Admin.manageproduct.productCategory',['posts'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $role)
    {
        dd($role);
        return view('Admin.manageproduct.addProductCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('catTitle');
        $image=$request->file('catImage');
        $bullets = $request->input('content');
        $role = $request->input('role');

        $category = new category;
        $category->name = $title;
        $category->image = $image->getClientOriginalName();
        if ($role == 'product')
        {
            $category->role='product';
        }
        if ($role == 'service')
        {
            $category->role='service';
        }

        $category->save();

        $image->storeAs('public/images/category/'.$category->id,$image->getClientOriginalName());

        foreach ($bullets as $key=>$item) {
            $b = new bullet;
            $b->content = $item;
            $category->bullets()->save($b);
        }

        return redirect()->route('category.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
