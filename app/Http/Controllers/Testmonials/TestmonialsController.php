<?php

namespace App\Http\Controllers\Testmonials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\testmonials;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class TestmonialsController extends Controller
{

    public function index()
    {
        $testmonials =  testmonials::all();
        return view('Testmonials', compact("testmonials"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string|min:2',
            'name' => 'required|string|min:2',
            'job' => 'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //save image
        $testmonials = new testmonials($request->input());
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/testmonials';
            $file->move($destinationPath, $fileName);
            $testmonials->image = $fileName;
        } else {
            $fileName = 'no_image';
        }
        $testmonials->save();
        return redirect()->route('Testmonials')
            ->with('success', 'testmonials added successfully.');
    }



    public function update(Request $request)
    {
        $request->validate([
            'comment' => 'required|string|min:2',
            'name' => 'required|string|min:2',
            'job' => 'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $modal_id = (int)$request->input('modal_input_id_edit');
        $testUpdate = testmonials::find($modal_id);
        $testUpdate->comment = $request->get('comment');
        $testUpdate->name = $request->get('name');
        $testUpdate->job = $request->get('job');

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/testmonials';
            $file->move($destinationPath, $fileName);
            $testUpdate->image = $fileName;
        } else {
            $fileName = 'no_image';
        }
        $testUpdate->save();
        $testUpdate->update();

        return redirect()->route('Testmonials')
            ->with('success', 'Testmonials   updated successfully');
    }

    public function destroy($id)
    {
        testmonials::find($id)->delete();
        return redirect()->route('Testmonials')
            ->with('success', 'Testmonials   deleted successfully');
    }
}
