<?php

namespace App\Http\Controllers\Admin;

use App\Books;
use App\Http\Controllers\Controller;
use App\Pinjaman;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamanController extends Controller
{
    public function index()
    {
        $pinjaman = Pinjaman::all();
        return view('pages.admin.pinjaman.index', compact('pinjaman'));
    }

    public function create()
    {
        $users = User::all();
        $books = Books::all();
        return view('pages.admin.pinjaman.create', compact('users', 'books'));
    }

    public function store(Request $request)
    {
        DB::table('pinjaman')->insert([
            'users_id' => $request->users_id,
            'books_id' => $request->books_id,
            'status' => $request->status,
            'tgl_minjam' => $request->tgl_minjam,
            'tgl_balikin' => $request->tgl_balikin,
        ]);

        // Pinjaman::create([
        //     'users_id' => $request->users_id,
        //     'books_id' => $request->books_id,
        //     'status' => $request->status,
        //     'tgl_minjam' => $request->tgl_minjam,
        //     'tgl_balikin' => $request->tgl_balikin,
        // ]);

        return redirect('admin/pinjaman');

        // return $request;
    }

    public function edit($id)
    {
        $pinjaman = Pinjaman::findOrFail($id);
        return view('pages.admin.pinjaman.edit', ['pinjaman' => $pinjaman]);
    }

    public function update(Request $request, $id)
    {
        // $pinjaman = Pinjaman::find($id);

        // $pinjaman->tgl_minjam = $request->tgl_minjam;
        // $pinjaman->tgl_balikin = $request->tgl_balikin;
        // $pinjaman->status = $request->status;

        // $pinjaman->save();

        // query builder
        $pinjaman = DB::table('pinjaman')
            ->where('id', $id)
            ->update([
                'tgl_minjam' => $request->tgl_minjam,
                'tgl_balikin' => $request->tgl_balikin,
                'status' => $request->status,
            ]);
            
        return redirect('admin/pinjaman');
    }

    public function show($id)
    {
        $pinjaman = Pinjaman::find($id);
        return view('pages.admin.pinjaman.show', compact('pinjaman'));
    }

    public function destroy($id)
    {
        $pinjaman = Pinjaman::find($id);
        $pinjaman->delete();
        
        return redirect('admin/pinjaman');
    }
}
