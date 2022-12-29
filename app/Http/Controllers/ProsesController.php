<?php

namespace App\Http\Controllers;

use App\Models\master;
use App\Models\proses;
use App\Models\item;
use App\Models\price_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['proses']= proses::with(['link_item','link_master'])->get();
        $data['master']= master::with(['link_item','link_process','link_process1'])->get();
        $data['item']= item::get();
        // dd($data['master']);
        return view('process.index',compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['proses']= proses::with(['link_item','link_master'])->get();
        $data['master']= master::with(['link_item','link_process','link_process1'])->get();
        $data['item']= item::get();
        // dd($data['master']);
        return view('process.create',compact('data'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=proses::create([
            'id_item' => $request->id_item,
            'process' => $request->process,
            'time' => $request->time,
            'created_at' =>now()
        ]); 
        
        $data['proses']= proses::with(['link_item','link_master'])->get();
        $data['master']= master::with(['link_item','link_process','link_process1'])->get();
        $data['item']= item::get();
        // dd($data['item']);
        return Redirect::to(url()->previous());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proses  $proses
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['proses']= proses::where('id',$id)->with(['link_item','link_master'])->first();
        $data['master']= master::with(['link_item','link_item1','link_process','link_process1'])->get();
        $data['item']= item::where('id',$id)->with(['link_proses'])->first();
        // dd($data['proses']);
        return view('process.show',compact('data'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proses  $proses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['proses']= proses::where('id',$id)->with(['link_item','link_master'])->first();
        $data['master']= master::with(['link_item','link_process','link_process1'])->get();
        $data['item']= item::with(['link_proses'])->get();
        // dd($data['proses']);
        return view('process.edit',compact('data'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\proses  $proses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $id=proses::where('id',$id)->update([
            'id_item' => $request->id_item,
            'time' => $request->time,
            'process' => $request->process,
            'created_at' =>now()
        ]); 
        $data['proses']= proses::with(['link_item','link_master'])->get();
        $data['master']= master::with(['link_item','link_process','link_process1'])->get();
        $data['item']= item::get();
        // dd($data['item']);
        return view('process.edit',compact('data'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proses  $proses
     * @return \Illuminate\Http\Response
     */
    public function destroy(proses $proses)
    {
        //
    }
}
