<?php

namespace App\Http\Controllers\Services_Items;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\service_item;
use App;
use App\packages;
use App\services_packages;

use App\service_benfits;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;
use Illuminate\Support\Arr;

class Services_ItemsSubmitController extends Controller
{

    public function index()
    {
        $packages = packages::all();
        $service_item =   service_item::all();
        return view('ServicesItems')->with(compact("service_item"))->with(compact("packages"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:2',
            'desc' => 'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detal_title' => 'required|string|min:2',
            'detal_desc' => 'required|string|min:2',
            'price' => 'required',
        ]);



        //save image
        $service_item = new service_item($request->input());
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/service_items';
            $file->move($destinationPath, $fileName);
            $service_item->image =  $fileName;
        } else {
            $fileName = 'no_image';
        }
        $service_item->save(); //save parent table then save child
        $service_item->packages()->attach($request->packages_id);
        $service_item->save();


        return redirect()->route('Services_Items')->with('success', 'Services Items added successfully.');
    }


    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:2',
            'desc' => 'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detal_title' => 'required|string|min:2',
            'detal_desc' => 'required|string|min:2',
            'price' => 'required',
        ]);

        $modal_id = (int)$request->input('modal_input_id_edit');
        $itemsUpdate = service_item::find($modal_id);
        $itemsUpdate->title = $request->get('title');
        $itemsUpdate->desc = $request->get('desc');
        $itemsUpdate->detal_title = $request->get('detal_title');
        $itemsUpdate->detal_desc = $request->get('detal_desc');
        $itemsUpdate->price = $request->get('price');

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/service_items';
            $file->move($destinationPath, $fileName);
            $itemsUpdate->image =  $fileName;
            $itemsUpdate->image =  $fileName;
        } else {
            $fileName = 'no_lmage';
        }


        $itemsUpdate->update();

        App\services_packages::where('service_item_id', $modal_id)->delete();


        $itemsUpdate->packages()->attach($request->packages_id);
        $itemsUpdate->save();


        return redirect()->route('Services_Items')
            ->with('success', 'Services Items updated successfully');
    }

    public function destroy($id)
    {
        services_packages::where('service_item_id', $id)->delete();
        service_benfits::where('service_item_id', $id)->delete();

        service_item::find($id)->delete();
        return redirect()->route('Services_Items')
            ->with('success', 'Services Items  deleted successfully');
    }
}
