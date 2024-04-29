
(function() {
    document.getElementById("hideOption").text = "";
    document.getElementById("hideOption1").text = "";
    document.getElementById("hideOption2").text = "";
    document.getElementById("hideOption3").text = "";
})();

//Conatct form query
$(document).ready(function(){
    $('.queryForm').on('click',function(e){
        e.preventDefault();
        $('.text-danger').html('');
        $('.contactSuccessMessage').html('');
        $('.contactErrorMessage').html('');
        var formData = new FormData($('#queryForm')[0]);
        $.ajax({
                url: base_url+"/contact-us",
                method:"post",
                contentType: false,
                processData: false,
                data:formData,
                success:function(response){
                    console.log(response);
                    if(response.status == 200){
                        $('.contactSuccessMessage').html(response.success);
                        $("#queryForm")[0].reset(); 
                    }else{
                        $('.contactErrorMessage').html("Sorry, We Have Some Technical issue !!");
                    }
                    
                },
                error:function(xhr, textStatus, errorThrown){
                    if(xhr.responseJSON.exception == "ParseError"){
                        $('.contactErrorMessage').html("Sorry, We Have Some Technical issue !!");
                    }else{
                        $.each(xhr.responseJSON.errors,function(key,val){
                           $('.'+key).html(val);
                        });
                    }
                    
                        
                    
                    
                },
        });

    });
});