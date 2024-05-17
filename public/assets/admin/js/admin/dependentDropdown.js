$(document).ready(function(){
    $('.category').on('change',function(e){
       e.preventDefault();
       var getCategoryId = $(this).val();
       $.ajax({
                url: base_url+"/admin/get-subcategory",
                method:'post',
                dataType:'json',
                data:{
                     '_token' : csrf_token,
                     'getCategoryId' : getCategoryId,
                },
                success:function(response){
                    if(response.status == 200){
                        $('.subcategory').empty();
                        $('.subcategory').append('<option value="">Select SubCategory</option>');
                        $.each(response.data,function(key,val){
                            $('.subcategory').append('<option value="'+val.id+'" if(old("category") == "'+val.id+'"){ Selected}>'+val.name+'</option>');
                        });
                    }else{
                        toastr.error(response.error);
                    }
                },
                error:function(request, status, errorsponse){
                    toastr.error(request.responseText);
                }
       });
    });

    $('.subcategory').on('change',function(e){
        e.preventDefault();
        var getSubCategoryId = $(this).val();
        $.ajax({
                 url: base_url+"/admin/get-supersubcategory",
                 method:'post',
                 dataType:'json',
                 data:{
                      '_token' : csrf_token,
                      'getSubCategoryId' : getSubCategoryId,
                 },
                 success:function(response){
                    if(response.status == 200){
                        $('.supersubcategory').empty();
                        $('.supersubcategory').append('<option value="">Select Super SubCategory</option>');
                        $.each(response.data,function(key,val){
                            $('.supersubcategory').append('<option value="'+val.id+'" >'+val.name+'</option>');
                        });
                    }else{
                        toastr.error(response.error);
                    }
                 },
                 error:function(request, status, errorsponse){
                     toastr.error(request.responseText);
                 }
        });
    });

});