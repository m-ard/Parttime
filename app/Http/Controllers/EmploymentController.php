<?php

namespace App\Http\Controllers;

use App\Models\Employment;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employments = Employment::all();
        return view('admin.employments.index', compact('employments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_riwayat_pekerjaan' => 'required',
            'id' => 'required',
            'nama_perusahaan' => 'required',
            'posisi' => 'required',
            'keterangan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
        ]);
        Employment::create($request->post());

        return redirect()->route('admin.employments.index')->with('success','Employment has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employment $employment)
    {
        return view('admin.employments.show',compact('employments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employment $employment)
    {
        return view('admin.employments.edit',compact('employments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employment $employment)
    {
        $request->validate([
            'id_riwayat_pekerjaan' => 'required',
            'id' => 'required',
            'nama_perusahaan' => 'required',
            'posisi' => 'required',
            'keterangan' => 'required',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
        ]);
        
        $employment->fill($request->post())->save();

        return redirect()->route('admin.employments.index')->with('success','Employment Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employment $employment)
    {
        $employment->delete();
        return redirect()->route('admin.employments.index')->with('success','Employment has been deleted successfully');
    }
}
