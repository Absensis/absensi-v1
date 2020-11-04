let $ = jQuery;

jQuery(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // ini adalah fungsi untuk memunculkan data di datatable
    var dataabsen = $('#dataSchedule').DataTable({
        "processing": true,
        "ajax": "/getabsen",
        "order": [],
    });

    // show modal add
    jQuery('.addbtn').on('click', function () {

        $('#addModal').modal('show');

    });

    // function add
    $(document).on('submit', '#formtambah', function (event) {
        event.preventDefault();
        var tanggalpelajaran = $('#tglpelajaran').val();
        var jampelajaran = $('#jmpelajaran').val();
        var kelas = $('#kls').val();
        var gurupengajar = $('#grpengajar').val();
        var matapelajaran = $('#mtapengajar').val();
        var materipelajaran = $('#mtripelajaran').val();
        var linkpembelajaran = $('#lipembelajaran').val();
        var extension = $('#dkmnts').val().split('.').pop().toLowerCase();
        var keterangan = $('#ket').val();
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image");
            $('#user_image').val('');
            return false;
        }

        if (tanggalpelajaran != '' && jampelajaran != '' && kelas != '' && gurupengajar != '' && matapelajaran != '' && materipelajaran != '' && linkpembelajaran != '' && keterangan != '') {
            $.ajax({
                type: "post",
                url: "/addabsen",
                beforeSend: function () {
                    swal({
                        title: 'Menunggu',
                        html: 'Memproses data',
                        onOpen: () => {
                            swal.showLoading();
                        }
                    });
                },
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function () {
                    swal({
                        type: 'success',
                        title: 'Tambah Barang',
                        text: 'Anda Berhasil Menambah Barang'
                    });
                    $('#formtambah')[0].reset();
                    $('#addModal').modal('hide');
                    dataabsen.ajax.reload(null, false);
                },
            });
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Bother fields are required!',
            });
        }
    });

    // function delete
    $(document).on('click', '.deletebtn', function () {
        var id = $(this).attr("id");
        swal({
            title: 'Konfirmasi',
            text: "Apakah anda yakin ingin menghapus ",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: 'Tidak',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "/deleteabsen",
                    type: "post",
                    beforeSend: function () {
                        swal({
                            title: 'Menunggu',
                            html: 'Memproses data',
                            onOpen: () => {
                                swal.showLoading();
                            }
                        });
                    },
                    data: {
                        id: id
                    },
                    success: function (data) {
                        swal(
                            'Hapus',
                            'Berhasil Terhapus',
                            'success'
                        );
                        dataabsen.ajax.reload(null, false);
                    }
                });
            } else if (result.dismiss === swal.DismissReason.cancel) {
                swal(
                    'Batal',
                    'Anda membatalkan penghapusan',
                    'error'
                );
            }
        });
    });
});
