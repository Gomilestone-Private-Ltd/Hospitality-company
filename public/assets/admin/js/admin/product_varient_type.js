//Show Varient Type Modal
$(document).ready(function(){
    $('.addVarientType').on('click',function(){
        $('#addVarientType').modal('show');
    });
});



//Add Varient Type
$(document).ready(function(){
    $('.create_varient_type').on('click',function(e){
        e.preventDefault();
        var formData = new FormData($('#add_varient_type')[0]);
        toastr.options = {
                            "closeButton": true,
                            "progressBar": true,
                            "extendedTimeOut": 800
                         };
        $.ajax({
                url:base_url+'admin/add-varient-type',
                method:'post',
                contentType: false,
                processData: false,
                data:formData,
                success:function(response){
                    
                    if(response.status == 200){
                        $('#addVarientType').modal('hide');
                        toastr.success(response.success);
                        $('.varientType').empty();
                        $.each(response.getVarientType,function(key,value){
                            $('.varientType').append('<option value="'+value.id+'" getVarientType="'+value.varient_type+'">'+value.varient_type_name+'</option>');
                        });
                    }else{
                        toastr.error(response);
                    }
                },
                error:function(xhr, textStatus, errorThrown){
                    $.each(xhr.responseJSON.errors,function(key,val){
                       $('.'+key).html(val);
                    });
                },
        });

    });
});