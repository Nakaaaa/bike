<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use App\Custom;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $manufacturer = Manufacturer::all();
        // $custom = DB::table('custom')->where('user_id', '=', '1')->get();
        $custom = Custom::where('user_id', Auth::id())->get();

        return view('home', ['custom' => $custom]);
        // return view('home');
    }
}
