@extends('layouts.main')

@section('content')
<main class="mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                       <div class="float-left">
                            <i class="fas fa-table mr-1"></i>
                            DataTable Example
                       </div>
                       <div class="float-right">
                            <a href="/admin/pinjaman/create" class="btn btn-success btn-sm">
                                <i class="fa fa-plus-circle"></i>
                                Tambah
                            </a>
                       </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                           
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Foto</th>
                                        <th>Judul</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                  @foreach ($pinjaman as $p)
                                    <tr>
                                        <td>{{$p->books->foto}}</td>
                                        <td>{{$p->books->judul}}</td>
                                        <td>{{$p->users->name}}</td>
                                        <td>
                                            <select class="form-control" id="status" name="status" disabled>
                                                <option  value="Pending" {{$p->status == 'Pending' ? 'selected' : ''}}>Pending</option>
                                                <option value="Ditolak" {{$p->status == 'Ditolak' ? 'selected' : ''}}>Ditolak</option>
                                                <option  value="Diterima" {{$p->status == 'Diterima' ? 'selected' : ''}}>Diterima</option>
                                              </select>
                                        </td>
                                        <td>
                                            <a href="/admin/pinjaman/edit/{{$p->id}}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <form action="/admin/pinjaman/destroy/{{$p->id}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                
                                            <a href="/admin/pinjaman/show/{{$p->id}}" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i>
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