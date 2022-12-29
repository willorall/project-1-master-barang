<?php

namespace App\Http\Controllers;

use App\Models\master;
use App\Models\proses;
use App\Models\item;
use App\Models\price_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['item']= item::with(['link_price_list','link_price_list_now'])->get();
        // dd($data['master']);
        return view('master.index',compact('data'));
        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $data['proses']= proses::with(['link_item','link_master'])->get();
        $data['item']= item::with(['link_price_list','link_price_list_now'])->get();
        // dd($data['master']);
        return view('master.create  ',compact('data'));
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
        master::create([
            'id_items' => $request->id_items,
            'id_proses' => $request->id_proses,
            'id_raw_items' => $request->id_raw_items,
            'quantity' => $request->quantity,
            'created_at' =>now()
        ]); 
        $data['proses']= proses::with(['link_item','link_master'])->get();
        $data['item']= item::with(['link_price_list','link_price_list_now'])->get();        
        return Redirect::to(url()->previous());

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\master  $master
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['proses']= proses::with(['link_item','link_master'])->first();
        $data['master']= master::where('id',$id)->with(['link_item','link_item1','link_process','link_process1'])->first();
        $data['item']= item::where('id',$id)->with(['link_proses'])->first();
        // dd($data['proses']);
        return view('master.showkoko',compact('data'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(master $master)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master $master)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(master $master, Request $request, $id)
    {
        item::where('id',$id)->update([
            'status_master' => "0"
        ]); 
        $masterfind = master::where('id_items',$id)->delete();
        $prosesfind = proses::where('id_item',$id)->delete();
        // dd(item::where('id',$request->id)->get());

        $data['item']= item::with(['link_price_list','link_price_list_now'])->get();
        return view('master.index',compact('data'));
        
    }
    public function add(Request $request)
    {
        $data= item::with(['link_price_list','link_price_list_now'])->first();
        $data['proses']= proses::with(['link_item','link_master'])->first();
        $data['master']= master::with(['link_item','link_item1','link_process','link_process1'])->first();
        $data['item']= item::with(['link_proses'])->get();
        // dd($data['item']);
        return view('master.add',compact('data'));
        //
    }
    public function addupdate(Request $request)
    {

        item::where('id',$request->id)->update([
            'status_master' => "1"
        ]); 
        // dd(item::where('id',$request->id)->get());

        $data['item']= item::with(['link_price_list','link_price_list_now'])->get();
        return view('master.index',compact('data'));

    }
}
