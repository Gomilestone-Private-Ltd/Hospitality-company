 $(document).ready(function(){
            $('.workWithUs').on('click',function(e){
                e.preventDefault();
                $('.text-danger').html('');
                $('.successMessage').html('');
                $('.errorMessage').html('');
                var formData = new FormData($('#workWithUs')[0]);
                $.ajax({
                        url: base_url+"/work-with-us",
                        method:"post",
                        contentType: false,
                        processData: false,
                        data:formData,
                        success:function(response){
                            $('.successMessage').html(response.success);
                        },
                        error:function(xhr, textStatus, errorThrown){
                            if(xhr.responseJSON.exception == "ParseError"){
                                $('.errorMessage').html("Sorry, We Have Some Technical issue !!");
                            }else{
                                $.each(xhr.responseJSON.errors,function(key,val){
                                   $('.'+key).html(val);
                                });
                            }
                            
                                
                            
                            
                        },
                });

            });
        });