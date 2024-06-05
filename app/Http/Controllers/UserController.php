<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin/user/index',compact('users'));
    }
    public function create(){
        return view('admin/user/create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'role'=>'required',
            'password' => 'required',
        ]);
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole($request->role);
        return redirect('/admin/user')->with('success','Berhasil tambah user');
    }
    public function edit(User $user){
        return view('/admin/user/edit',compact('user'));
    }
    public function update(Request $request, User $user){
        $this->validate($request, [
            'name' => 'required',
            'email' => ['required',Rule::unique('user')->ignore($user)],
            'role' => 'required',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user ->role = $request->role;
        $user->save();
        return redirect('/admin/user')->with('success','Berhasil edit user!');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect('/admin/user')->with('success','Berhasil hapus user');
    }
}
