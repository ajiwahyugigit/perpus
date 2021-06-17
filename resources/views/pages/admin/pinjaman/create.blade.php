@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row my-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Buku Pinjaman</h5>
                        </div>
                      <div class="card-body">
                        <form action="/admin/pinjaman/store" method="post">
                          @csrf

                          <div class="form-group">
                            <label for="users_id" class="form-label">Nama</label>
                            <select class="form-control" id="users_id" name="users_id">
                              <option>--- Pilih Nama ---</option>
                              @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                              @endforeach
                            </select> 
                          </div>
                          <div class="form-group">
                            <label for="judul" class="form-label">Pilih Buku</label>
                            <select class="form-control" id="books_id" name="books_id">
                              <option>--- Pilih Buku ---</option>
                              @foreach ($books as $book)
                                <option value="{{$book->id}}">{{$book->judul}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="status" class="form-label">Pilih Status</label>
                            <select class="form-control" id="status" name="status">
                              <option>--- Pilih Buku ---</option>
                              <option>Pending</option>
                              <option>Ditolak</option>
                              <option>Diterima</option>
                             
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="tgl_minjam" class="form-label">Tangal Minjam Buku</label>
                            <input type="date" class="form-control" id="tgl_minjam" name="tgl_minjam" aria-describedby="emailHelp" required>
                          </div>
                          <div class="form-group">
                            <label for="tgl_balikin" class="form-label">Tanggal Balikin Buku</label>
                            <input type="date" class="form-control" id="tgl_balikin" name="tgl_balikin" aria-describedby="emailHelp" required>
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