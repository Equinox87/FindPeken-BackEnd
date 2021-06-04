<div class="collapse mb-3" id="collapseExample">
    <div class="card">
        <div class="card-header">
            <button type="button" class="close" data-toggle="collapse" data-target="#collapseExample" aria-label="Close"
                aria-expanded="false">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        </div>
        <div class="card card-body">
            <form method="POST" enctype="multipart/form-data" action="{{url('user')}}" id="formUpload">
                @csrf
                <div class="form-group">
                    <div class="alert alert-warning" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="alert-heading">Perhatian!!</h4>
                        <p>Password Default User Baru <strong>123</strong></p>
                        <hr>
                        <p class="mb-0">Anda Dapat Mengubah Password Pada Menu Edit User!</p>
                    </div>

                    <label for="exampleInput">Nama</label>
                    <input type="text" class="form-control {{$errors->has('nama')? 'is-invalid':''}}" id="exampleInput"
                        name="nama" placeholder="Masukan Nama Pasar">
                    @if ($errors->has('nama'))
                    <div class="invalid-feedback">
                        Silahkan Masukan Nama
                    </div>
                    @endif
                    <label for="exampleInput">Email</label>
                    <input type="email" class="form-control" id="exampleInput" name="email" placeholder="Masukan Email">
                    <label for="exampleInput">Gambar</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04" name="gambar">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>