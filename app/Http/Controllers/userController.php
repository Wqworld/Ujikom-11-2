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

    public function login(Request $request){
        
        $validateData = $request->validate([
            "username" => "required",
            "password"=> "required",
        ]);

        $admin = Admin::where("username", $request->username)->where("password", $request->password)->first();
        $penjual = Penjual::where("username", $request->username)->where("password",$request->password)->first();

        if ($admin) {
            session(['username' => $admin->username]);
            // Alert::success('Hallo Admin', 'Kamu berasil login sebagai admin');
            $identitasAdmin = Admin::where('username', $request->username)->where('password', $request->password)->first();
            return redirect('/admin', compact('identitasAdmin'));

        } else if ($penjual){
            session(['username' => $penjual->username]);
            $identitasPenjual = Penjual::where('username', $request->username)->where('password', $request->password)->first();
            $penjual = $identitasPenjual;
            // Alert::success('Hallo Admin', 'Kamu berasil login sebagai admin');
            return redirect()->route('beranda.penjual');
            // return view('penjual.index', compact('penjual'));
        }

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
