<?php

namespace App\Trait;

use Illuminate\Http\Request;

trait UploadImageTrait
{
    public function uploadImage(Request $request, $folderName)
    {
        $image = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs($folderName, $image, 'uploads');
        return $path;


    }

}
