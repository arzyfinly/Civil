@include('sweetalert::alert')
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
                        url: "hargaPraktikum/"+id,
                        data: {"_token": '{{csrf_token()}}',
                               "_method": "DELETE"},
                    }).then((result) => {
                                    // Reload the Page
                        location.reload();
                       });
                }else if(result.isDenied){

                }
            });
        }
    </script>