<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Melody;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $userMelodies  = Auth::user()->melodies()->orderBy('created_at')->get();

        $otherMelodies = Melody::whereHas('user', function ($query) {
            return $query->where('id', '!=', strval(Auth::user()->id));
        })->orderBy('created_at')->get();

        return view('home', compact("userMelodies", "otherMelodies"));
    }
}
