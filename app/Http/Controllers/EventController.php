<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $event = Event::all();
        return view('page.event.index', compact('event','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.event.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Event::class);
        $event = new Event;

        $event->no_event    = $request->no;
        $event->nm_event    = $request->nama;
        $event->client      = $request->client;
        $event->mother_eo   = $request->mother;
        $event->tgl_mulai   = $request->mulai;
        $event->tgl_akhir   = $request->akhir;
        $event->budget      = $request->budget;
        $event->save();

        return redirect('/event');
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
        $event = Event::find($id);
        return view('page.event.edit',compact('event'));
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
        $event = Event::find($id);

        $event->no_event    = $request->no;
        $event->nm_event    = $request->nama;
        $event->client      = $request->client;
        $event->mother_eo   = $request->mother;
        $event->tgl_mulai   = $request->mulai;
        $event->tgl_akhir   = $request->akhir;
        $event->budget      = $request->budget;
        $event->save();

        return redirect('/event');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event  = Event::find($id);
        $event->delete();
        return redirect('/event');
    }
}
