<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TshirtController extends Controller
{
    //
    public function index()
    {
    	$data['result'] = \App\Tshirt::all();
    	return view('tshirt/index')->with($data);
    }

    public function create()
    {
    	return view('tshirt/form');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_tshirt'   =>'required|max:100',
            'type'          =>'required|max:100',
            'warna_produk'  =>'required|max:100',
            'ukuran'        =>'required|max:100',
            'stock'         =>'required|max:100',
            'harga'         =>'required|max:100',
        ];
        $this->validate($request, $rules);

    	$input = $request->all();
    	$status = \App\Tshirt::create($input);

    	if ($status) return redirect('/')->with('success', 'Data berhasil ditambahkan');
        else return redirect('/')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
        $data['result'] = \App\Tshirt::where('id_tshirt', $id)->first();
        return view('tshirt/form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama_tshirt'   =>'required|max:100',
            'type'          =>'required|max:100',
            'warna_produk'  =>'required|max:100',
            'ukuran'        =>'required|max:100',
            'stock'         =>'required|max:100',
            'harga'         =>'required|max:100',
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $result = \App\Tshirt::where('id_tshirt', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/')->with('success', 'Data berhasil ditambahkan');
        else return redirect('/')->with('error', 'Data gagal ditambahkan');           
    }

    public function destroy (Request $request, $id)
    {
        $result = \App\Tshirt::where('id_tshirt', $id)->first();
        $status = $result->delete();

        if ($status) return redirect('/')->with('success', 'Data berhasil dihapus');
        else return redirect('/')->with('error', 'Data gagal dihapus');   
    }
}