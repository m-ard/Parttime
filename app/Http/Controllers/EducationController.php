<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        return view('admin.educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_riwayat_pendidikan' => 'required',
            'nama_sekolah' => 'required',
            'tingkatan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
        ]);
        Education::create($request->post());

        return redirect()->route('admin.educations.index')->with('success','Education has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        return view('admin.educations.show',compact('Educations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('admin.educations.edit',compact('Educations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'id_riwayat_pendidikan' => 'required',
            'nama_sekolah' => 'required',
            'tingkatan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
        ]);
        
        $education ->fill($request->post())->save();

        return redirect()->route('admin.educations.index')->with('success','Education Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('admin.educations.index')->with('success','Education has been deleted successfully');
    }
}
