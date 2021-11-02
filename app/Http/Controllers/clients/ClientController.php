<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Traits\photo;

class ClientController extends Controller
{
    use photo;
    public function allclient()
    {
        return view('clients');
    }

    public function addclientsubmit(Request $request)
    {

        $rules = [
            'fname' => 'required|string',
            'lname' => 'nullable|string',
            'company' => 'nullable|string',
            'website' => 'nullable|string',
            'email' => 'nullable|string|email|unique:sys_clients,email',
            'phone' => 'required|string|max:30',
            'password' => 'required|string|confirmed',
            'address1' => 'nullable|string',
            'address2' => 'nullable|string',
            'state' => 'nullable|string',
            'city' => 'nullable|string',
            'postcode' => 'nullable|string',
            'country' => 'required|string',
            'reseller' => 'nullable',
            'api_access' => 'nullable',
            'groupid' => '',
            'sms_gateway' => 'required',
            'sms_limit' => 'string|max:11',
            'image' => 'nullable|max:2000',
            'parent' => 'nullable|numeric|max:11',
            'username' => 'required',
            'datecreated' => 'required|date_format:d/m/Y',
            'api_key' => 'nullable|string',
            'api_gateway' => 'nullable|integer|max:11',
            'online' => 'integer|max:11',
            'status' => 'required',
            'lastlogin' => 'date_format:y/m/d|nullable',
            'pwresetkey' => 'string|nullable',
            'pwresetexpiry' => 'integer|max:11|nullable',
            'emailnotify' => 'nullable',
            'menu_open' => 'integer|max:11',
            'lan_id' => 'integer|max:11',



        ];

        $request->validate($rules);
        $data = $request->except('password_confirmation', '_token', 'image');
        $data['remember_token'] = $request->_token;


        $data['password'] = Hash::make($request['password']);

        $filename = $this->uploadphoto($request->image, 'client');
        $data['image'] = $filename;

        DB::table('sys_clients')->insert($data);

        return redirect('clients')
            ->with('success', 'client add successfully.');
    }
}
