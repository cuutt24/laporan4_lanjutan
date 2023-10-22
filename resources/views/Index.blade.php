@extends('layout.default')

@section('content')
<section>
<div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Pencatatan KK desa</h1>
                <a href="{{url('create')}}" class="btn btn-primary">Tambah data</a>
            </div>
        </div>
        <div class="col-lg-8 mt-5">
            <table class="table-bordered">
                <tr>
                    <th>NO</th>
                    <th>Id</th>
                    <th>Nama kepala keluarga</th> 
                    <th>alamat</th>
                    <th>Jumlah anggota kk</th>
                    <th>Aksi</th>    
                </tr>
                @php
                    $no = 1; // Inisialisasi variabel nomor
                @endphp
                @foreach ($data as $dataKK)
                <tr> 
                    <td>{{ $no++ }}</td>
                    <td>{{ $dataKK->id }}</td>
                    <td>{{ $dataKK->nama_kk }}</td>
                    <td>{{ $dataKK->alalmat }}</td>
                    <td>{{ $dataKK->jumlah_kk }}</td>
                    <td>
                    <a href="{{ url('/show/'.$dataKK->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ url('/destroy/'.$dataKK->id) }}" class="btn btn-danger">Hapus</a>    
                    </td>    
                </tr>
                @endforeach
            </table>
        </div>
</div>
</section>
@endsection