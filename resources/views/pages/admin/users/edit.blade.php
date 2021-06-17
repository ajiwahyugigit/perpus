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
                            <form action="{{url("admin/users/update/$users->id")}}" method="post">
                                @method('PUT')
                                @csrf

                                <div class="form-group">
                                  <label for="name" class="form-label">Nama Pengguna</label>
                                  <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$users->name}}">
                                </div>
                                <div class="form-group">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{$users->email}}">
                                </div>
                                <div class="form-group">
                                  <label for="umur" class="form-label">Umur</label>
                                  <input type="text" class="form-control" name="umur" id="umur" aria-describedby="emailHelp" value="{{$users->umur}}">
                                </div>
                                <div class="form-group">
                                  <label for="umur" class="form-label">Role</label>
                                  <select class="form-control" id="role" name="role">
                                    <option>--- Pilih Role ---</option>
                                    <option value="Admin" {{$users->role == 'Admin' ? 'selected' : ''}}>Admin</option>
                                    <option value="User" {{$users->role == 'User' ? 'selected' : ''}}>User</option>
                                  </select> 
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                      <option>--- Pilih Status ---</option>
                                      <option value="Siswa" {{$users->status == 'Siswa' ? 'selected' : ''}}>Siswa</option>
                                      <option value="Mahasiswa" {{$users->status == 'Mahasiswa' ? 'selected' : ''}}>Mahasiswa</option>
                                      <option value="Karyawan" {{$users->status == 'Karyawan' ? 'selected' : ''}}>Karyawan</option>
                                      <option value="Guru" {{$users->status == 'Guru' ? 'selected' : ''}}>Guru</option>
                                      <option value="Dosen" {{$users->status == 'Dosen' ? 'selected' : ''}}>Dosen</option>
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