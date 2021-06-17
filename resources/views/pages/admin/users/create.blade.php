@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row my-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Create</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{url('admin/users/store/')}}" method="post">
                                @csrf

                                <div class="form-group">
                                  <label for="name" class="form-label">Nama Pengguna</label>
                                  <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                  <label for="umur" class="form-label">Umur</label>
                                  <input type="text" class="form-control" name="umur" id="umur" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                  <label for="role" class="form-label">Role</label>
                                  <select class="form-control" id="role" name="role">
                                    <option>--- Pilih Role ---</option>
                                    <option>Admin</option>
                                    <option>User</option>
                                  </select> 
                                </div>
                                <div class="form-group">
                                  <label for="password" class="form-label">Password</label>
                                  <input type="password" class="form-control" name="password" id="password" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    {{-- <input type="text" class="form-control" name="status" id="status" aria-describedby="emailHelp"> --}}
                                    <select class="form-control" id="status" name="status">
                                      <option>--- Pilih Status ---</option>
                                      <option>Siswa</option>
                                      <option>Mahasiswa</option>
                                      <option>Karyawan</option>
                                      <option>Guru</option>
                                      <option>Dosen</option>
                                    </select>
                                  </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection