<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categorys= Category::all();
        return view('Category.index',compact("Categorys"));
    }
    public function Create(){
        return view("Category.create");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $VidedData = $request->validate([
            "name"=>"required |min:5|max:50 |string",
            "description"=>"required|min:10 |max:255| string",
        ]);

        if ($VidedData) {
            Category::create($VidedData);
            return redirect()->route('Categorys')->with("success",'add Category Sucsses');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Category= Category::find($id);
        if(!$Category){
            return abort(404);
        }
        return view('Category.show',compact("Category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $VidedData = $request->validate([
            "name"=>"required |min:5|max:50 |string",
            "description"=>"required|min:10 |max:255| string",
        ]);
        $Category= Category::find($id);
        if(!$Category){
            return abort(404);
        }
        $Category->update($VidedData);
        return redirect()->route("Categorys")->with("success",'update Category Sucsses');

    }
    public function edit($id){
        $Category= Category::find($id);
        return view("Category.edit",compact("Category"));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Category= Category::find($id);
        $Category->delete($Category);
        return redirect()->route("Categorys")->with("success",'Removed Category Sucsses');


    }
}
