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
                    <input type="text" class="form-control" id="exampleInput" name="nama"
                        placeholder="Masukan Nama Pasar">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"
                        placeholder="Masukan Deskripsi Pasar"></textarea>
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"
                        placeholder="Masukan Alamat Pasar"></textarea>
                    <label for="exampleInput">Latitude</label>
                    <input type="text" class="form-control" id="exampleInput" name="latitude"
                        placeholder="Masukan Latitude Pasar">
                    <label for="exampleInput">Longitude</label>
                    <input type="text" class="form-control" id="exampleInput" name="logitude"
                        placeholder="Masukan Longitude Pasar">
                    <label for="exampleInput">Gambar</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04" name="gambar">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                    </div>
                    <label for="exampleInput">Status Pasar</label>
                    <input type="text" class="form-control" id="exampleInput" name="status"
                        placeholder="Masukan Status Pasar">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>

            </form>
        </div>
    </div>
</div>