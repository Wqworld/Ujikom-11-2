<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;

class hewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (session('penjual') || session('admin')) {
            return view("hewan.create");
        } else {
            return redirect()->route('beranda');
        }
        // $penjual = Penjual::findOrFail($id);
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{
    $validasiData = $request->validate([
        "jenis" => "required",
        "status" => "required",
        "deks_hewan" => "required",
        "gambar" => "required|image|mimes:jpeg,png,jpg|max:2048",
        "umur_hewan" => "required",
        "kesehatan" => "required",
        "harga_hewan" => "required",
        "berat_hewan" => "required",
        "hargadp_hewan" => "required",
        "id_penjual" => "required"
    ],
    [
        "jenis.required" => "Harus di isi terlebih dahulu",
        "status.required" => "Harus di isi terlebih dahulu",
        "gambar.required" => "Harus menambahkan gambar",
        "umur_hewan.required" => "Harus di isi terlebih dahulu",
        "kesehatan.required" => "Harus di isi terlebih dahulu",
        "harga_hewan.required" => "Harus di isi terlebih dahulu",
        "berat_hewan.required" => "Harus di isi terlebih dahulu",
        "hargadp_hewan.required" => "Harus di isi terlebih dahulu",
    ]);

    // Hapus format rupiah: Rp, titik, dan spasi
    $validasiData['harga_hewan'] = (int) str_replace(['Rp', '.', ' '], '', $request->harga_hewan);
    $validasiData['hargadp_hewan'] = (int) str_replace(['Rp', '.', ' '], '', $request->hargadp_hewan);

    // Upload gambar jika ada
    if ($request->hasFile('gambar')) {
        $foto = $request->file('gambar');
        $fileName = Str::uuid() . '.' . $foto->getClientOriginalExtension();
        $foto->storeAs('foto_Hewan', $fileName, 'public');

        $validasiData['gambar'] = $fileName;
    }

    // Simpan data ke database
    Hewan::create($validasiData);

    return redirect()->route("beranda.penjual");
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
