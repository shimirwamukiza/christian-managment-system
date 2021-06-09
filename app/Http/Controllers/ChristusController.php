<?php

namespace App\Http\Controllers;

use App\Models\Christus;
use Illuminate\Http\Request;

class ChristusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('christus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $r
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {

        $r->validate([

            'fname' => 'required',

            'lname' => 'required',
            'gender' => 'required',
            'faname' => 'required',
            'mname' => 'required',
            'province' => 'required',
            'district' => 'required',
            'sector' => 'required',
            'cell' => 'required',
            'village' => 'required',
            'cchurch' => 'required',
            'status' => 'required',

        ]);

    

        Christus::create($r->all());

     

        return redirect()->route('christus.create')

                        ->with('success','christian added successfully.');

   

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Christus  $christus
     * @return \Illuminate\Http\Response
     */
    public function show(Christus $christus)
    {
        return view('ch.s_show', compact('christus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Christus  $christus
     * @return \Illuminate\Http\Response
     */
    public function edit(Christus $christus)
    {
        return view('ch.s_edit', compact('christus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Christus  $christus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Christus $christus)
    {
        $request->validate([
            'fname'=> 'required',
            'lname'=> 'required',
                'gender' => 'required',
                'faname'=> 'required',
                 'mname'=> 'required',
                'province'=> 'required',
                'district'=> 'required',
               'sector'=> 'required',
               'cell'=> 'required',
                'village'=> 'required',
                'cchurch'=> 'required',
                'phone'=> 'required',
                'status'=> 'required',
                
        ]);
        $ch = Christus::all();
               $christian->fname='fname';
                $christian->lname='lname';
                $christian->gender ='gender';
                $christian->faname='faname';
                $christian->mname='mname';
                $christian->province ='province';
                $christian->district='district';
                $christian->sector ='sector';
                $christian->cell ='cell';
                $christian->village ='village';
                $christian->cchurch ='cchurch';
                $christian->phone ='phone';
                $christian->status ='status';
                $christian->save();

            // redirect
           // Session::flash('message', 'Successfully updated student!');
           return view('ch.s_index')->with('message', 'Successfully updated Christian!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Christus  $christus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Christus $christus)
    {
        //
    }
}
