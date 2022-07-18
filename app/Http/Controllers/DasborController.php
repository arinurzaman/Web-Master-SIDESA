<?php

namespace App\Http\Controllers;

use App\BelumMenikah;
use App\Domisili;
use App\Kelahiran;
use App\Kematian;
use App\Keramaian;
use App\Sku;
use Illuminate\Http\Request;
use App\Warga;
use App\User;


class DasborController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $jml_warga      = Warga::all()->count();
        $jml_user       = User::all()->count();
        $jml_domisili   = Domisili::all()->count();
        $jml_kematian   = Kematian::all()->count();
        $jml_sku        = Sku::all()->count();
        $jml_kelahiran  = Kelahiran::all()->count();
        $jml_blmnikah   = BelumMenikah::all()->count();
        $jml_keramaian  = Keramaian::all()->count();

        return view('admin/layouts/dashboard', compact('jml_warga', 'jml_user','jml_domisili','jml_kematian','jml_sku','jml_kelahiran','jml_blmnikah','jml_keramaian'));
        
    }
}
