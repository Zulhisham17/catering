<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('merchant.barang.index', [
            'barangs' => Barang::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchant.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'kategori' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'user_id' => 'required'
        ]);

        Barang::create($validatedData);

        return redirect('/merchant/barang/') -> with('success' , 'New Post Hasbeen Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('merchant.barang.edit', [
            'barang' => $barang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $rules = [
            'nama' => 'required|max:100',
            'kategori' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'user_id' => 'required'
        ];



        $validatedData = $request->validate($rules);

        Barang::where('id', $barang->id)
            ->update($validatedData);

        return redirect('/merchant/barang/') -> with('success' , 'New Post Hasbeen Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
