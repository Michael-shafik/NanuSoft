<?php

namespace App\Http\Controllers\Products_Items;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\product_item;
use App\products;
use App\categories;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;


class Products_ItemsController extends Controller
{
    public function index()
    {
        $product_item = product_item::all();

        $categories = categories::all();

        return view('Products_Items')->with(compact("product_item"))
            ->with(compact("categories"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'desc' => 'required|string|min:2',
            'price' => 'required|int|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'catageores_id' => 'required',

        ]);
        //save image
        $product_item = new product_item($request->input());
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/product_item';
            $file->move($destinationPath, $fileName);
            $product_item->image = $destinationPath . '/' . $fileName;
        } else {
            $fileName = 'no_image';
        }
        $product_item->save();

        return redirect()->route('Products_Items')
            ->with('success', 'Products Items added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'desc' => 'required|string|min:2',
            'price' => 'required|int|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'catageores_id' => 'required',
        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $ProitemsUpdate = product_item::find($modal_id);
        $ProitemsUpdate->name = $request->get('name');
        $ProitemsUpdate->desc = $request->get('desc');
        $ProitemsUpdate->price = $request->get('price');
        $ProitemsUpdate->catageores_id = $request->get('catageores_id');

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/product_item';
            $file->move($destinationPath, $fileName);
            $ProitemsUpdate->image = $destinationPath . '/' . $fileName;
        } else {
            $fileName = 'no_lmage';
        }
        $ProitemsUpdate->save();
        $ProitemsUpdate->update();
        return redirect()->route('Products_Items')
            ->with('success', 'Products Items updated successfully');
    }

    public function destroy($id)
    {
        product_item::find($id)->delete();
        return redirect()->route('Products_Items')
            ->with('success', 'Products Items deleted successfully');
    }
}
