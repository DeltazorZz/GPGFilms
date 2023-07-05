<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    
public function index()
{
    $kategoriak = Kategoria::all();
    return $kategoriak;
}
public function show($id)
{
    $kategoria = Kategoria::all($id);
    return $kategoria;
}
public function destroy($id)
{
    Kategoria::find($id)->delete();
}

public function store(Request $request)
{
    $kategoria = new Kategoria();
    $kategoria->nev = $request->nev;
    $kategoria->save();
}

public function update(Request $request, $id)
{
    $kategoria = Kategoria::find($id);
    $kategoria->nev = $request->nev;
    $kategoria->save();
}

}
