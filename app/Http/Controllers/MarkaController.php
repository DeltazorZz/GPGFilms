<?php

namespace App\Http\Controllers;

use App\Models\Marka;
use Illuminate\Http\Request;

class MarkaController extends Controller
{
    
public function index()
{
    $markak = Marka::all();
    return $markak;
}
public function show($id)
{
    $marka = Marka::all($id);
    return $marka;
}
public function destroy($id)
{
    Marka::find($id)->delete();
}

public function store(Request $request)
{
    $marka = new Marka();
    $marka->markaNev = $request->tevekenyseg_id;
    $marka->save();
}

public function update(Request $request, $id)
{
    $marka = Marka::find($id);
    $marka->markaNev = $request->tevekenyseg_id;
    $marka->save();
}

}
