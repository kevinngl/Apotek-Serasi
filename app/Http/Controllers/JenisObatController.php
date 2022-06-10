<?php

namespace App\Http\Controllers;
use App\Models\JenisObat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class JenisObatController extends Controller
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
        return view('page.jenis_obat.modal', ['jenis_obat' => new JenisObat]);
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
            'jenis' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('jenis')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jenis'),
                ]);
            }elseif($errors->has('status')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('status'),
                ]);
            }
        }
        $jenis_obat = new JenisObat;
        $jenis_obat->jenis = $request->jenis;
        $jenis_obat->status = $request->status;
        $jenis_obat->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Jenis Obat tersimpan',
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
    public function edit(JenisObat $jenis_obat)
    {
        return view('page.jenis_obat.modal', ['jenis_obat' => $jenis_obat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisObat $jenis_obat)
    {
        $validator = Validator::make($request->all(), [
            'jenis' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('jenis')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jenis'),
                ]);
            }elseif($errors->has('status')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('status'),
                ]);
            }
        }
        $jenis_obat->jenis = $request->jenis;
        $jenis_obat->status = $request->status;
        $jenis_obat->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Jenis Obat '. $request->nama . ' diperbaharui',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisObat $jenis_obat)
    {
        $jenis_obat->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Jenis Obat terhapus',
        ]);
    }
}