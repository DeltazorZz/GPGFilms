<?php

namespace App\Http\Controllers;

use App\Models\Szerszam;
use Illuminate\Http\Request;

class SzerszamController extends Controller
{
    
public function index()
{
    $szerszamok = Szerszam::all();
    return $szerszamok;
}
public function show($id)
{
    $szerszam = Szerszam::all($id);
    return $szerszam;
}
public function destroy($id)
{
    Szerszam::find($id)->delete();
}

public function store(Request $request)
{
    $szerszam = new Szerszam();
    $szerszam->marka = $request->marka;
    $szerszam->kategoria = $request->kategoria;
    $szerszam->teljesitmeny = $request->teljesitmeny;
    $szerszam->save();
}

public function update(Request $request, $id)
{
    $szerszam = Szerszam::find($id);
    $szerszam->marka = $request->marka;
    $szerszam->kategoria = $request->kategoria;
    $szerszam->teljesitmeny = $request->teljesitmeny;
    $szerszam->save();
}

}
