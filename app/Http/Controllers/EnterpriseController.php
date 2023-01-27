<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;
use App\Http\Requests\EnterpriseRequest;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enterprises = Enterprise::paginate(8);

        return view('enterprises.index', [
            'enterprises'=>$enterprises,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enterprises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnterpriseRequest $request)
    {
       // $validated = $request->validated();

        Enterprise::create([
            'name'=>$request->input('name'),
            'activity'=>$request->input('activity'),
            'phone'=>$request->input('phone'),
            'site'=>$request->input('site'),
            'address'=>$request->input('address'),

        ]);
        return redirect()->route('enterprises.index')->with('success', "L'entreprise a bien crée !");
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
    public function edit(Enterprise $enterprise)
    {

        return view('enterprises.edit', [
            'enterprise'=>$enterprise,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enterprise $enterprise)
    {

        $enterprise->name = $request->input('name');

        $enterprise->activity=$request->input('activity');
        $enterprise->phone = $request->input('phone');
        $enterprise->address = $request->input('address');
        $enterprise->site = $request->input('site');
        $enterprise->save();

        return redirect()->route('enterprises.index')->with('success', "L'entreprise a bien modifié !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Enterprise $enterprise)
    {
        $enterprise->delete();
        return redirect()->route('enterprises.index')->with('success', "l'entreprise a bien été supprimée !");
    }
}
