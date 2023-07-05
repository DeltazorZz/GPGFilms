<?php

namespace App\Http\Controllers;

use App\Models\Leltar;
use Illuminate\Http\Request;

class LeltarController extends Controller
{
    
public function index()
{
    $leltarak = Leltar::all();
    return $leltarak;
}
public function show($id)
{
    $leltar = Leltar::all($id);
    return $leltar;
}
public function destroy($id)
{
    Leltar::find($id)->delete();
}

public function store(Request $request)
{
    $leltar = new Leltar();
    $leltar->felhasz_azon = $request->felhasz_azon;
    $leltar->szerszam_azon = $request->szerszam_azon;
    $leltar->darab = $request->darab;
    $leltar->leltarIdopont = $request->leltarIdopont;
    $leltar->save();
}

public function update(Request $request, $id)
{
    $leltar = Leltar::find($id);
    $leltar->felhasz_azon = $request->felhasz_azon;
    $leltar->szerszam_azon = $request->szerszam_azon;
    $leltar->darab = $request->darab;
    $leltar->leltarIdopont = $request->leltarIdopont;
    $leltar->save();

}
}