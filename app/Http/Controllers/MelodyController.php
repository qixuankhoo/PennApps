<?php

namespace App\Http\Controllers;

use App\Melody;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MelodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required',
            'encoding' => 'required',
            'username' => 'required',
            'caption' => 'required',
        ]);

        $melody = new Melody;
        $melody->name = $request->input('name');
        $melody->encoding = $request->input('encoding');
        $melody->caption = $request->input('caption');
        $user = User::where('name',$request->input('username'))->first();
        $melody->user_id = $user->id;
        
        if (isset($melody->encoding) && isset($melody->name) && isset($melody->caption) && isset($melody->user_id)) {
            $response = $melody->save();
        }

        if (is_null(Auth::user())) {
            return view('welcome');
        }

        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Melody  $melody
     * @return \Illuminate\Http\Response
     */
    public function show(Melody $melody)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Melody  $melody
     * @return \Illuminate\Http\Response
     */
    public function edit(Melody $melody)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Melody  $melody
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Melody $melody)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Melody  $melody
     * @return \Illuminate\Http\Response
     */
    public function destroy(Melody $melody)
    {
        //
    }
}
