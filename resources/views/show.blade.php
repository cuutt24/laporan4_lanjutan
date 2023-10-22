@extends('layout.default')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <h1>Edit data KK</h1>
            <div class="col-lg-8 mt-5">
                <form action="{{ url('/update/'.$data->id)}}" method="POST">
                    <div class="form-group">
                        <label for="keterangan">Nama Kepala keluarga</label>
                        <input type="text" name="nama_kk" class="form-control" value="{{ $data->nama_kk }}">
                    </div>
                    <div class="form-group">
                        <label for="dk">alamat</label>
                        <input type="text" name="alalmat" class="form-control" value="{{ $data->alalmat }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah KK</label>
                        <input type="number" name="jumlah_kk" class="form-control" value="{{ $data->jumlah_kk }}">
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