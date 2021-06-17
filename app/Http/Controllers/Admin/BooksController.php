<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index()
    {
        // eloquem

        // $books = Books::all();
        // return view('pages.admin.books.index', compact('books'));

        // query builder
        $books = DB::table('books')->get();
        return view('pages.admin.books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('pages.admin.books.create');
    }

    public function store(Request $request)
    {
        // query builder
        // DB::table('books')->insert([
        //     'nomor' => $request->nomor,
        //     'kode' => $request->kode,
        //     'judul' => $request->judul,
        //     'penulis' => $request->penulis,
        //     'penerbit' => $request->penerbit,
        //     'tahun' => $request->tahun,
        // ]);

        // eloquent
        $books = new Books;
        
        $books->foto = $request->foto;
        $books->kode = $request->kode;
        $books->judul = $request->judul;
        $books->penulis = $request->penulis;
        $books->penerbit = $request->penerbit;
        $books->tahun = $request->tahun;

        $books->save();
        
        return redirect('/admin/books');
    }

    public function edit($id)
    {
        // querybuilder
        // $books = DB::table('books')->where('id', $id)->get();

        $books = Books::findOrfail($id);
        return view('pages.admin.books.edit', ['books' => $books]);
    }

    public function update(Request $request, $id)
    {
        // $books = Books::find($id);

        // $books->nomor = $request->nomor;
        // $books->kode = $request->kode;
        // $books->judul = $request->judul;
        // $books->penulis = $request->penulis;
        // $books->penerbit = $request->penerbit;
        // $books->tahun = $request->tahun;

        // $books->save();

        // query builder
        $books = DB::table('books')
            ->where('id', $id)
            ->update([
                'foto' => $request->foto,
                'kode' => $request->kode,
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahun' => $request->tahun,
            ]);

        return redirect('/admin/books');
        
    }

    public function destroy()
    {
        
    }
}

