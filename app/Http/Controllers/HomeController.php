<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        $totalUsers = User::where('name', '!=', 'admin')->get()->count();

        return view('home', compact('totalUsers'));
    }

    public function tatib()
    {
        $totalUsers = User::where('name', '!=', 'admin')->get()->count();

        return view('tatib');
    }
}
