@extends('layouts.main')

@section('content')
<main class="mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                       <div class="row">
                           <div class="col-4">
                               <div class="card">
                                   <img src="" alt="">
                               </div>
                           </div>
                           <div class="col">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>           
                                    <tbody>
                                        <tr>
                                            <td>{{$pinjaman->users->name}}</td>
                                            <td>{{$pinjaman->users->email}}</td>
                                            <td>{{$pinjaman->users->role}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col">
                               <div class="table-responsive">
                                   <table class="table table-bordered" width="100%" cellspacing="0">
                                       <tbody>
                                        <tr>
                                            <th>Kode</th>
                                            <td>{{$pinjaman->books->kode}}</td>
                                        </tr>
                                        <tr>
                                            <th>Judul</th>
                                            <td>{{$pinjaman->books->judul}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Minjam</th>
                                            <td>{{$pinjaman->tgl_minjam}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Balikin</th>
                                            <td>{{$pinjaman->tgl_balikin}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{$pinjaman->status}}</td>
                                        </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection