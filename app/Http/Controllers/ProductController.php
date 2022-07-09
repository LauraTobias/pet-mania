<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('products.product-index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required'],
            'quantity' => ['required', 'int'],
            'photo' => ['required','image']
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/'; 
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'photo' => $request->photo
        ]);

        return redirect(RouteServiceProvider::HOME);
    }

    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }
}
