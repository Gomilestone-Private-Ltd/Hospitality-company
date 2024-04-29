<div class="get-in-touch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12 p-0 get-in-touch-left">
                    <div class="get-in-touch-box">
                        <div>
                            <h2 class="touch-heading">Get In Touch</h2>
                        </div>
                        <div class="call-main-box">
                            <div class="call-box">
                                <img src="{{asset('assets/web/image/call-icon.png')}}" alt="">
                                <div class="call-nu-box">
                                    <a href="tel:+91 124 4222424">+91 124 4222424 (INDIA)</a>
                                    <a href="tel:+971 55 1532259">+971 55 1532259 (UAE)</a>
                                </div>
                            </div>
                            <div class="call-box">
                                <img src="{{asset('assets/web/image/message-icon.png')}}" alt="">
                                <div>
                                    <a href="mailto:opinelifestyles.india@gmail.com">Opinelifestyles.India@Gmail.Com</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12 p-0">
                    <div class="get-in-touch-right">
                        <p class="text-success successMessage" style="text-align:center;"></p>
                        <p class="text-danger errorMessage" style="text-align:center;"></p>
                        <form id="GetIntouchForm" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="name" name="name" id="name" placeholder="Name" >
                                        <p class="text-danger name"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="email" name="email" id="email" placeholder="Email Address" >
                                        <p class="text-danger email"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-box">
                                        <textarea name="message" id="message" rows="3" placeholder="Message"></textarea>
                                        <p class="text-danger message"></p>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="button" class="submit-btn GetIntouch">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
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
                            
                           $('.successMessage').html(response.success);
                        },
                        error:function(xhr, textStatus, errorThrown){
                            console.log(xhr);
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
    </script>