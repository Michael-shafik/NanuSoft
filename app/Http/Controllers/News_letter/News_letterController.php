<?php

namespace App\Http\Controllers\News_letter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\newsletter;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class News_letterController extends Controller
{

    public function index()
    {
        $Newsletter =   newsletter::all();
        return view('NewLetter', compact("Newsletter"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|min:11|max:30',
        ]);

        newsletter::create($request->all());
        return redirect()->route('News_letter')
            ->with('success', 'News letter added successfully.');
    }



    public function update(Request $request)
    {
        $request->validate([
            'phone' => 'required|min:11|max:30',
        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $NewUpdate =  newsletter::find($modal_id);
        $NewUpdate->update($request->all());

        return redirect()->route('News_letter')
            ->with('success', 'News letter  updated successfully');
    }

    public function destroy($id)
    {
        newsletter::find($id)->delete();
        return redirect()->route('News_letter')
            ->with('success', 'News letter   deleted successfully');
    }
    ///////////////////////////////form in index page////////////////////////
    public function store2(Request $request)
    {
        $request->validate([
            'phone' => 'required|min:11|max:30',
        ]);

        newsletter::create($request->all());
        return redirect()->back();
    }
}
