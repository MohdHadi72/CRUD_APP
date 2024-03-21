<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        return view('index', ['product' => products::get()]);
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

    public function deleteproduct($id)
    {
        $product = products::find($id);
        $product->delete();
        return redirect()->back()->with('delete', 'Your data Delete SuccessFull !');
    }

    public function EditProduct($id)
    {
        $product = products::find($id);
        return view('Edit', compact('product'));
    }

    public function UpdateProduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $product = products::find($id);

        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }


        $product->name = $request->name;
        $product->description = $request->description;


        $product->save();


        return back()->with('Edit', 'Your Data SuccessFully Update ! 🫡');
    }
}
