$(document).ready(function() {

    $('select[name="grade_id"]').on('change', function(){
        var gradeId = $(this).val();
        if(gradeId) {
            $.ajax({
                url: '/admin/section/get/'+gradeId,
                type:"GET",
                dataType:"json",

                success:function(data) {

                    $('select[name="section_id"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="section_id"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                }
            });
        } else {
            $('select[name="section_id"]').empty();
        }

    });

});