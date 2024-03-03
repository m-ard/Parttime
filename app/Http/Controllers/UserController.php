<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'email_verified_at'=> 'required',
            'password' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'tinggi' => 'required',
            'bb' => 'required',
            'agama' => 'required',
            'kebangsaan' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'image' => 'required',
            'remember_token' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
            
        ]);
        User::create($request->post());

        return redirect()->route('users.index')->with('success','user has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'email_verified_at'=> 'required',
            'password' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'tinggi' => 'required',
            'bb' => 'required',
            'agama' => 'required',
            'kebangsaan' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'image' => 'required',
            'remember_token' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
            
        ]);
        $user->fill($request->post())->save();
        return redirect()->route('users.index')->with('success','user has been update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','user has been deleted successfully');
    
    }
}
