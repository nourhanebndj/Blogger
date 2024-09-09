<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
    ]);

    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    return redirect()->route('admin.members')->with('success', 'New user added successfully.');
}
    public function display(){
        $users = User::orderBy('updated_at', 'desc')->get();
        return view('admin.members',compact('users'));
    }

    public function destroy($id){
        $users=User::findOrFail($id);
        $users->delete();
        return view('admin.members')->with('success','Account of admin is succesfully deleted');
    }
}