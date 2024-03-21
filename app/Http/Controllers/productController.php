<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function createdata()
    {
        return view('create');
    }
    public function storedata(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);


        $product = new products;
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->image = $imageName;


        $product->save();


        return back()->with('success', 'Your Data SuccessFully Sent ! 🫡');
    }

  
}
