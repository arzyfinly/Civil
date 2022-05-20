<script src="{{ asset('style/student/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(document).on('change', '.kelas', function(){
            var id    = $(this).val();
            console.log(id);
            if(id){
                $.ajax({
                    type:'GET',
                    url:'/kelompok/get/kelas/' + id,
                    dataType: "json",
                    success:function(data){
                        $("#class").empty();
                        $.each(data,function(key, value){
                            $("#class").append(
                                '<tr><td>'+value.college_student.user.nim+'</td><td>'+value.college_student.first_name+' '+value.college_student.last_name+'</td><td>'+value.practicum.name+'</td><td>'+value.group+'</td><td>'+value.college_student.kelas+'</td><td style="vertical-align: middle;"><a href=""class="btn btn-sm btn-icon btn-default btn-icon-only rounded-circle"><span class="btn-inner--icon"><i class="fas fa-eye"></i></span></a><a href="" class="btn btn-sm btn-icon btn-primary btn-icon-only rounded-circle"data-toggle="tooltip" data-placement="top" title="Edit"><span class="btn-inner--icon"><i class="fas fa-pen-square"></i></span></a><button onclick="deleteData(this)" data-id="{{ $prac->id }}" class="btn btn-sm btn-icon btn-youtube btn-icon-only rounded-circle"data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-trash"></i></button></td></tr>'
                            );
                        });
                    }
                });
            }
        });
    })
</script>
