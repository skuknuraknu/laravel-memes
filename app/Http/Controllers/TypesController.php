<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Types;

class TypesController extends Controller
{
    public function index()
    {
        $data = Types::all();
        return view('index.index', compact('data'));
    }

    public function create()
    {
        return view('index.create');
    }

    public function store(Request $request)
    {
        $data = new Types();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->save();
        $request->validate([
            'nama' => 'required|max:255',
        ]);
        
        return redirect()->route('nama.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = Types::find($id);
        return view('index.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Types::find($id);
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->save();
        $request->validate([
            'nama' => 'required|max:255',
        ]);
        
        return redirect()->route('nama.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $data = Types::find($id);
        $request->validate([
            'nama' => 'required|max:255',
        ]);        
        $data->delete();
        return redirect()->route('nama.index')->with('success', 'Data berhasil dihapus!');
    }
}
