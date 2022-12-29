<?php

namespace App\Http\Controllers;

use App\Models\master;
use App\Models\proses;
use App\Models\item;
use App\Models\price_list;
use Illuminate\Http\Request;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['item']= item::with(['link_price_list','link_price_list_now'])->get();
        return view('item.index',compact('data'));
        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['item']= item::with(['link_price_list','link_price_list_now'])->get();
        return view('item.create',compact('data'));
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
        $id= item::create([
            'code' => $request->code,
            'item_name' => $request->name,
            'unit' => $request->unit,
            'status' => $request->status,
            'type' => $request->type,
            'description' => $request->description,
            'created_at' =>now()
        ])->id; 
        price_list::create([
            'id_items' => $id,
            'price' => $request->price,
            'created_at' =>now()
        ]); 
        $data['item']= item::with(['link_price_list','link_price_list_now'])->get();
        return view('item.index',compact('data'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= item::where('id',$id)->with(['link_price_list','link_price_list_now'])->first();
        // dd($data);
        return view('item.show',compact('data'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= item::where('id',$id)->with(['link_price_list','link_price_list_now'])->first();
        return view('item.edit',compact('data'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        item::where('id',$id)->update([
            'code' => $request->code,
            'item_name' => $request->name,
            'unit' => $request->unit,
            'status' => $request->status,
            'status_master' => $request->status_master,
            'type' => $request->type,
            'description' => $request->description,
            'created_at' =>now()
        ]); 
        $last_price=price_list::where('id_items',$id)->latest()->first()->price;
        if ($last_price!=$request->price) {
            price_list::create([
                'id_items' => $id,
                'price' => $request->price,
                'created_at' =>now()
            ]); 
        }
        $data['item']= item::with(['link_price_list','link_price_list_now'])->get();
        return view('item.index',compact('data'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        //
    }
}
