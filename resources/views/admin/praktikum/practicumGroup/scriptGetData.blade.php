<script src="{{ asset('style/student/plugins/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(document).on('change', '.practicum', function(){
            var id    = $('.practicum').val();

            var opt = $('.nama');
            console.log(opt);
        });
    });
</script>