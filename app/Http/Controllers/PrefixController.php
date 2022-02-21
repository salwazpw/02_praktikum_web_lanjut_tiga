<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrefixController extends Controller
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

    public function edugames()
    {
        return 'Ini adalah halaman marbel edu games';
    }

    public function kidsgames()
    {
        return 'Ini adalah halaman marbel and friends kids games';
    }

    public function storybooks()
    {
        return 'Ini adalah halaman riri story books';
    }

    public function kidsong()
    {
        return 'Ini adalah halaman kolak kids song';
    }

    public function karir()
    {
        return 'Cari karirmu disini!';
    }

    public function magang()
    {
        return 'Go Get Intership Here!';
    }

    public function kunjungan()
    {
        return 'List Kunjungan Industri PT.Indokarya';
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
