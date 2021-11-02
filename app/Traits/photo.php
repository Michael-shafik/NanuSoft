<?php

namespace App\Traits;

trait photo
{

    public function uploadphoto($image, $floder)
    {

        $filename = time() . '.' . $image->extension();

        $image->move(public_path('image/' . $floder), $filename);
        return $filename;
    }




    public function uploadVideo($video, $floder)
    {

        $filename =  time() . '.' . $video->extension();
        $video->move(public_path('video/' . $floder), $filename);
        return $filename;
    }
}
