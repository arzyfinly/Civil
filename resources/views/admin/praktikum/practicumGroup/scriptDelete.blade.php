    <script>
        function deleteData(e)
        {
            let id = e.getAttribute('data-id');

<<<<<<< HEAD
            Swal.fire({
                icon: 'error',
                title: 'Keluarkan Anggota!',
                text: "Apakah anda yakin ingin mengeluarkan anggota ini dari kelompok??",
=======
            console.log(id);

            Swal.fire({
                icon: 'error',
                title: 'Hapus Data!',
                text: "Apakah anda yakin ingin menghapus data ini??",
>>>>>>> d6032ddaba12a451b9f27fa1835bb91421e8b36b
                showConfirmButton: true,
                showCancelButton: true
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        type: "POST",
                        url: "kelompok/"+id,
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
<<<<<<< HEAD
    </script>

=======
    </script>
>>>>>>> d6032ddaba12a451b9f27fa1835bb91421e8b36b
