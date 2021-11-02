<?php

namespace App\Http\Controllers\Catageores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\categories;
use App;

class CategoriesController extends Controller
{
    public function index()
    {
        $Catageores =   categories::all();
        return view('Catageores', compact("Catageores"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'desc' => 'required|string|min:2',
        ]);

        categories::create($request->all());
        return redirect()->route('Catageores')
            ->with('success', 'Catageores added successfully.');
    }



    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2',
            'desc' => 'required|string|min:2',
        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $Catageores =  categories::find($modal_id);
        $Catageores->update($request->all());

        return redirect()->route('Catageores')
            ->with('success', 'Catageores updated successfully');
    }

    public function destroy($id)
    {
        categories::find($id)->delete();
        return redirect()->route('Catageores')
            ->with('success', 'Catageores  deleted successfully');
    }
}
