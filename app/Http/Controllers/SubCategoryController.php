<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubCategories;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('SubCategory.CreateSubCategory',[
            'categories'=> Categories::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=> 'required|string',
            'subcategory_name'=> 'required|string',

            //'category_slug'=> 'required|string|alpha',

            'is_active'=> 'nullable',
        ]);

        $category=Categories::all();
        //$id=$request->where('name', $request->category_name )->value('categorie_id');
        //$id = Categories::where('name', $request->category_name)->value('id');
        SubCategories::create([
            'categorie_id'=> $request->category_name,
            'name'=> $request->subcategory_name,
            'slug'=> Str::slug($request->subcategory_name),
            'is_active'=> $request->filled('is_active'),
        ]);
        Session::flash('status', 'Category created successfully!');
        return back() ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
