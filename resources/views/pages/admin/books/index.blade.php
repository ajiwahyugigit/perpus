@extends('layouts.main')

@section('content')
<main class="mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="float-left">
                            Data Buku
                        </div>
                        <div class="float-right">
                            <a href="/admin/books/create" class="btn btn-success btn-sm">
                                <i class="fa fa-plus-circle"></i>
                                Tambah Buku
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                           
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>kode</th>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Penerbit</th>
                                        <th>Tahun</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                   @foreach ($books as $book)
                                       <tr>
                                            <td>{{$book->foto}}</td>
                                            <td>{{$book->kode}}</td>
                                            <td>{{$book->judul}}</td>
                                            <td>{{$book->penulis}}</td>
                                            <td>{{$book->penerbit}}</td>
                                            <td>{{$book->tahun}}</td>
                                            <td>
                                                <a href="/admin/books/edit/{{$book->id}}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                       </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection