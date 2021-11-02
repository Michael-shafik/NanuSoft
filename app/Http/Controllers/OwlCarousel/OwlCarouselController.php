<?php

namespace App\Http\Controllers\OwlCarousel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\pic_carousel;
use App;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Symfony\Component\Mime\MimeTypes;

class OwlCarouselController extends Controller
{

    public function index()
    {
        $carousels =   pic_carousel::all();
        return view('OwlCarousel', compact("carousels"))->with('i');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>  'nullable|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //save image
        $Image_carousel = new pic_carousel($request->input());
        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/pic_carousel';
            $file->move($destinationPath, $fileName);
            $Image_carousel->image = $fileName;
        } else {
            $fileName = 'no_image';
        }
        $Image_carousel->save();
        return redirect()->route('OwlCarousel')
            ->with('success', 'Owl Carousel added successfully.');
    }



    public function update(Request $request)
    {
        $request->validate([
            'name' =>  'nullable|string|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $modal_id = (int)$request->input('modal_input_id_edit');
        $pic_carouselUpdate = pic_carousel::find($modal_id);
        $pic_carouselUpdate->name = $request->get('name');

        if ($file = $request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/image/pic_carousel';
            $file->move($destinationPath, $fileName);
            $pic_carouselUpdate->image =  $fileName;
        } else {
            $fileName = 'no_image';
        }
        $pic_carouselUpdate->save();
        $pic_carouselUpdate->update();

        return redirect()->route('OwlCarousel')
            ->with('success', 'Owl Carousel   updated successfully');
    }

    public function destroy($id)
    {
        pic_carousel::find($id)->delete();
        return redirect()->route('OwlCarousel')
            ->with('success', 'Owl Carousel   deleted successfully');
    }
}
