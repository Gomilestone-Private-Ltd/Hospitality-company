
//Show Varient Value Modal  && Append input box according to varient type 1 for text and 0 for color
$(document).ready(function(){
    $('.addVarientValue').on('click',function(){
        var varientType = $('#varientType').find('option:selected').attr('getVarientType');
        $('.varientValueClass').html('');
        if(varientType == 1){
            var getInputBox = '<div class="form-group"><label class="form-label-box">Label Value</label><input type="text" placeholder="Label Value" class="form-control form-control-user" name="label_value"><p class="text-danger label_value"></p></div>';
        }else{
            var getInputBox = '<div class="form-group"><label class="form-label-box">Label Value</label><input type="color" placeholder="Label Value" class="form-control form-control-user" name="label_value"><p class="text-danger label_value"></p></div>';
        }
        $('.varientValueClass').html(getInputBox);
        $('#addVarientValue').modal('show');
    });
});


//Add Varient Value
$(document).ready(function(){
    $('.addVarientValueFormSubmit').on('click',function(e){
     e.preventDefault();
     var getVarientTypeId = $('#varientType').val();
     if(getVarientTypeId){
         var formData = new FormData($('#addVarientValueForm')[0]);
         formData.append('getVarientTypeId',getVarientTypeId);
         $.ajax({
                url: base_url+"/add-varient-value",
                method:"post",
                dataType:"json",
                data:formData,      
                contentType: false,
                processData: false,
                success:function(response){
                     if(response.status == 200){
                        //Hide Varient Value Modal
                        $('#addVarientValue').modal('hide');
                        //Show msg
                        toastr.success(response.success);

                        //Empty the table list on Change varient TYPE
                        $('.tableBody').html('');

                        //Append Varient Value in select box
                        $('.varientValueList').empty();
                        $.each(response.getVarientValues,function(key,val){
                            $('.varientValueList').append('<option value="'+val.id+'" varientValueName="'+val.varient_label_name+'">'+val.varient_label_name+'</option>');
                        });
                     }else{
                         $('#addVarientValue').modal('show');
                         toastr.error(response);
                     }
                },
                 error:function(xhr, textStatus, errorThrown){
                     $('#addVarientValue').modal('show');
                     //toastr.error(xhr.responseText);
                     $.each(xhr.responseJSON.errors,function(key,val){
                         $('.'+key).html(val);
                     });
                 }
        });
     }else{
         toastr.error("Please select varient type");
         $('#addVarientValue').modal('show');
     }

    });
 });

//Get Varient value on behalf of varient type
$(document).ready(function(){
    $('.varientType').on('change',function(e){
       e.preventDefault();
        var varientTypeId = $(this).val();

        //Empty the table list on Change varient TYPE
        $('.tableBody').html('');

        if(varientTypeId){
            $.ajax({
                    url: base_url+"/get-varient-value",
                    method:"post",
                    dataType:"json",
                    data:{
                         '_token':csrf_token,
                         'varientTypeId': varientTypeId,
                    },      
                    success:function(response){
                        if(response.status == 200){
                            //Append Varient Value in select box
                            $('.varientValueList').empty();
                            $.each(response.getVarientValues,function(key,val){
                                $('.varientValueList').append('<option value="'+val.id+'" varientValueName="'+val.varient_label_name+'">'+val.varient_label_name+'</option>');
                            });
                        }else{
                            toastr.error(response);
                        }
                    },
                    error:function(xhr, textStatus, errorThrown){
                        toastr.error(xhr.responseText);
                    }
                });
        }else{
            toastr.error("Please Select Varient Type");
        }
        
    });
});

//Get Default Varient value on behalf of varient type
$(document).ready(function(){
    var varientTypeId = $('#varientType').find('option:selected').val();
        if(varientTypeId){
            $.ajax({
                    url: base_url+"/get-varient-value",
                    method:"post",
                    dataType:"json",
                    data:{
                         '_token':csrf_token,
                         'varientTypeId': varientTypeId,
                    },      
                    success:function(response){
                        if(response.status == 200){
                            //Append Varient Value in select box
                            $('.varientValueList').empty();
                            $.each(response.getVarientValues,function(key,val){
                                $('.varientValueList').append('<option value="'+val.id+'" varientValueName="'+val.varient_label_name+'">'+val.varient_label_name+'</option>');
                            });
                        }else{
                            toastr.error(response);
                        }
                    },
                    error:function(xhr, textStatus, errorThrown){
                        toastr.error(xhr.responseText);
                    }
                });
        }else{
            toastr.error("Please Select Varient Type");
        }
        
});


//Append input box according to varient Value in table
$(document).ready(function(){

    $('.varientValueList').on('select2:select',function(){
        //Get Selected options
        var selectedOptions = $(this).find('option:selected');
        //Empty the table
        $('.tableBody').empty('');
        //selected avarient array loop
        selectedOptions.each(function(){
            //Get the selected options
            var getType = $(this).text();
            //Get  the selected option id
            var getTypeId = $(this).val();
            var html = '<tr class="'+getType+''+getTypeId+'"><td><input type="text" value="'+getType+'" placeholder="Product Name" class="form-control form-control-user" name="varient_name[]" readonly></td><td><input type="text"  placeholder="Price" class="form-control form-control-user" name="varient_price[]"></td></tr>';
            $('.tableBody').append(html); 
        });
    });
    
    //Remove the varient from the table list
    $('.varientValueList').on('select2:unselect',function(){
        //get the unselected varienr value list
        var notSelected = $(".varientValueList").find('option').not(':selected');
        //array loop
        notSelected.each(function(){
            //get varient value
            var removeVarientVal = $(this).text();
            var getTypeId = $(this).val();
            //remove varient
            $('.'+removeVarientVal+getTypeId).remove();
        });
    });

});