<?php

namespace App\Http\Controllers;

use App\Models\moderator;
use Illuminate\Http\Request;

class ModeratorController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // $moderator = new moderator;

        // $moderator->name    = $req->fullName;
        // $moderator->address    = $req->address;
        // $moderator->email       = $req->email;
        // $moderator->contact    = $req->fullName;
        // DB::table('moderators')->insert(['name'=>$req->fullName,
        //                                  'address'=> $req->address,
        //                                  'email'=> $req->email,
        //                                  'image'=>$req->image

        // ]);
        moderator::insert([
            'name' => $req->fullName,
            'email' => $req->email
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\moderator  $moderator
     * @return \Illuminate\Http\Response
     */
    public function show(moderator $moderator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\moderator  $moderator
     * @return \Illuminate\Http\Response
     */
    public function edit(moderator $moderator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\moderator  $moderator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, moderator $moderator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\moderator  $moderator
     * @return \Illuminate\Http\Response
     */
    public function destroy(moderator $moderator)
    {
        //
    }
}
