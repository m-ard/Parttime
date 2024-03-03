<?php

namespace App\Http\Controllers;

use App\Models\Experiece;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_Pengalaman' => 'required',
            'kegiatan' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);
        Experience::create($request->post());

        return redirect()->route('admin.experiences.index')->with('success','Experiece has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experiece)
    {
        return view('admin.experiences.show',compact('experiences'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experiece)
    {
        return view('admin.experiences.edit',compact('experiences'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'id_Pengalaman' => 'required',
            'kegiatan' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);
        
        $experience->fill($request->post())->save();

        return redirect()->route('admin.experiences.index')->with('success','Experiece Has Been updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('admin.experiences.index')->with('success','Experiece has been deleted successfully');
    }
}
