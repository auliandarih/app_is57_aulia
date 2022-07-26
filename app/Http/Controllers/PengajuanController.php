<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $pengajuan = Pengajuan::all();
        return view('page.pengajuan.index', compact('pengajuan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event      = Event::all();
        return view('page.pengajuan.form', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengajuan = new Pengajuan;

        $pengajuan->tanggal     = $request->tgl;
        $pengajuan->events_id   = $request->event;
        $pengajuan->deskripsi   = $request->desk;
        $pengajuan->harga       = $request->harga;
        $pengajuan->qty         = $request->qty;
        $pengajuan->jumlah      = $request->jumlah;
        $pengajuan->save();

        return redirect('/pengajuan');
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
        $event      = Event::all();
        $pengajuan  = Pengajuan::find($id);
        return view('page.pengajuan.edit',compact('pengajuan','event'));
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
        $pengajuan = Pengajuan::find($id);

        $pengajuan->tanggal     = $request->tgl;
        $pengajuan->events_id   = $request->event;
        $pengajuan->deskripsi   = $request->desk;
        $pengajuan->harga       = $request->harga;
        $pengajuan->qty         = $request->qty;
        $pengajuan->jumlah      = $request->jumlah;
        $pengajuan->save();

        return redirect('/pengajuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan  = Pengajuan::find($id);
        $pengajuan->delete();
        return redirect('/pengajuan');
    }
}
