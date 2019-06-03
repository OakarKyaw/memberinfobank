<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\floorMod;
class floorCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $floors=floorMod::all();
        return view('index1',compact('floors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('floorView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate(['floorDesc'=>'required'
                           
                        ]);
        $floors=new floorMod([
        'floorDesc'=>$request->get('floorDesc'),
        'active'=>$request->get('active'),
        'remark'=>$request->get('remark')

        ]);
        $floors->save();
        return redirect('/floorCN')->with('success','Successfully');
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
        
        $floors=floorMod::find($id);
        return view('floorEditView',compact('floors')); 
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
         $request->validate(['floorDesc'=>'required'
                            
                            

        ]);
        $floors=floorMod::find($id);
        $floors->floorDesc=$request->get('floorDesc');
        $floors->active=$request->get('active');
        $floors->remark=$request->get('remark');

        $floors->save();

        return redirect('/floorCN')->with('success','Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $floors=floorMod::find($id);
        $floors->delete();
        return redirect('/floorCN')->with('success','Successfully Deleted');
    }
}
