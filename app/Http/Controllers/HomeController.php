<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feladat;

class HomeController extends Controller
{
    public function index() {
        $feladatcount = Feladat::count();
        $feladatertekelve=Feladat::where('pontszam',NULL)->count();

        return view('stats', [
            'feladatcount' => $feladatcount,
            'feladatertekelve' => $feladatertekelve
        ]);
    }
}
