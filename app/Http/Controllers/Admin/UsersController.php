<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        // Query Builder
        
        // $users = DB::table('users')->get();
        // return view('pages.admin.users.index', compact('users'));

        // Eloquent
        // $users = User::select('id', 'name', 'umur')->get();

        // semua data
        $users = User::all();
        return view('pages.admin.users.index', compact('users'));
    }

    public function create()
    {
        // $users = DB::table('users', 'id')->get();
        // dd($users);
        return view('pages.admin.users.create');

    }

    public function store(UserRequest $request)
    {

        User::create($request->validated());

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'umur' => $request->umur,
        //     'role' => $request->role,
        //     'password' => bcrypt($request->password),
        //     'status' => $request->status
        // ]);

        // $users = new User;
        
        // $users->name = $request->name;
        // $users->email = $request->email;
        // $users->umur = $request->umur;
        // $users->role = $request->role;
        // $users->password = Hash::make($request->newPassword);
        // $users->status = $request->status;

        // $users->save();
      
        return redirect('/admin/users');

    }

    public function edit($id)
    {   
        // $users = DB::table('users')->where($id)->get();
        // $users = DB::table('users', 'id')->get();

        $users = User::findOrFail($id);

        return view('pages.admin.users.edit', [
            'users' => $users
        ]);
    }

    public function update(Request $request, $id)
    {
        // query bulder

        // DB::table('users')->where('id', $id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'umur' => $request->umur,
        //     'role' => $request->role,
        //     'status' => $request->status
        // ]);

        // eloquem
        // $users = User::find($id);
        // $users->name = $request->name;
        // $users->email = $request->email;
        // $users->status = $request->status;
        // $users->role = $request->role;
        // $users->umur = $request->umur;

        // $users->save();
        
        $users = User::find($id);

        $users->update([
            'name' => $request->name,
            'email' => $request->email,
            'umur' => $request->umur,
            'role' => $request->role,
            'status' => $request->status
        ]);

        return redirect('/admin/users/');
    }

    public function destroy($id)
    {
        // DB::table('users')->delete();
        DB::table('users')->where('id', $id)->delete();

        return redirect()->back();
    }
}

