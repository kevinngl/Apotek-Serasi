<?php

namespace App\Http\Controllers;
use App\Models\Obat;
use App\Models\JenisObat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ObatController extends Controller
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
        $jenis_obat = JenisObat::get();
        return view('page.obat.modal', ['obat' => new Obat,'jenis_obat'=>$jenis_obat]);
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
            'harga' => 'required',
            'jenis_id' => 'required',
            'stok' => 'required',
            'expired' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('harga')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('harga'),
                ]);
            }elseif($errors->has('jenis_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jenis_id'),
                ]);
            }elseif($errors->has('stok')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('stok'),
                ]);
            }elseif($errors->has('expired')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('expired'),
                ]);
            }
        }
        $obat = new Obat;
        $obat->user_id = 1;
        $obat->nama = $request->nama;
        $obat->harga = $request->harga;
        $obat->jenis_id = $request->jenis_id;
        $obat->stok = $request->stok;
        $obat->expired = $request->expired;
        $obat->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Obat tersimpan',
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
    public function edit(Obat $obat)
    {
        return view('page.obat.modal', ['obat' => $obat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat $obat)
    {
        $validator = Validator::make($request->all(), [
            'nama',
            'harga',
            'jenis_id',
            'stok',
            'expired',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('harga')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('harga'),
                ]);
            }elseif($errors->has('jenis_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jenis_id'),
                ]);
            }elseif($errors->has('stok')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('stok'),
                ]);
            }elseif($errors->has('expired')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('expired'),
                ]);
            }
        }
        $obat->user_id = 1;
        $obat->nama = $request->nama;
        $obat->harga = $request->harga;
        $obat->jenis_id = $request->jenis_id;
        $obat->stok = $request->stok;
        $obat->expired = $request->expired;
        $obat->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Obat '. $request->nama . ' diperbaharui',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat)
    {
        $obat->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Obat terhapus',
        ]);
    }
}
