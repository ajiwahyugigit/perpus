@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row my-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Buku</h5>
                        </div>
                      <div class="card-body">
                        <form action="/admin/books/store" method="post">
                          @csrf

                          <div class="form-group">
                            <label for="nomor" class="form-label">Nomor Buku</label>
                            <input type="number" class="form-control" id="nomor" name="nomor" aria-describedby="emailHelp" required>
                          </div>
                          <div class="form-group">
                            <label for="kode" class="form-label">Kode Buku</label>
                            <input type="text" class="form-control" id="kode" name="kode" aria-describedby="emailHelp" required>
                          </div>
                          <div class="form-group">
                            <label for="judul" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="judul" name="judul" aria-describedby="emailHelp" required>
                          </div>
                          <div class="form-group">
                            <label for="penulis" class="form-label">Penulis Buku</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" aria-describedby="emailHelp" required>
                          </div>
                          <div class="form-group">
                            <label for="penerbit" class="form-label">Penerbit Buku</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" aria-describedby="emailHelp" required>
                          </div>
                          <div class="form-group">
                            <label for="tahun" class="form-label">Tahun Buku</label>
                            <input type="date" class="form-control" id="tahun" name="tahun" aria-describedby="emailHelp" required>
                          </div>

                          <button class="btn btn-primary btn-block">
                            Tambah
                          </button>
                       </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection