<?php

namespace App\Http\Controllers;

use App\Models\DataKost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataKostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return DataKost::all();
        $data = DataKost::all();

        return $data;
    }

    public function showbyId(Request $request){
        $id = $request->id;
        // $alamat = $request->alamat;
        // $jumlahkamar = $request->jumlahkamar;
        // $harga = $request->harga;

        return DataKost::find($id);
        // $kost->alamat = $alamat;
        // $kost->jumlahkamar = $jumlahkamar;
        // $kost->harga = $harga;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kost = new DataKost();
        $kost->alamat = $request->alamat;
        $kost->jumlahkamar = $request->jumlahkamar;
        $kost->harga = $request->harga;
        $kost->save();

        return "Data Kost Berhasil di Tambah";
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
     * @param  \App\Models\DataKost  $dataKost
     * @return \Illuminate\Http\Response
     */
    public function show(DataKost $dataKost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataKost  $dataKost
     * @return \Illuminate\Http\Response
     */
    public function edit(DataKost $dataKost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataKost  $dataKost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $alamat = $request->alamat;
        $jumlahkamar = $request->jumlahkamar;
        $harga = $request->harga;

        $kost = DataKost::find($id);
        $kost->alamat = $alamat;
        $kost->jumlahkamar = $jumlahkamar;
        $kost->harga = $harga;
        $kost->save();

        return "Data Berhasil Di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataKost  $dataKost
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $kost = DataKost::find($id);
        $kost->delete();
    }
}
