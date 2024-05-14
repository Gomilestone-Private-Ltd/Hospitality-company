function DeleteProductVarientImage(){
    swal({
            title: 'Are you sure want to Delete ?',
            text: '',
            type: 'question',
            width: 330,
            showCancelButton: true,
            confirmButtonColor: '#E9300B',
            confirmButtonText: 'Yes!',
            cancelButtonText: 'No.',
            cancelButtonColor: '#6e7881',
            closeOnCancel: false,

            }).then((e) => {
                if (e.value === true) {
                    // $.ajax({
                    //         url      : base_url+'/'+url,
                    //         method   :'post',
                    //         dataType :'json',
                    //         data:{
                    //                 '_token':csrf_token,
                    //                 'slug'  :productSlug,
                    //                 'key'   :key,
                    //                 'path'  :path
                    //         },
                    //         success:function(response){
                    //             toastr.options = {
                    //                                "closeButton": true,
                    //                                "progressBar": true,
                    //                                "extendedTimeOut": 800
                    //                              }
                    //             if(response.status == 200){
                    //                 toastr.success(response.success);
                    //                 setTimeout(function(){
                    //                     location.reload()
                    //                 }, 100);
                    //             }else{
                    //                 toastr.error(response.error);
                    //                 //swal("Error!",response.error, "error"); 
                    //             }
                    //         },
                    //         error:function(request, status, errorsponse){
                    //             toastr.error(request.responseText);
                    //             //swal("Error!",request.responseText, "error"); 
                    //         }
                    // });
                   
                }else{
                    //swal("Error!", "sadfsd", "error"); 
                    //toastr.error("Something Went Wrong !!");
                }
        });
    
    }