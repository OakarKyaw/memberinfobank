<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\roomTypeMod;
class roomTypeCtr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomTypes=roomTypeMod::all();
        return view('index',compact('roomTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roomTypeView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['roomTypeDesc'=>'required',
                            'active'=>'required',
                            'remark'=>'required'
                        ]);
        $roomTypes=new roomTypeMod([
        'roomTypeDesc'=>$request->get('roomTypeDesc'),
        'active'=>$request->get('active'),
        'remark'=>$request->get('remark')

        ]);
        $roomTypes->save();
        return redirect('/roomTypeCN')->with('success','Successfully');
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
        $roomTypes=roomTypeMod::find($id);
        return view('roomTypeEditView',compact('roomTypes'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(['roomTypeDesc'=>'required'
                            
                            

        ]);
        $roomTypes=roomTypeMod::find($id);
        $roomTypes->roomTypeDesc=$request->get('roomTypeDesc');
        $roomTypes->active=$request->get('active');
        $roomTypes->remark=$request->get('remark');

        $roomTypes->save();

        return redirect('/roomTypeCN')->with('success','Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomTypes=roomTypeMod::find($id);
        $roomTypes->delete();
        return redirect('/roomTypeCN')->with('success','Successfully Deleted');
    }
}
