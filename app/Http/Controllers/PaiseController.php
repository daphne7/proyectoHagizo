<?php

namespace App\Http\Controllers;

use App\Models\Paise;
use App\Http\Requests\StorePaiseRequest;
use App\Http\Requests\UpdatePaiseRequest;

class PaiseController extends Controller
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
     * @param  \App\Http\Requests\StorePaiseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaiseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paise  $paise
     * @return \Illuminate\Http\Response
     */
    public function show(Paise $paise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paise  $paise
     * @return \Illuminate\Http\Response
     */
    public function edit(Paise $paise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaiseRequest  $request
     * @param  \App\Models\Paise  $paise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaiseRequest $request, Paise $paise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paise  $paise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paise $paise)
    {
        //
    }
}
