@extends('layouts.main')

@section('content')
<main class="mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="float-left">
                            Data Users
                        </div>
                        <div class="float-right">
                            <a href="/admin/users/create/" class="btn btn-success btn-sm">
                                <i class="fa fa-plus-circle"></i>
                                Tambah Users
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Umur</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr class="text-center">
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->umur}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>{{$user->status}}</td>
                                        <td class="text-center">

                                            {{-- <a href="" class="btn btn-primary btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a> --}}

                                            {{-- <a href="" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a> --}}

                                            <form action="/admin/users/destroy/{{$user->id}}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                            </form>

                                            <a href="/admin/users/edit/{{$user->id}}" class="btn btn-warning btn-sm">
                                                <i class="fa fa-pen"></i>
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