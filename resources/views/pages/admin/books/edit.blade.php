@extends('layouts.main')

@section('content')
<main>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url("/admin/books/update/$books->id")}}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nomor" class="form-label">Nomor Buku</label>
                                <input type="number" class="form-control" id="nomor" name="nomor" aria-describedby="emailHelp" required value="{{$books->nomor}}">
                              </div>
                              <div class="form-group">
                                <label for="kode" class="form-label">Kode Buku</label>
                                <input type="text" class="form-control" id="kode" name="kode" aria-describedby="emailHelp" required value="{{$books->kode}}">
                              </div>
                              <div class="form-group">
                                <label for="judul" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp" required value="{{$books->judul}}">
                              </div>
                              <div class="form-group">
                                <label for="penulis" class="form-label">Penulis Buku</label>
                                <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" required value="{{$books->penulis}}">
                              </div>
                              <div class="form-group">
                                <label for="penerbit" class="form-label">Penerbit Buku</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit" aria-describedby="emailHelp" required value="{{$books->penerbit}}">
                              </div>
                              <div class="form-group">
                                <label for="tahun" class="form-label">Tahun Buku</label>
                                <input type="date" class="form-control" id="tahun" name="tahun" aria-describedby="emailHelp" required value="{{$books->tahun}}">
                              </div>

                              <button class="btn btn-primary btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection