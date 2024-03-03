<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $submissions = Submission::all();
        return view('admin.submissions.index', compact('submissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.submissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_lamaran' => 'required',
            'id_pengguna' => 'required',
            'id_lowongan_pekerjaan' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
        ]);

        Submission::create($request->post());

        return redirect()->route('admin.submissions.index')->with('success','submission has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Submission $submission)
    {
        return view('admin.submissions.show',compact('submissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submission $submission)
    {
        return view('admin.submissions.edit',compact('submissions'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Submission $submission)
    {
        $request->validate([
            'id_lamaran' => 'required',
            'id_pengguna' => 'required',
            'id_lowongan_pekerjaan' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
        ]);
        
        $submission ->fill($request->post())->save();

        return redirect()->route('admin.submissions.index')->with('success','submission Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submission $submission)
    {
        $submission->delete();
        return redirect()->route('admin.submissions.index')->with('success','submission has been deleted successfully');
    }

    public function notifyHome(){
        $notif = Submission::join('vacancies', 'submissions.id_lamaran', '=', 'vacancies.id_lowongan_pekerjaan')->select('submissions.*', 'vacancies.posisi')->get();
        return view('track', compact('notif'));
    }
}
