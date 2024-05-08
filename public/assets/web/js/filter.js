
    var color = [];
        var size  = [];
        var ideal = [];
        var area  = [];
        var material = [];
        var sort;
    //$(document).ready(function(){
        
        // $(".color").change(function() {
        //     if($(this).is(':checked')){
        //         color.push($(this).val());
        //         getProduct();
        //     }else{
        //         const index = color.indexOf($(this).val());
        //         if (index > -1) {
        //             color.splice(index, 1);
        //             getProduct();
        //         }
        //     }
            
        // });

        // $(".size").change(function() {
        //     if($(this).is(':checked')){
        //         size.push($(this).val());
        //         getProduct();
        //     }else{
        //         const index = size.indexOf($(this).val());
        //         if (index > -1) {
        //             size.splice(index, 1);
        //             getProduct();
        //         }
        //     }
        // });
        
        // $(".material").change(function() {
        //     if($(this).is(':checked')){
        //         material.push($(this).val());
        //         getProduct();
        //     }else{
        //         const index = material.indexOf($(this).val());
        //         if (index > -1) {
        //             material.splice(index, 1);
        //             getProduct();
        //         }
        //     }
        // });

        // $(".area").change(function() {
        //     if($(this).is(':checked')){
        //         area.push($(this).val());
        //         getProduct();
        //     }else{
        //         const index = area.indexOf($(this).val());
        //         if (index > -1) {
        //             area.splice(index, 1);
        //             getProduct();
        //         }
        //     }
        // });

      //});
      
    function filterData(className, data) {
        if($(data).is(':checked')){
            eval(className).push(data.value);
            getProduct();
        }else{
            const index = eval(className).indexOf(data.value);
            if (index > -1) {
                eval(className).splice(index, 1);
                getProduct();
            }
        }
    }
    
   
    function getProduct(){
        console.log(subcategoryId);
            $.ajax({
                url: base_url+'/filter-product',
                method:'Post',
                dataType:'json',
                data:{
                      '_token'     :csrf_token,
                      'color'      :color,
                      'size'       :size,
                      'area'       :area,
                      'ideal'      :ideal,
                      'material'   :material,
                      'sort'       :sort,
                      'subcategoryId' :subcategoryId
                },
                success:function(response){
                    if(response.status == 200){
                        if(response.productCount){
                            $('.productList').html('');
                            $('.productList').html(response.data);
                        }else{
                            $('.productList').html('');
                            var notFound = `<div class="no-data-found-box"><img src="`+base_url+`/assets/web/image/found.png" alt="image"><h3>No Data Available</h3><p>There is no data to show you right now.</p><a href="/">Back To Home</a></div>`;
                            $('.productList').html(notFound);
                        } 
                       
                    }else{
                        var notFound = `<div class="no-data-found-box"><img src="`+base_url+`/assets/web/image/found.png" alt="image"><h3>No Data Available</h3><p>There is no data to show you right now.</p><a href="/">Back To Home</a></div>`;
                        $('.productList').html('');
                        $('.productList').html(notFound);
                    }
                    
                },
                error:function(xhr){
                    //$('.productList').html(xhr.responseText);
                    var notFound = `<div class="no-data-found-box"><img src="`+base_url+`/assets/web/image/found.png" alt="image"><h3>No Data Available</h3><p>There is no data to show you right now.</p><a href="/">Back To Home</a></div>`;
                    $('.productList').html('');
                    $('.productList').html(notFound);
                }
            });
        }
