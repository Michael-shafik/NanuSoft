<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\services;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class ServicesController extends Controller
{
    public function index()
    {
        $services =   services::all();
        return view('Services', compact("services"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'head_title' => 'required|string|min:2',
            'head_desc' => 'required|string|min:2',
        ]);

        services::create($request->all());
        return redirect()->route('Services')
            ->with('success', 'Services added successfully.');
    }



    public function update(Request $request)
    {
        $request->validate([
            'head_title' => 'required|string|min:2',
            'head_desc' => 'required|string|min:2',
        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $services =  services::find($modal_id);
        $services->update($request->all());

        return redirect()->route('Services')
            ->with('success', 'Services updated successfully');
    }

    public function destroy($id)
    {
        services::find($id)->delete();
        return redirect()->route('Services')
            ->with('success', 'Services  deleted successfully');
    }
}
