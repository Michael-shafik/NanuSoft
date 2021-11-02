<?php

namespace App\Http\Controllers\Services_benfits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\service_benfits;
use App\service_item;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;


class Services_benfitsController extends Controller
{
    public function index()
    {
        $Servicebenfits =   service_benfits::all();
        $sevicesItems = service_item::all();
        return view('Services_benfits')->with(compact("Servicebenfits"))->with(compact("sevicesItems"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'service_item_id' => 'required',
        ]);
        service_benfits::create($request->all());
        return redirect()->route('Services_benfits')
            ->with('success', 'Services benfits added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'service_item_id' => 'required',
        ]);

        $modal_id = (int)$request->input('modal_input_id_edit');
        $Servicebenfits =  service_benfits::find($modal_id);
        $Servicebenfits->update($request->all());

        return redirect()->route('Services_benfits')
            ->with('success', 'Services benfits updated successfully');
    }

    public function destroy($id)
    {
        service_benfits::find($id)->delete();
        return redirect()->route('Services_benfits')
            ->with('success', 'Services benfits  deleted successfully');
    }
}
