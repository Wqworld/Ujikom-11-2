<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Hewan;
use App\Models\Penjual;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session("role" ) != "admin") {
            return redirect()->route("beranda")->with("erorr","kamu bukan admin");
        }

        $hewan = Hewan::all();
        $penjual = Penjual::all();
        $jumlahhewan = $hewan->count();
        $jumlahpenjual = $penjual->count();

        $kambing = Hewan::where(['jenis' => "kambing"])->get();
        $jumlahKambing = $kambing->count();

        $sapi = Hewan::where(["jenis"=> "sapi"])->get();
        $jumlahSapi = $sapi->count();

        $domba = Hewan::where(["jenis"=> "domba"])->get();
        $jumlahDomba = $domba->count();

        return view("admin.index", ['admin' => session('admin')], compact(
            'hewan','jumlahhewan', 'jumlahpenjual',
            'kambing','jumlahKambing',
            'sapi', 'jumlahSapi',
            'domba', 'jumlahDomba',
        ));
    }


    public function hewan(){
        if (session("role" ) != "admin") {
            return redirect()->route("beranda")->with("erorr","kamu bukan admin");
        }

        $admin = session("admin");
        $hewan = Hewan::paginate(5);

        return view("admin.adminhewan", compact('hewan','admin'));
    }

    public function penjual(){
        if (session('role') != 'admin') {
            return redirect()->route('beranda')->with('erorr','Kamu bukan admin');
        }

        $penjual = Penjual::paginate(7);
        $admin = session('admin');
        return view('admin.adminpenjual',  compact('penjual','admin'));
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
