<script src="{{ asset('style/student/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(document).on('change', '.practicum', function(){
            var id    = $(this).val();
            if(id){
                $.ajax({
                    type:'GET',
                    url:'/kelompok/get/praktikum/' + id,
                    dataType: "json",
                    success:function(data){
                        $("#nama").empty();
                        $("#nama").append('<option value="0" disabled="true" selected="true">Select College</option>');
                        $.each(data,function(key, value){
                            console.log(value);
                            $("#nama").append('<option value="'+value.id+'">'+value.college_student.first_name+' '+value.college_student.last_name+'</option>');
                        });
                    }
                });
            }
        });
    });
</script>
