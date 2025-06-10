<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Penjual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class penjualController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function profile()
    {
        $penjual = session("penjual");
        return view("penjual.profile", compact("penjual"));
    }
    public function index()
    {
        // $penjual = Penjual::findOrFail($id);
        if (session("role") != "penjual") {
            return redirect()->back()->with("error", "Kamu Bukan penjual");
        }

        $penjual = session("penjual");
        $jumlahHewan = Hewan::where("id_penjual", $penjual->id)->count();
        $jumlahHewanReady = Hewan::where("id_penjual", $penjual->id)->where("status", "Ready")->count();
        $jumlahHewanTidakReady = Hewan::where("id_penjual", $penjual->id)->where("status", "Tidak Ready")->count();


        $hewanTerbaru = Hewan::where("id_penjual", $penjual->id)->take(4)->get();


        return view("penjual.index", compact("penjual", "jumlahHewan", "jumlahHewanReady", "jumlahHewanTidakReady", "hewanTerbaru"));
    }

    public function hewan()
    {

        if (!session("penjual") || session("admin")) {
            return redirect()->back()->with("error", "Kamu tidak Memiliki akses");
        }

        $penjual = session("penjual");
        $hewan = Hewan::where("id_penjual", $penjual->id)->get();

        return view("penjual.hewan", compact("penjual", "hewan"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showHewan(string $id)
    {
        $hewan = Hewan::findOrFail($id);
        $title = 'Delete Hewan!';
        $text = "Apakah Kamu yakin ingin hapus ?";
        confirmDelete($title, $text);
        return view("penjual.show", compact("hewan"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hewan = Hewan::where("id", $id)->first();
        return view("hewan.edit", compact("hewan"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required',
            'status' => 'required',
            'deks_hewan' => 'required',
            'umur_hewan' => 'required|numeric',
            'kesehatan' => 'required',
            'harga_hewan' => 'required',
            'berat_hewan' => 'required|numeric',
            'hargadp_hewan' => 'required|numeric',
            // gambar tidak wajib
        ]);

        $hewan = Hewan::findOrFail($id);

        // Jika ada file baru di-upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($hewan->gambar && Storage::exists($hewan->gambar)) {
                Storage::delete($hewan->gambar);
            }

            // Simpan gambar baru
            $foto = $request->file('gambar');
            $fileName = Str::uuid() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('foto_Hewan', $fileName, 'public');



            $hewan->gambar = $fileName;
        }

        // Update field lain
        $hewan->jenis = $request->jenis;
        $hewan->status = $request->status;
        $hewan->deks_hewan = $request->deks_hewan;
        $hewan->umur_hewan = $request->umur_hewan;
        $hewan->kesehatan = $request->kesehatan;
        $hewan->harga_hewan = $request->harga_hewan;
        $hewan->berat_hewan = $request->berat_hewan;
        $hewan->hargadp_hewan = $request->hargadp_hewan;
        $hewan->id_penjual = $request->id_penjual;


        $hewan->harga_hewan = (int) str_replace(['Rp', '.', ' '], '', $request->harga_hewan);
        $hewan->hargadp_hewan = (int) str_replace(['Rp', '.', ' '], '', $request->hargadp_hewan);

        Alert::success('Update Berasil','Data id ' . $hewan->id . ' Berasil di update');
        $hewan->save();

        return redirect()->route('hewan.penjual')->with('success', 'Data hewan berhasil diperbarui.');
    }

    public function profileEdit($id)
    {
        $penjual = Penjual::findOrFail($id);
        return view('penjual.edit', compact('penjual'));
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'nama_penjual' => 'required|string|max:255',
            'umur_penjual' => 'required|numeric|min:1',
            'nomor_hp' => 'required|string|max:15',
            'alamat_penjual' => 'required|string|max:255',
            'username' => 'required|string|max:50',
            'password' => 'nullable|string|min:1',
        ]);

        $penjual = Penjual::findOrFail($id);
        $penjual->nama_penjual = $request->nama_penjual;
        $penjual->umur_penjual = $request->umur_penjual;
        $penjual->nomor_hp = $request->nomor_hp;
        $penjual->alamat_penjual = $request->alamat_penjual;
        $penjual->username = $request->username;

        if ($request->filled('password')) {
            $penjual->password = $request->password;
        }

        $penjual->save();

        return redirect()->route('profile.penjual')->with('success', 'Profil berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hewan = Hewan::findOrFail($id);
        $hewan->delete();
        toast('Data Berhasil di Hapus','success');
        return redirect()->route('hewan.penjual');
    }
}
