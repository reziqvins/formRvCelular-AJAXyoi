<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datahp;

class DatahpController extends Controller
{
    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }
    public function read()
    {
        $data = datahp::all();
        return view('read', [
            'datahp' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['nama'] = $request->nama;
        $data['tipe'] = $request->tipe;
        $data['tahun'] = $request->tahun;

        datahp::insert($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = datahp::findOrFail($id);
        return view('update',[
            'datahp' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $data = datahp::findOrFail($id);
        $data->nama = $request->nama;
        $data->tipe = $request->tipe;
        $data->tahun = $request->tahun;
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        datahp::destroy($id);
    }
}

