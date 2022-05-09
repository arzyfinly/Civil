    <script>
        function Acc(e)
        {
            let id = e.getAttribute('data-id');

            Swal.fire({
                icon: 'warning',
                title: 'Acc Data!',
                text: "Apakah anda yakin ingin Acc Pendaftaran ini ??",
                showConfirmButton: true,
                showCancelButton: true
            }).then((result) => {
                if(result.isConfirmed){
                    $.ajax({
                        type: "POST",
                        url: "praktikum/"+id,
                        data: {"_token": '{{csrf_token()}}',
                               "_method": "PATCH"},
                    }).then((result) => {
                        location.reload();
                        Swal.fire({
                            icon: 'success',
                            title: "Ter Acc!",
                            text: "Pendaftar berhasil di Acc",
                            showConfirmButton: true,
                        });
                    });
                }else if(result.isDenied){
                    Swal.fire({
                        icon: 'error',
                        title: "Cancelled",
                        text: "Pendaftaran Acc dibatalkan :)",
                    });
                }
            });
        }
    </script>

