<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Database\Factories\CategoryFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products =Product::all();
        $Catogrys =Category::all();
        return view("Product.index",compact('Products',"Catogrys"));
    }
    public function create(){
        $Catogrys =Category::all();
        return view("Product.create",compact("Catogrys"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ViledData =$request->validate([
            "name"=> "required |string|min:5 |max:100",
            "description"=> "required |string ",
            "price"=> "required|numeric",
            "quantity"=>"required |integer",
            "category_id"=>"required " ,
            "image"=>" required|image |mimes:jpg,jpeg,png",

        ]);
        $Image =NULL;
                

        if ($request->hasFile("image")) {
            $File = $request->file("image");
            $Imagename = time() . "." . $File->getClientOriginalExtension();
            $File->move(public_path("ProductsImages/"), $Imagename);
            $Image = "ProductsImages/" . $Imagename;
        }

        $ViledData["image"] =$Image;
        Product::create($ViledData);
        return redirect()->route("Products")->with("success","Add Product Succefully");
        

        
        
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Product = Product::find($id);
         $Catogrys =Category::all();
        if (!$Product) {
            abort(404);
        }
        return view("Product.show",compact("Product","Catogrys"));
    }
    public function edit($id){
        $Product = Product::find($id);
        $Catogrys =Category::all();
        if (!$Product) {
            abort(404);
        }
        return view("Product.edit", compact("Product","Catogrys"));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Product = Product::findOrFail($id);
        $ViledData =$request->validate([
            "name"=> "required |string|min:5 |max:100",
            "description"=> "required |string ",
            "price"=> "required|numeric",
            "quantity"=>"required |integer",
            "category_id"=>"required " ,
            "image"=>" nullable |image |mimes:jpg,jpeg,png",

        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ProductsImages/'), $imageName);
            $ViledData["image"] = 'ProductsImages/' . $imageName;
        }
        $Product->update($ViledData);

     return redirect()->route("Products")->with("success","Update Product Succefully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Product = Product::find($id);
        $Product->delete();
        return redirect()->route("Products")->with("success","Delete Product Succefully");
    }
}
