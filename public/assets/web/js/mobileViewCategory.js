function getSubCategoryMenu(categoryId){
    if(categoryId){
      $.ajax({
                url: base_url+'/get-subcategory-list',
                method:"post",
                dataType:"json",
                data:{
                    '_token' : csrf_token,
                    'categoryId' : categoryId,
                },
                success:function(response){
                    
                    if(response.status == 200){
                      $('#productByMaterial_menu').html(response.data);
                    }else{
                        toastr.error(response.error);
                    }
                },
                error:function(xhr, textStatus, errorThrown){
                    toastr.error(xhr.responseText);
                    //toastr.error(xhr.responseText);
                }
      });
    }
}