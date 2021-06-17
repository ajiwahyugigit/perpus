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
                            <form action="{{url("/admin/pinjaman/update/$pinjaman->id")}}" method="post">
                                @method('PUT')
                                @csrf

                                <div class="form-group">
                                  <label for="name" class="form-label">Tangal Minjam</label>
                                  <input type="date" class="form-control" id="tgl_minjam" name="tgl_minjam" aria-describedby="emailHelp" value="{{$pinjaman->tgl_minjam}}">
                                </div>
                                <div class="form-group">
                                  <label for="name" class="form-label">Tangal Balikin</label>
                                  <input type="date" class="form-control" id="tgl_minjam" name="tgl_balikin" aria-describedby="emailHelp" value="{{$pinjaman->tgl_balikin}}">
                                </div> 
                                <div class="form-group">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="Pending" {{$pinjaman->status == 'Pending' ? 'selected' : ''}}>Pending</option>
                                    <option value="Ditolak" {{$pinjaman->status == 'Ditolak' ? 'selected' : ''}}>Ditolak</option>
                                    <option value="Diterima" {{$pinjaman->status == 'Diterima' ? 'selected' : ''}}>Diterima</option>
                                  </select>
                                </div>                               
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection