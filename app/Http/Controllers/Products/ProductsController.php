<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\products;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class ProductsController extends Controller
{

    public function index()
    {
        $products =   products::all();
        return view('Products', compact("products"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>  'required|string|min:2',
            'desc' =>  'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //save image
        $products = new products($request->input());
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/Products';
            $file->move($destinationPath, $fileName);
            $products->image = $fileName;
        } else {
            $fileName = 'no_image';
        }
        $products->save();
        return redirect()->route('Products')
            ->with('success', 'Products added successfully.');
    }



    public function update(Request $request)
    {
        $request->validate([
            'name' =>  'required|string|min:2',
            'desc' =>  'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $productsUpdate = products::find($modal_id);
        $productsUpdate->name = $request->get('name');
        $productsUpdate->desc = $request->get('desc');

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/Products';
            $file->move($destinationPath, $fileName);
            $productsUpdate->image =  $fileName;
        } else {
            $fileName = 'no_image';
        }
        $productsUpdate->save();
        $productsUpdate->update();

        return redirect()->route('Products')
            ->with('success', 'Products   updated successfully');
    }

    public function destroy($id)
    {
        products::find($id)->delete();
        return redirect()->route('Products')
            ->with('success', 'Products   deleted successfully');
    }
}
