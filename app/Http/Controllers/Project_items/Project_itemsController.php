<?php

namespace App\Http\Controllers\Project_items;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\project_item;
use App\old_project;
use App;
use App\packages;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;


class Project_itemsController extends Controller
{
    public function index()
    {
        $packages = packages::all();
        $old_projects = old_project::all();
        $ProjectItem =   project_item::all();
        return view('projectitems')->with(compact("ProjectItem"))->with(compact("old_projects"))->with(compact("packages"))->with('i');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:2',
            'desc' => 'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        // dd($request);
        //save image
        $project_item = new project_item($request->input());
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/Project_items';
            $file->move($destinationPath, $fileName);
            $project_item->image =  $fileName;
        } else {
            $fileName = 'no_image';
        }
        $project_item->save();
        return redirect()->route('Project_items')
            ->with('success', 'Project items added successfully.');
    }



    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:2',
            'desc' => 'required|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $projectItemUpdate = project_item::find($modal_id);
        $projectItemUpdate->title = $request->get('title');
        $projectItemUpdate->desc = $request->get('desc');

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/Project_items';
            $file->move($destinationPath, $fileName);
            $projectItemUpdate->image =  $fileName;
        } else {
            $fileName = 'no_image';
        }
        $projectItemUpdate->save();
        $projectItemUpdate->update();

        return redirect()->route('Project_items')
            ->with('success', 'Project items   updated successfully');
    }

    public function destroy($id)
    {
        project_item::find($id)->delete();
        return redirect()->route('Project_items')
            ->with('success', 'project item   deleted successfully');
    }
}
