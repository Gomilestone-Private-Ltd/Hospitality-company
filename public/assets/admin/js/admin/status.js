function changeStatus(slug,url){
    $.ajax({
            url: base_url+'/'+url,
            method:"post",
            dataType:"json",
            data:{
                '_token' : csrf_token,
                'slug' : slug,
            },
            success:function(response){
                if(response.status == 200){
                    if(response.statusName == "Enable"){
                        $('.changeStatus'+slug).html('<span class="badge badge-success">Enable</span>');
                    }else{
                        $('.changeStatus'+slug).html('<span class="badge badge-danger">Disable</span>');
                    }
                    toastr.success(response.success);
                }else{
                    toastr.error(response.error);
                }
            },
            error:function(request, status, errorsponse){
                toastr.error(request.responseText);
            }
    });
   
}