<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Penjual;
use Illuminate\Http\Request;

class penjualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $penjual = Penjual::findOrFail($id);
        if (session("role") != "penjual") {
           return redirect()->back()->with("error","Kamu Bukan penjual");
        }

        $penjual = session("penjual");
        $jumlahHewan = Hewan::where("id_penjual", $penjual->id)->count();
        $jumlahHewanReady = Hewan::where("id_penjual", $penjual->id)->where("status", "Ready")->count();
        $jumlahHewanTidakReady = Hewan::where("id_penjual", $penjual->id)->where("status", "Tidak Ready")->count();


        $hewanTerbaru = Hewan::where("id_penjual", $penjual->id)->take(4)->get();

        return view("penjual.index" , compact("penjual", "jumlahHewan", "jumlahHewanReady","jumlahHewanTidakReady","hewanTerbaru"));
    }

    public function hewan(){

        if (!session("penjual") || session("admin")) {
            return redirect()->back()->with("error","Kamu tidak Memiliki akses");
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
        $hewan = Hewan::where("id", $id)->first();
        return view("penjual.show", compact("hewan"));
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
