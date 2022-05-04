<script src="{{ asset('style/student/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(document).on('change', '.practicum', function(){
            var id    = $(this).val();
            if(id){
                $.ajax({
                    type:'GET',
                    url:'{{ route("practicum-group-get-by-id") }}',
                    data:{"praktikum_id" : id },
                    success:function(res){
                        $("#nama").empty();
                        $("#nama").append('<option value="0" disabled="true" selected="true">Select College</option>');
                        $.each(res,function(key,value){
                            $("#nama").append('<option value="'+value.id+'">'+value.first_name+' '+value.last_name+'</option>');
                        });
                    }
                });
            }
        });
    });
</script>

