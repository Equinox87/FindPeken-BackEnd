@extends('layouts.master')
@section('title','Edit Data User')
@section('content')

<main id="main">
    <!-- ======= Section ======= -->
    <section id="ortu">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Edit Data User</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Edit Data User</li>
                </ol>
            </div>
            <form method="POST" enctype="multipart/form-data" action="{{ URL::to('/')}}/user/edit/{{$data->id}}">

                @csrf
                <div class="card-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                </div>
                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id" value="{{$data->id}}">
                <div class="card card-body">
                    <div class="form-group">
                        <label for="exampleInput">Nama</label>
                        <input type="text" class="form-control {{$errors->has('nama')? 'is-invalid':''}}" id="nama"
                            name="nama" placeholder="Masukan Nama Pasar" value="{{$data->name}}">
                        @if ($errors->has('nama'))
                        <div class="invalid-feedback">
                            Silahkan Masukan Nama
                        </div>
                        @endif
                        <label for="exampleInput">Email</label>
                        <input type="email" class="form-control {{$errors->has('email')? 'is-invalid':''}}" id="email"
                            name="email" placeholder="Masukan Email" value="{{$data->email}}" readonly>
                        @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            Silahkan Masukan Email
                        </div>
                        @endif
                        <label for="exampleInput">Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gambar"
                                    aria-describedby="inputGroupFileAddon04" name="gambar">
                                <label class="custom-file-label"
                                    for="inputGroupFile04">{{$data->img != null? base64_decode($data->img):'Choose file'}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="alert-heading">Form Password Baru</h4>
                        <p>Digunakan untuk mengubah password pada akun</p>
                        <hr>
                        <p class="mb-0">Silahkan Mengisi Form Password Baru Jika Ingin Mengubah Password!</p>
                    </div>
                    <div class="card">
                        <div class="card-header" style="background: transparent;">
                            <h6 class="modal-title font-weight-bold" id="exampleModalLabel">Password Baru
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input class="form-control" type="password" name="password"
                                    placeholder="Masukan Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Konfirmasi Password</label>
                                <input class="form-control" type="password" name="conPass"
                                    placeholder="Masukan Konfirmasi Password">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ URL::to('/')}}/user" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-warning float-right">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section><!-- End About Section -->
</main><!-- End #main -->
@endsection