<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Obat;
use App\Models\JenisObat;
use App\Models\Penjualan;
use App\Models\User;


class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.dashboard.main');
    }
    public function obat(Request $request)
    {
        if($request->ajax()) {
            $obat = Obat::paginate(10);
            return view('page.obat.list', compact('obat'));
        }
        return view('page.obat.main');
    }
    public function jenis_obat(Request $request)
    {
        if($request->ajax()) {
            $jenis_obat = JenisObat::paginate(10);
            return view('page.jenis_obat.list', compact('jenis_obat'));
        }
        return view('page.jenis_obat.main');
    }
    public function penjualan(Request $request)
    {
        if($request->ajax()) {
            $penjualan = penjualan::paginate(10);
            return view('page.penjualan.list', compact('penjualan'));
        }
        return view('page.penjualan.main');
    }
    public function users(Request $request)
    {
        if($request->ajax()) {
            $users = User::paginate(10);
            return view('page.users.list', compact('users'));
        }
        return view('page.users.main');
    }
}
