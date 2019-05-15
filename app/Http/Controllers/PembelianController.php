<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pembelian;
use App\Supplier;
use App\Obat;

class PembelianController extends Controller
{

    public function index()
    {
        $pembelian = pembelian::with(['get_obat'])->get();

        $pembelian = pembelian::with(['get_supplier'])->get();

        return view('pembelian',compact('pembelian'));
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

        $supplier = Supplier::orderBy('idSupplier', 'ASC')->get();

        return view('formbeli',compact('obat'), compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pembelian')->insert([
            'idPembelian' => $request->idPembelian,
            'obat_idObat' => $request->obat_idObat,
            'supplier_idSupplier' => $request->supplier_idSupplier,
            'nmObat' => $request->nmObat,
            'tglKirim' => $request->tglKirim,
            'jumlah' => $request->jumlah
        ]);

        return redirect('/pembelian');
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
        $pembelian = DB::table('pembelian')->where('idPembelian',$id)->get();

        return view('editPembelian',['pembelian' => $pembelian]);
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
        DB::table('pembelian')->where('idPembelian',$id)->update([
            'jumlah' => $request->jumlah
        ]);

        return redirect('/pembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pembelian')->where('idPembelian',$id)->delete();

        return redirect('/pembelian');
    }
}
