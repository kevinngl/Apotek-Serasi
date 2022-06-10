<?php

namespace App\Http\Controllers;
use App\Models\Penjualan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class PenjualanController extends Controller
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
        return view('page.penjualan.modal', ['penjualan' => new Penjualan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kuantitas' => 'required',
            'total_harga' => 'required',
            'expired' => 'required',
            'tanggal_pembayaran' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('kuantitas')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kuantitas'),
                ]);
            }elseif($errors->has('total_harga')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('total_harga'),
                ]);
            }elseif($errors->has('expired')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('expired'),
                ]);
            }elseif($errors->has('tanggal_pembayaran')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_pembayaran'),
                ]);
            }elseif($errors->has('status')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('status'),
                ]);
            }
        }
        $penjualan = new Penjualan;
        $penjualan->user_id = 1;
        $penjualan->nama = $request->nama;
        $penjualan->kuantitas = $request->kuantitas;
        $penjualan->total_harga = $request->total_harga;
        $penjualan->expired = $request->expired;
        $penjualan->tanggal_pembayaran = $request->tanggal_pembayaran;
        $penjualan->status = $request->status;
        $penjualan->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Penjualan tersimpan',
        ]);
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
    public function edit(Penjualan $penjualan)
    {
        return view('page.penjualan.modal', ['penjualan' => $penjualan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        $validator = Validator::make($request->all(), [
            'nama',
            'kuantitas',
            'total_harga',
            'expired',
            'tanggal_pembayaran',
            'status',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('kuantitas')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kuantitas'),
                ]);
            }elseif($errors->has('total_harga')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('total_harga'),
                ]);
            }elseif($errors->has('expired')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('expired'),
                ]);
            }elseif($errors->has('tanggal_pembayaran')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_pembayaran'),
                ]);
            }elseif($errors->has('status')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('status'),
                ]);
            }
        }
        $penjualan->nama = $request->nama;
        $penjualan->kuantitas = $request->kuantitas;
        $penjualan->total_harga = $request->total_harga;
        $penjualan->expired = $request->expired;
        $penjualan->tanggal_pembayaran = $request->tanggal_pembayaran;
        $penjualan->status = $request->status;
        $penjualan->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Penjualan '. $request->nama . ' diperbaharui',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Penjualan terhapus',
        ]);
    }
}
