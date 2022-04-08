<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProcessorRequest;
use App\Http\Requests\UpdateProcessorRequest;
use App\Models\Processor;

class ProcessorController extends Controller
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
     * @param  \App\Http\Requests\StoreProcessorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProcessorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function show(Processor $processor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function edit(Processor $processor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProcessorRequest  $request
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProcessorRequest $request, Processor $processor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processor $processor)
    {
        //
    }
}
