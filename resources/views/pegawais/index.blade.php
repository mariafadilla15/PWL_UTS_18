@extends('pegawais.layout')
    @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA PEGAWAI</h2>
            </div>
            <div class="row mt-5 d-flex justify-content-beetwen">
                <form method="get" action="{{ route('pegawais.index') }}" class="col-7 d-flex justify-content-start">
                    <div class="input-group mb-3">
                        <input id="search" name="search" class="form-control me-2" type="text" placeholder="search" aria-label="search" 
                        value="{{ request('search') }}">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </div> 
                </form>
                <div class="col-5 d-flex justify-content-end">
                    <div class="float-right mb-3">
                        <a class="btn btnsuccess" href="{{ route('pegawais.create') }}"> Input Pegawai</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
    @endif
    
    <table class="table table-bordered">
    <tr>
    <th>Nip</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jabatan</th>
    <th>Gaji Pokok</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($pegawais as $Pegawai)
    <tr>
    
    <td>{{ $Pegawai->nip }}</td>
    <td>{{ $Pegawai->nama }}</td>
    <td>{{ $Pegawai->alamat }}</td>
    <td>{{ $Pegawai->jabatan }}</td>
    <td>{{ $Pegawai->gaji_pokok}}</td>
    <td>
    <form action="{{ route('pegawais.destroy',$Pegawai->nip) }}" method="POST">
    
    <a class="btn btn-info" href="{{ route('pegawais.show',$Pegawai->nip) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('pegawais.edit',$Pegawai->nip) }}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
    </tr>
    
    @endforeach
    </table>
    {{ $pegawais->links() }}
@endsection