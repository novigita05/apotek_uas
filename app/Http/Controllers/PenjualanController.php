<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Penjualan;
use App\Obat;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = penjualan::with(['get_obat'])->get();

        return view('penjualan',compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat = Obat::orderBy('idObat', 'ASC')->get();
        
        $obat = Obat::orderBy('nmObat', 'ASC')->get();

        return view('formjual', compact('obat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('penjualan')->insert([
            'idPenjualan' => $request->idPenjualan,
            'obat_idObat1' => $request->obat_idObat1,
            'nmObat' => $request->nmObat,
            'tglKeluar' => $request->tglKeluar,
            'jumlah' => $request->jumlah
        ]);

        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualan = DB::table('penjualan')->where('idPenjualan',$id)->get();

        return view('editPenjualan',['penjualan' => $penjualan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('penjualan')->where('idPenjualan',$id)->update([
            'jumlah' => $request->jumlah
        ]);

        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('penjualan')->where('idPenjualan',$id)->delete();

        return redirect('/penjualan');
    }
}
