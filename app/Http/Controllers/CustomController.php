<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom;
use App\Bike;
use App\Manufacturer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
// use Image;

class CustomController extends Controller
{
    public function create()
    {
        $manufacturer = Manufacturer::all();
        $bike = Bike::all();
        return view('custom.create', ['manufacturer' => $manufacturer, 'bike' => $bike]);
    }

    public function store(Request $request)
    {
        $path = "";
        $filename = "";

        $request->validate([
            'title' => 'required|max:255',
            'customs' => 'required|max:2000',
            'manufacturer' => 'required',
            'file' => [
                'file',
                'image',
                'mimes:jpeg,jpg,png,gif,JPEG'
            ],
        ]);

        if ($request->file('file')->isValid([]))
        {

            // $fileimage = $request->file;
            // logger($fileimage);
            // $filename = str_shuffle(time().$fileimage->getClientOriginalExtension()). '.' . $fileimage->getClientOriginalExtension();
            // logger($filename);
            // \Image::make($fileimage)->resize(120,80)->save(storage_path('app/public/img/'.$filename));

            $temppath = $request->file->store('public/img');
            $path = $temppath;
            
        }
        
        Custom::insert([
            [
                'title' => $request->title,
                'customs' => $request->customs,
                'img' => basename($path),
                // 'img' => $filename,
                'bike_id' => $request->bike,
                'user_id' => Auth::id(),
                'created_at' => date("Y/m/d")
            ]
        ]);

        return Redirect()->route('home');
    }
}
