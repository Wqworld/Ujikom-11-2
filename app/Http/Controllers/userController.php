<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Hewan;
use App\Models\Penjual;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hewan = Hewan::all();
        return view("index", compact("hewan"));
    }

    public function loginform(){
        return view("login");
    }

    public function registerform(){
        return view("register");
    }

    public function login(Request $request){

        $admin = Admin::where("username", $request->username)->where("password", $request->password)->first();
        $penjual = Penjual::where("username", $request->username)->where("password",$request->password)->first();

        if ($admin) {

            session(['role' => 'admin','admin' => $admin]);
            // Alert::success('Hallo Admin', 'Kamu berasil login sebagai admin');

            return redirect()->route('beranda.admin');

        } else if ($penjual){
            session(['penjual' => $penjual, 'role' => 'penjual']);
            // Alert::success('Hallo Admin', 'Kamu berasil login sebagai admin');
            return redirect()->route('beranda.penjual' );
            // return view('penjual.index', compact('penjual'));
        }
        else {
            return redirect()->route('login');   
        }

    }

    public function register(Request $request){
        
        $validasiData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'repeat_password' => 'required',
            'nama_penjual' => 'required',
            'umur_penjual' => 'required',
            'nomor_hp' => 'required',
            'alamat_penjual' => 'required',
        ]);

        Penjual::create($validasiData);

        return redirect()->route('login');
    }

    public function logout(){
        session()->flush();
        return redirect()->route('beranda');
    }

    public function layanan(){
        return view("layanan");
    }

    public function hewan(){
        $hewan = Hewan::all();
        return view("produk",compact("hewan"));
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
