<?php

namespace App\Http\Controllers\Packages_Feature;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\packages;
use App\package_feature;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class Packages_FeatureController extends Controller
{
    public function index()
    {
        $packagFeature =   package_feature::all();
        $package = packages::all();
        return view('Packages_Features')->with(compact("packagFeature"))->with(compact("package"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string',
            'package_id' => 'nullable',
        ]);
        // dd($request);
        package_feature::create($request->all());

        return redirect()->route('Packages_Feature')
            ->with('success', 'Packages  feature added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string',
            'package_id' => 'nullable',
        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $package =  package_feature::find($modal_id);
        $package->update($request->all());

        return redirect()->route('Packages_Feature')
            ->with('success', 'Package Feature updated successfully');
    }

    public function destroy($id)
    {
        package_feature::find($id)->delete();
        return redirect()->route('Packages_Feature')
            ->with('success', 'Package Feature deleted successfully');
    }
}
