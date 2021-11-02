<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\company_data;
use App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class CompanyController extends Controller
{

    public function index()
    {
        $groups =  company_data::all();
        return view('Company', compact("groups"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => '  required|string|min:11|max:30',
            'email' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required|string',
        ]);

        //save image
        $company = new company_data($request->input());
        if ($file = $request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/Company';
            $file->move($destinationPath, $fileName);
            $company->logo = $fileName;
        } else {
            $fileName = 'no_logo';
        }

        // dd($company);
        $company->save();
        return redirect()->route('Company_info')
            ->with('success', 'Company info  added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone' => '  required|string|min:11|max:30',
            'email' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required|string|min:2',
        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $oldCompany = company_data::find($modal_id);
        $oldCompany->phone = $request->get('phone');
        $oldCompany->email = $request->get('email');
        $oldCompany->address = $request->get('address');
        $oldCompany->latitude = $request->get('latitude');
        $oldCompany->longitude = $request->get('longitude');

        if ($file = $request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/Company';
            $file->move($destinationPath, $fileName);
            $oldCompany->logo = $fileName;
        } else {
            $fileName = 'no_logo';
        }
        $oldCompany->save();
        $oldCompany->update();
        return redirect()->route('Company_info')
            ->with('success', 'Company info   updated successfully');
    }
    public function destroy($id)
    {
        company_data::find($id)->delete();
        return redirect()->route('Company_info')
            ->with('success', 'Company info   deleted successfully');
    }
}
