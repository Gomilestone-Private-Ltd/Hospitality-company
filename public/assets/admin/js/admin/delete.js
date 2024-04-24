function deleteCategory(slug,path){
    swal({
            title: 'Are you sure want to Delete ?',
            text: '',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes!',
            cancelButtonText: 'No.',
            closeOnCancel: false
            }).then((e) => {
                if (e.value === true) {
                    $.ajax({
                            url: base_url+'/'+path,
                            method:'post',
                            dataType:'json',
                            data:{
                                    '_token':csrf_token,
                                    'slug':slug
                            },
                            success:function(response){
                                toastr.options = {
                                    "closeButton": true,
                                    "progressBar": true,
                                    "extendedTimeOut": 800
                                }
                                if(response.status == 200){
                                    toastr.success(response.success);
                                    //swal("Done!",response.success, "success");
                                    setTimeout(function(){
                                        location.reload()
                                    }, 100);
                                }else{
                                    toastr.error(response.error);
                                    //swal("Error!",response.error, "error"); 
                                }
                            },
                            error:function(request, status, errorsponse){
                                toastr.error(request.responseText);
                                //swal("Error!",request.responseText, "error"); 
                            }
                    });
                   
                }else{
                    //swal("Error!", "sadfsd", "error"); 
                }
        });
    }