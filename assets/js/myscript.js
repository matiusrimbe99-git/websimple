const flashData = $('.flash-data').data('flashdata')
if (flashData) {
    swal({
        title: 'Berhasil',
        text: 'Data Mahasiswa telah ' + flashData,
        icon: 'success'
    })
}

$('.swal-delete').on('click', function (e) {
    e.preventDefault()
    const href = $(this).attr('href')
    swal({
        title: 'Apakah Anda yakin?',
        text: 'Data mahasiswa akan dihapus!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                document.location.href = href
            }
        })
})