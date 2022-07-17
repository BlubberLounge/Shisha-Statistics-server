<?php

namespace App\Http\Controllers;

use App\Models\Shisha;
use App\Http\Requests\StoreShishaRequest;
use App\Http\Requests\UpdateShishaRequest;

class ShishaController extends Controller
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
     * @param  \App\Http\Requests\StoreShishaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShishaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shisha  $shisha
     * @return \Illuminate\Http\Response
     */
    public function show(Shisha $shisha)
    {
        $data = array();
        $data['shisha'] = $shisha;
        return view('shisha.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shisha  $shisha
     * @return \Illuminate\Http\Response
     */
    public function edit(Shisha $shisha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShishaRequest  $request
     * @param  \App\Models\Shisha  $shisha
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShishaRequest $request, Shisha $shisha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shisha  $shisha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shisha $shisha)
    {
        //
    }
}
