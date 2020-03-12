<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Challenge;

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


      return view('user-dashboard');
    }

    public function welcomeadmin()
    {
      $challenges = Challenge::all();

        return view('admin-dashboard', compact('challenges'));
    }


}
