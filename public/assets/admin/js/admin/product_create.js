$(document).ready(function(){
    $('.addVarientType').on('click',function(){
        $('#addVarientType').modal('show');
    });
});

$(document).ready(function(){
    $('.addVarientValue').on('click',function(){
        var varientType = $('#varientType').find('option:selected').attr('getVarientType');
        $('.varientValueClass').html('');
        if(varientType == 1){
            var getInputBox = '<div class="form-group"><label class="form-label-box">Value</label><input type="text" placeholder="label_value" class="form-control form-control-user" name="label_value"><p class="text-danger varient_type_name"></p></div>';
        }else{
            var getInputBox = '<div class="form-group"><label class="form-label-box">Choose Color</label><input type="color" id="favcolor" value="#ff0000" placeholder="label_value" class="form-control form-control-user" name="label_value"><p class="text-danger varient_type_name"></p></div>';
        }
        $('.varientValueClass').html(getInputBox);
        $('#addVarientValue').modal('show');
    });
});

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
                url:base_url+'/add-varient-type',
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