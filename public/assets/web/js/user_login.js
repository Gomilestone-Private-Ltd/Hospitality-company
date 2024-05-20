$(document).ready(function(){
    //Get Otp after form submit
    $('.submitloginForm').on('click',function(e){
        e.preventDefault();
        $('.loginformMessage').html('');
        var formDetail = new FormData();
        var fullname = $('.fullname').val();
        var mobile = $('.mobile').val();

        if(fullname === ''){
            $('.fullname').html('Full name is required !!');
           return;
        }else{
            if(fullname.length > 30){
                $('.fullname').html('Full name cant be greater then 30 char !!');
                return;
            }
            $('.fullname').html('');
        }

        if(mobile === ''){
            $('.mobile').html('Mobile number is required !!');
            return;
        }else{
            let contactNumberPattern = /^[0-9]{10}$/;
            if (!contactNumberPattern.test(mobile)) {
                $('.mobile').html('Enter valid contact number.');
                return;
            }
            $('.mobile').html('');
        }    
        
        formDetail.append('fullname',fullname);
        formDetail.append('mobile',mobile);
        formDetail.append('_token',csrf_token);
        $.ajax({
               url:base_url+'/authenticate-customer',
               method:'post',
               contentType: false,
               processData: false,
               data:formDetail,
               success:function(response){
                    if(response.status == 200){
                        $('.loginformMessage').removeClass('text-danger')
                        $('.loginformMessage').addClass('text-success');
                        $('.loginformMessage').html(response.success);
                        $('#before').hide();
                        $('#after').show();
                        $('#otp-text').addClass('get_otp');
                    }else{
                        $('.loginformMessage').removeClass('text-success');
                        $('.loginformMessage').addClass('text-danger');
                        $('.loginformMessage').html(response.error);
                    }
               },
               error:function(xhr, textStatus, errorThrown){
                    $('.loginformMessage').removeClass('text-danger')
                    if(xhr.responseJSON.exception == "ParseError"){
                        $('.loginformMessage').addClass('text-danger');
                        $('.loginformMessage').html("Sorry, We Have Some Technical issue !!");
                    }else{
                        $.each(xhr.responseJSON.errors,function(key,val){
                            $('.'+key).html(val);
                        });
                    }
               },
        });
    });
    
    //Verify otp
    $('.submitloginOtpForm').on('click',function(e){
        e.preventDefault();
        $('.loginformMessage').html('');
        var otpFormDetail = new FormData();
        var getOtp = $('.get_otp').val();
        if(getOtp === ''){
            $('.otp').html('Enter valid OTP');
            return;
        }else{
            if(getOtp.length !== 6){
                $('.otp').html('Otp must be 6 digit');
                return;
            }else{
                let otpNumberPattern = /^[0-9]{6}$/;
                if (!otpNumberPattern.test(getOtp)) {
                    $('.otp').html('Otp must be 6 digit');
                    return;
                }
            }
            $('.otp').html('');
        }

        otpFormDetail.append('otp',getOtp);
        otpFormDetail.append('_token',csrf_token);

        $.ajax({
                url:base_url+'/verify-otp',
                method:'post',
                contentType: false,
                processData: false,
                data:otpFormDetail,
                success:function(response){
                    if(response.status == 200){
                        $('.loginformMessage').removeClass('text-danger');
                        $('.loginformMessage').addClass('text-success');
                        $('.loginformMessage').html(response.success);
                        $('.submitloginOtpForm');
                        window.location.href ='{{ route('/')}}';
                    }else{
                        $('.loginformMessage').removeClass('text-success');
                        $('.loginformMessage').addClass('text-danger');
                        $('.loginformMessage').html(response.error);
                    }
                },
                error:function(xhr, textStatus, errorThrown){
                    $('.loginformMessage').removeClass('text-success');
                    if(xhr.responseJSON.exception == "ParseError"){
                        $('.loginformMessage').addClass('text-danger');
                        $('.loginformMessage').html("Sorry, We Have Some Technical issue !!");
                    }else{
                        
                        $.each(xhr.responseJSON.errors,function(key,val){
                            $('.'+key).html(val);
                        });
                    }
                }
        });

    });
});

