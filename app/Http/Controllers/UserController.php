<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
public function index()
{
    $users = User::all();
    return $users;
}
public function show($id)
{
    $user = User::all($id);
    return $user;
}
public function destroy($id)
{
    User::find($id)->delete();
}

public function store(Request $request)
{
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->nev = $request->nev;
    $user->szuletesiIdo = $request->szuletesiIdo;
    $user->jogosultsag = $request->jogosultsag;
    $user->save();
}

public function update(Request $request, $id)
{
    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->nev = $request->nev;
    $user->szuletesiIdo = $request->szuletesiIdo;
    $user->jogosultsag = $request->jogosultsag;
    $user->save();
}

}
