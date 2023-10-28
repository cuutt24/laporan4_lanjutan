@extends('main')
@section('ti
tle','tambah')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <h1>Input data desa</h1>
            <div class="col-lg-8 mt-5">
                <form action="{{ url('/store')}}" method="POST">
                    <div class="form-group">
                        <label for="keterangan">Nama Kepala keluarga</label>
                        <input type="text" name="nama_kk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dk">Alamat</label>
                        <input type="text" name="alalmat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Anggota KK</label>
                        <input type="number" name="jumlah_kk" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                    <div class="form-group mt-2">
                        <a href="{{url('/')}}"> Kembali ke dashboard</a>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</section>
@endsection