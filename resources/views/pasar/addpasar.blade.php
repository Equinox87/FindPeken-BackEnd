<div class="collapse mb-3" id="collapseExample">
    <div class="card">
        <div class="card-header">
            <button type="button" class="close" data-toggle="collapse" data-target="#collapseExample" aria-label="Close"
                aria-expanded="false">
                <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Tambah Pasar</h5>
        </div>
        <div class="card card-body">
            <form method="POST" enctype="multipart/form-data" action="#" id="formUpload">
                @csrf
                <div class="form-group">
                    <label for="exampleInput">Nama Pasar</label>
                    <input type="text" class="form-control {{$errors->has('nama')? 'is-invalid':''}}" id="exampleInput"
                        name="nama" placeholder="Masukan Nama Pasar">
                    @if ($errors->has('nama'))
                    <div class="invalid-feedback">
                        Silahkan Masukan Nama Pasar
                    </div>
                    @endif
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control {{$errors->has('deskripsi')? 'is-invalid':''}}"
                        id="exampleFormControlTextarea1" rows="3" name="deskripsi"
                        placeholder="Masukan Deskripsi Pasar"></textarea>
                    @if ($errors->has('deskripsi'))
                    <div class="invalid-feedback">
                        Silahkan Masukan Deskripsi Pasar
                    </div>
                    @endif
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control {{$errors->has('alamat')? 'is-invalid':''}}"
                        id="exampleFormControlTextarea1" rows="3" name="alamat"
                        placeholder="Masukan Alamat Pasar"></textarea>
                    @if ($errors->has('alamat'))
                    <div class="invalid-feedback">
                        Silahkan Masukan Alamat Pasar
                    </div>
                    @endif
                    <label for="exampleInput">Latitude</label>
                    <input type="text" class="form-control {{$errors->has('latitude')? 'is-invalid':''}}"
                        id="exampleInput" name="latitude" placeholder="Masukan Latitude Pasar">
                    @if ($errors->has('latitude'))
                    <div class="invalid-feedback">
                        Silahkan Masukan Latitude Pasar
                    </div>
                    @endif
                    <label for="exampleInput {{$errors->has('nama')? 'is-invalid':''}}">Longitude</label>
                    <input type="text" class="form-control {{$errors->has('longitude')? 'is-invalid':''}}"
                        id="exampleInput" name="longitude" placeholder="Masukan Longitude Pasar">
                    @if ($errors->has('longitude'))
                    <div class="invalid-feedback">
                        Silahkan Masukan Longitude Pasar
                    </div>
                    @endif
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