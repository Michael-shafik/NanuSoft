<?php

namespace App\Http\Controllers\Packages;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\packages;
use App\service_item;
use App;
use App\package_feature;
use Facade\Ignition\Solutions\MissingPackageSolution;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class PackagesController extends Controller
{
    public function index()
    {
        $Packages  =   packages::all();
        $sevicesItems = service_item::all();
        return view('Packages')->with(compact("Packages"))->with(compact("sevicesItems"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'price' => 'nullable|min:1',
        ]);

        packages::create($request->all());
        return redirect()->route('Packages')
            ->with('success', 'Services benfits added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'price' => 'nullable|min:1',
        ]);

        $modal_id = (int)$request->input('modal_input_id_edit');
        $packages =  packages::find($modal_id);
        $packages->update($request->all());

        return redirect()->route('Packages')
            ->with('success', 'Services benfits updated successfully');
    }

    public function destroy($id)
    {
        package_feature::where('package_id', $id)->delete();
        packages::find($id)->delete();
        return redirect()->route('Packages')
            ->with('success', 'Services benfits  deleted successfully');
    }
}
