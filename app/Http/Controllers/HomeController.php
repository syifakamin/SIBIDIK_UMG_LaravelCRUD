<?php

namespace App\Http\Controllers;

use App\Camaba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

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
        $totalCamaba = DB::table("camaba")->count();
        $data = [$totalCamaba];

        return View::make('home', compact('totalCamaba'));
    }
}
