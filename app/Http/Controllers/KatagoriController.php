<?php

namespace App\Http\Controllers;

use App\Models\katagori;
use App\Http\Requests\StorekatagoriRequest;
use App\Http\Requests\UpdatekatagoriRequest;

class KatagoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('admin/kategori/index');
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
     * @param  \App\Http\Requests\StorekatagoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekatagoriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function show(katagori $katagori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function edit(katagori $katagori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekatagoriRequest  $request
     * @param  \App\Models\katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekatagoriRequest $request, katagori $katagori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\katagori  $katagori
     * @return \Illuminate\Http\Response
     */
    public function destroy(katagori $katagori)
    {
        //
    }
}
