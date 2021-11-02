<?php

namespace App\Http\Controllers\Models_Works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\models_work;
use App\service_item;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;


class Models_WorksController extends Controller
{
    public function index()
    {
        $models_works =   models_work::all();
        $sevicesItems = service_item::all();
        return view('modelWorks')->with(compact("models_works"))->with(compact("sevicesItems"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' =>  'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'service_item_id' => 'nullable',
        ]);
        //save image
        $models_work = new models_work($request->input());
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/models_work';
            $file->move($destinationPath, $fileName);
            $models_work->image = $fileName;
        } else {
            $fileName = 'no_image';
        }

        ///////////////////////////////////////save video///////////////////////////////////////////////////////////////////////
        if ($file = $request->hasFile('video')) {
            $file = $request->file('video');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/video/models_work';
            $file->move($destinationPath, $fileName);
            $models_work->video =  $fileName;
        } else {
            $fileName = 'no_video';
        }

        $models_work->save();
        return redirect()->route('Models_Works')
            ->with('success', 'models work added successfully.');
    }


    public function update(Request $request)
    {
        $request->validate([
            'image' =>  'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'service_item_id' => 'nullable',
        ]);

        $modal_id = (int)$request->input('modal_input_id_edit');
        $updatemodels_work = models_work::find($modal_id);
        $updatemodels_work->image = $request->get('image');
        $updatemodels_work->video = $request->get('video');

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/Models_Works';
            $file->move($destinationPath, $fileName);
            $updatemodels_work->image =  $fileName;
        } else {
            $fileName = 'no_img';
        }
        if ($file = $request->hasFile('video')) {
            $file = $request->file('video');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/video/Models_Works';
            $file->move($destinationPath, $fileName);
            $updatemodels_work->video =  $fileName;
        } else {
            $fileName = 'no_video';
        }
        $updatemodels_work->save();
        $updatemodels_work->update();
        return redirect()->route('Models_Works')
            ->with('success', 'models_work  updated successfully');
    }



    public function destroy($id)
    {
        models_work::find($id)->delete();
        return redirect()->route('Models_Works')
            ->with('success', 'models_work  deleted successfully');
    }
}
