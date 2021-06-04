
$('.delete').click(function () {
    var id = $(this).attr('id');
    swal({
            title: "Yakin",
            text: "Yakin Ingin Menghapus Data ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                if ($(this).hasClass('pasar')) {
                    console.log(id);
                    window.location = "pasar/hapus/" + id + "";
                }else if ($(this).hasClass('user')) {
                    window.location = "user/hapus/" + id + "";
                }
            } else {
                swal("Data batal dihapus!");
            }
        });
});
