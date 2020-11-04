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
});
