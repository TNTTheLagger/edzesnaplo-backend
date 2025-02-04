<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bejegyzes;

class BejegyzesController extends Controller
{
    public function index()
    {
        return response()->json(Bejegyzes::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'gyakorlat' => 'required|string',
            'ismetlesszam' => 'required|integer|min:1|max:8'
        ], [
            'gyakorlat.required' => 'A gyakorlat megadása kötelező!',
            'ismetlesszam.required' => 'Az ismétlésszám megadása kötelező!',
            'ismetlesszam.min' => 'Az ismétlésszám minimum 1 lehet!',
            'ismetlesszam.max' => 'Az ismétlésszám maximum 8 lehet!',
        ]);
        Bejegyzes::create($request->all());

        return response()->json(['success' => true, 'message' => 'Gyakorlat rögzítve!']);
    }
}

