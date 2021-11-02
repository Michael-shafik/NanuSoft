<?php

namespace App\Http\Controllers\Latest_projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\old_project;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class Latest_ProjectsController extends Controller
{


    public function index()
    {
        $project =   old_project::all();
        return view('latestProjects', compact("project"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' =>  'required|string|min:2',
            'desc' =>  'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //save image
        $old_project = new old_project($request->input());
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/Latest_Projects';
            $file->move($destinationPath, $fileName);
            $old_project->image =  $fileName;
        } else {
            $fileName = 'no_image';
        }
        $old_project->save();
        return redirect()->route('Latest_Projects')
            ->with('success', 'Latest Projects added successfully.');
    }



    public function update(Request $request)
    {
        $request->validate([
            'title' =>  'required|string|min:2',
            'desc' =>  'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $projectUpdate = old_project::find($modal_id);
        $projectUpdate->title = $request->get('title');
        $projectUpdate->desc = $request->get('desc');

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/Latest_Projects';
            $file->move($destinationPath, $fileName);
            $projectUpdate->image = $fileName;
        } else {
            $fileName = 'no_image';
        }
        $projectUpdate->save();
        $projectUpdate->update();

        return redirect()->route('Latest_Projects')
            ->with('success', 'Latest Projects   updated successfully');
    }

    public function destroy($id)
    {

        old_project::find($id)->delete();
        return redirect()->route('Latest_Projects')
            ->with('success', 'Latest Projects   deleted successfully');
    }
}
