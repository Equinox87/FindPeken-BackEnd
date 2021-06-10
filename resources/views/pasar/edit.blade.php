@extends('layouts.master')
@section('title','Edit Data Pasar')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data Pasar</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Edit Data Pasar</li>
        </ol>
        <div class="card">
            <form method="POST" enctype="multipart/form-data" action="{{ URL::to('/')}}/pasar/edit/{{$data->pasar_id}}">

                @csrf
                <div class="card-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pasar</h5>
                </div>
                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id"
                    value="{{$data->pasar_id}}">
                <div class="card card-body">
                    <div class="form-group">
                        <label for="exampleInput">Nama Pasar</label>
                        <input type="text" class="form-control {{$errors->has('nama')? 'is-invalid':''}}" id="nama"
                            name="nama" placeholder="Masukan Nama Pasar" value="{{$data->pasar_nama}}">
                        @if ($errors->has('nama'))
                        <div class="invalid-feedback">
                            Silahkan Masukan Nama Pasar
                        </div>
                        @endif
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control {{$errors->has('deskripsi')? 'is-invalid':''}}" id="deskripsi"
                            rows="3" name="deskripsi"
                            placeholder="Masukan Deskripsi Pasar">{{$data->pasar_deskripsi}}</textarea>
                        @if ($errors->has('deskripsi'))
                        <div class="invalid-feedback">
                            Silahkan Masukan Deskripsi Pasar
                        </div>
                        @endif
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control {{$errors->has('alamat')? 'is-invalid':''}}" id="alamat" rows="3"
                            name="alamat" placeholder="Masukan Alamat Pasar">{{$data->pasar_alamat}}</textarea>
                        @if ($errors->has('alamat'))
                        <div class="invalid-feedback">
                            Silahkan Masukan Alamat Pasar
                        </div>
                        @endif
                        <label for="exampleInput">Latitude</label>
                        <input type="text" class="form-control {{$errors->has('latitude')? 'is-invalid':''}}"
                            id="latitude" name="latitude" placeholder="Masukan Latitude Pasar"
                            value="{{$data->latitude}}">
                        @if ($errors->has('latitude'))
                        <div class="invalid-feedback">
                            Silahkan Masukan Latitude Pasar
                        </div>
                        @endif
                        <label for="exampleInput">Longitude</label>
                        <input type="text" class="form-control {{$errors->has('longitude')? 'is-invalid':''}}"
                            id="longitude" name="longitude" placeholder="Masukan Longitude Pasar"
                            value="{{$data->longitude}}">
                        @if ($errors->has('longitude'))
                        <div class="invalid-feedback">
                            Silahkan Masukan Longitude Pasar
                        </div>
                        @endif
                        <label for="exampleInput">Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar"
                                    aria-describedby="inputGroupFileAddon04" name="gambar">
                                <label class="custom-file-label"
                                    for="inputGroupFile04">{{$data->pasar_gambar != null? base64_decode($data->pasar_gambar):'Choose file'}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ URL::to('/')}}/pasar" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-warning float-right">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section><!-- End About Section -->
@endsection