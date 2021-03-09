<?php

namespace App\Http\Controllers;

use App\Models\Radio;
use Illuminate\Http\Request;

class RadioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $radios = Radio::all();
        return view('radios.index', compact('radios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('radios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $radio = request()->except('_token');
        Radio::insert($radio);
        return view('radios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Radio  $radio
     * @return \Illuminate\Http\Response
     */
    public function show(Radio $radio)
    {
        return view('radios.show', compact('radio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Radio  $radio
     * @return \Illuminate\Http\Response
     */
    public function edit(Radio $radio)
    {
        return view('radios.edit', compact('radio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Radio  $radio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Radio $radio)
    {
        $dataRadio = request()->except('_token');
        $radio->update($dataRadio);
        return redirect()->to(url('/radios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Radio  $radio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Radio $radio)
    {
        $radio->delete();
        return redirect()->to(url('/radios'));
    }
}
