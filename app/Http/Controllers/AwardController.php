<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awards = award::all();
        return view('admin.awards.index', compact('awards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.awards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'id_penghargaan' => 'required',
            'jenis' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);
        Award::create($request->post());

        return redirect()->route('admin.awards.index')->with('success','Award has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Award $award)
    {
        return view('admin.awards.show',compact('awards'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Award $award)
    {
        return view('admin.awards.edit',compact('awards'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Award $award)
    {
        $request->validate([
            'id_Penghargaan' => 'required',
            'jenis' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);
        
        $award->fill($request->post())->save();

        return redirect()->route('admin.awards.index')->with('success','Award Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Award $award)
    {
        $award->delete();
        return redirect()->route('admin.awards.index')->with('success','Award has been deleted successfully');
    }
}
