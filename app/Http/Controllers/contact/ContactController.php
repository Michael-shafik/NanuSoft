<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\contact_us;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = contact_us::all();
        return view('ContactUs', compact("contacts"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'phone' => '  required|string|min:11|max:30',
            'name' => 'required|string|min:2',
            'email' => 'required|string',
            'message' => 'required|string|min:2',
        ]);
        $contact = new contact_us($request->input());
        $contact->save();
        return redirect()->route('Contact_US')
            ->with('success', 'Contact us  added successfully.');
    }



    public function update(Request $request)
    {
        $request->validate([
            'phone' => '  required|string|min:11|max:30',
            'name' => 'required|string|min:2',
            'email' => 'required|string',
            'message' => 'required|string|min:2',
        ]);

        $modal_id = (int)$request->input('modal_input_id_edit');
        $contactUpdate = contact_us::find($modal_id);
        $contactUpdate->phone = $request->get('phone');
        $contactUpdate->name = $request->get('name');
        $contactUpdate->email = $request->get('email');
        $contactUpdate->message = $request->get('message');
        $contactUpdate->save();
        $contactUpdate->update();

        return redirect()->route('Contact_US')
            ->with('success', 'Contact us   updated successfully');
    }

    public function destroy($id)
    {
        contact_us::find($id)->delete();
        return redirect()->route('Contact_US')
            ->with('success', 'Contact us   deleted successfully');
    }
    public function store2(Request $request)
    {
        $request->validate([
            'phone' => '  required|string|min:11|max:30',
            'name' => 'required|string|min:2',
            'email' => 'required|string',
            'message' => 'required|string|min:2',
        ]);
        $contact = new contact_us($request->input());
        $contact->save();
        return redirect()->back()->with('success', 'your message,here');
    }



    public function update2(Request $request)
    {
        $request->validate([
            'phone' => '  required|string|min:11|max:30',
            'name' => 'required|string|min:2',
            'email' => 'required|string',
            'message' => 'required|string|min:2',
        ]);

        $modal_id = (int)$request->input('modal_input_id_edit');
        $contactUpdate = contact_us::find($modal_id);
        $contactUpdate->phone = $request->get('phone');
        $contactUpdate->name = $request->get('name');
        $contactUpdate->email = $request->get('email');
        $contactUpdate->message = $request->get('message');
        $contactUpdate->save();
        $contactUpdate->update();

        return redirect()->back()->with('success', 'your message,send');
    }
}
