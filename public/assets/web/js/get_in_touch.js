$(document).ready(function(){
    $('.GetIntouch').on('click',function(e){
        e.preventDefault();
        $('.text-danger').html('');
        $('.successMessage').html('');
        $('.errorMessage').html('');
        var formData = new FormData($('#GetIntouchForm')[0]);
        $.ajax({
                url: base_url+"/get-in-touch",
                method:"post",
                contentType: false,
                processData: false,
                data:formData,
                success:function(response){
                    if(response.status == 200){
                        $("#GetIntouchForm")[0].reset(); 
                        $('.successMessage').html(response.success);
                    }else{
                        $('.errorMessage').html(response.errors);
                    }
                    
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