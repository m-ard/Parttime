<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('home', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_perusahaan' => 'required',
            'alamat' => 'required',
            'nama_perusahaan' => 'required',
            'no_perusahaan' => 'required',
            'email_perusahaan' => 'required',
            'keterangan' => 'required',
            'image' => 'required',
            
        ]);
        Company::create($request->post());
        return redirect()->route('companies.index')->with('success','Perusahaan has been created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('companies.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'id_perusahaan' => 'required',
            'alamat' => 'required',
            'nama_perusahaan' => 'required',
            'no_perusahaan' => 'required',
            'email_perusahaan' => 'required',
            'keterangan' => 'required',
            'image' => 'required',
        ]);
        
        $company->fill($request->post())->save();

        return redirect()->route('companies.index')->with('success','company has been updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success','company has been deleted successfully');
    
    }
}
