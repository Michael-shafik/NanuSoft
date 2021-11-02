<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Image;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\about_us;
use App\contact_us;

use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class AboutController extends Controller
{

    public function index()
    {
        $about = about_us::all();
        return view('AboutUs', compact("about"))->with('i');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_title' => ' nullable|string|min:2',
            'first_desc' => 'nullable|string|min:2',
            'second_title' => 'nullable|string|min:2',
            'second_desc' => 'nullable|string|min:2',
            'third_title' => 'nullable|string|min:2',
            'third_desc' => 'nullable|string|min:2',
            'image' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',

        ]);
        // dd($request);
        //save image
        $about = new about_us($request->input());
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/About_US';
            $file->move($destinationPath, $fileName);
            $about->image = $fileName;
        } else {
            $fileName = 'no_image';
        }

        ///////////////////////////////////////save video///////////////////////////////////////////////////////////////////////
        if ($file = $request->hasFile('video')) {
            $file = $request->file('video');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/video/about_us';
            $file->move($destinationPath, $fileName);
            $about->video =  $fileName;
        } else {
            $fileName = 'no_video';
        }

        $about->save();
        return redirect()->route('About_US')
            ->with('success', 'about us  added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_title' => ' required|string|min:2',
            'first_desc' => 'required|string|min:2',
            'second_title' => 'required|string|min:2',
            'second_desc' => 'required|string|min:2',
            'third_title' => 'required|string|min:2',
            'third_desc' => 'required|string|min:2',
            'image' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'required|max:20000|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $updateabout = about_us::find($modal_id);
        $updateabout->first_title = $request->get('first_title');
        $updateabout->first_desc = $request->get('first_desc');
        $updateabout->second_title = $request->get('second_title');
        $updateabout->second_desc = $request->get('second_desc');
        $updateabout->third_title = $request->get('third_title');
        $updateabout->third_desc = $request->get('third_desc');
        $updateabout->image = $request->get('image');
        $updateabout->video = $request->get('video');

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/About_US';
            $file->move($destinationPath, $fileName);
            $updateabout->image =  $fileName;
        } else {
            $fileName = 'no_img';
        }
        if ($file = $request->hasFile('video')) {
            $file = $request->file('video');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/video/about_us';
            $file->move($destinationPath, $fileName);
            $updateabout->video =  $fileName;
        } else {
            $fileName = 'no_video';
        }
        $updateabout->save();
        $updateabout->update();
        return redirect()->route('About_US')
            ->with('success', 'About US  updated successfully');
    }


    public function destroy($id)
    {
        about_us::find($id)->delete();

        return redirect()->route('About_US')
            ->with('success', 'about us deleted successfully');
    }
}
