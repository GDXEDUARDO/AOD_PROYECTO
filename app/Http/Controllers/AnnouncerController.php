<?php

namespace App\Http\Controllers;

use App\Models\Announcer;
use Illuminate\Http\Request;

class AnnouncerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcers = Announcer::all();
        return view('announcers.index', compact('announcers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $announcer = request()->except('_token');
        Announcer::insert($announcer);
        return redirect()->to(url('/announcers'));
        //return view('announcers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcer  $announcer
     * @return \Illuminate\Http\Response
     */
    public function show(Announcer $announcer)
    {
        return view('announcers.show', compact('announcer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcer  $announcer
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcer $announcer)
    {
        //
        return view('announcers.edit', compact('announcer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcer  $announcer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcer $announcer)
    {
        $dataAnnouncer = request()->except('_token');
        $announcer->update($dataAnnouncer);
        return redirect()->to(url('/announcers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcer  $announcer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcer $announcer)
    {
        $announcer->delete();
        return redirect()->to(url('/announcers'));
    }
}
