<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('user.index', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $usuarios = new User;
        $usuarios->name = $request->input('nombre');
        $usuarios->email = $request->input('email');
        $usuarios->password = $request->input('password');
        $usuarios->save();
        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $usuarios = User::find($id);
        $usuarios->name = $request->input('nombre');
        $usuarios->email = $request->input('email');
        $usuarios->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $usuarios = User::find($id);
        $usuarios->delete();
        return redirect()->back();
    }






}
