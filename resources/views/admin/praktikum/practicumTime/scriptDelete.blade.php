    <script>
        function deleteData(e)
        {
            let id = e.getAttribute('data-id');

            Swal.fire({
                icon: 'error',
                title: 'Hapus Data!',
                text: "Apakah anda yakin ingin menghapus data ini??",
                showConfirmButton: true,
                showCancelButton: true
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        type: "POST",
                        url: "practicumTime/"+id,
                        data: {"_token": '{{csrf_token()}}',
                               "_method": "DELETE"},
                    }).then((result) => {
                        location.reload();
                        Swal.fire({
                            icon: 'success',
                            title: "Deleted!",
                            text: "Data berhasil di hapus",
                            showConfirmButton: true,
                        });
                    });
                }else if(result.isDenied){
                    Swal.fire({
                        icon: 'error',
                        title: "Cancelled",
                        text: "Menhapus data dibatalkan :)",
                    });
                }
            });
        }
    </script>
