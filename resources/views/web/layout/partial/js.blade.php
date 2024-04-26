<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('header').addClass("Headerscroll");
        } else {
            $('header').removeClass("Headerscroll");
        }
    });

<<<<<<< HEAD
    $(document).ready(function () {
        $("#hide").hover(function () {
            $(".ProductsBy").hide();
        });
        $("#show").hover(function () {
            $(".ProductsBy").show();
        });
    });
    $(document).ready(function () {
        $("#hoverProduct").hover(function () {
=======
    $(document).ready(function() {
        $("#hide").hover(function() {
            $(".ProductsBy").hide();
        });
        $("#show").hover(function() {
            $(".ProductsBy").show();
        });
    });
    $(document).ready(function() {
        $("#hoverProduct").hover(function() {
>>>>>>> 7d4bb382c43e0ea440d5b2d5b7aff8d271b34036
            $(".ProductsBy").show();
        });
    });


<<<<<<< HEAD
    $(document).ready(function () {
        $("#PRODUCTS").click(function () {
            $(".productHide").hide();
        });
        $("#PRODUCTS").click(function () {
            $(".productMenu").show();
        });
    });


    $(document).ready(function () {
        $(".productMaterail").click(function () {
            
            $(".productMenu").hide();
        });
        $(".productMaterail").click(function () {
            $(".productByMaterial_menu").show();
        });
    });
    
    $(document).ready(function () {
        $("#backProduct").click(function () {
            $(".productMenu").hide();
        });
        $("#backProduct").click(function () {
            $(".productHide").show();
        });
    });


    //Hide subcategory list and show category list
    function hideShowProductCategoryList(){
        $(".backProductByMaterial").click(function () {
            //do Blank the div
            $('#productByMaterial_menu').html('');
            $("#productByMaterial_menu").hide();
        });
        
        $(".backProductByMaterial").click(function () {
            $("#productMenu").show();
        });
    };


    // $(document).ready(function () {
    //     $("#productCollection").click(function () {
    //         $(".productMenu").hide();
    //     });
    //     $("#productCollection").click(function () {
    //         $(".productByCollection_menu").show();
    //     });
    // });
    // $(document).ready(function () {
    //     $("#backProductByCollection").click(function () {
    //         $(".productByCollection_menu").hide();
    //     });
    //     $("#backProductByCollection").click(function () {
    //         $(".productMenu").show();
    //     });
    // });

    $(document).ready(function () {
        $(".slider").slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
=======
    $(document).ready(function() {
        $("#PRODUCTS").click(function() {
            $(".productHide").hide();
        });
        $("#PRODUCTS").click(function() {
            $(".productMenu").show();
        });
    });
    $(document).ready(function() {
        $("#productMaterail").click(function() {
            $(".productMenu").hide();
        });
        $("#productMaterail").click(function() {
            $(".productByMaterial_menu").show();
        });
    });
    $(document).ready(function() {
        $("#backProduct").click(function() {
            $(".productMenu").hide();
        });
        $("#backProduct").click(function() {
            $(".productHide").show();
        });
    });
    $(document).ready(function() {
        $("#backProductByMaterial").click(function() {
            $(".productByMaterial_menu").hide();
        });
        $("#backProductByMaterial").click(function() {
            $(".productMenu").show();
        });
    });
    $(document).ready(function() {
        $("#productCollection").click(function() {
            $(".productMenu").hide();
        });
        $("#productCollection").click(function() {
            $(".productByCollection_menu").show();
        });
    });
    $(document).ready(function() {
        $("#backProductByCollection").click(function() {
            $(".productByCollection_menu").hide();
        });
        $("#backProductByCollection").click(function() {
            $(".productMenu").show();
        });
    });

    $(document).ready(function() {
        $(".slider").slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
>>>>>>> 7d4bb382c43e0ea440d5b2d5b7aff8d271b34036
            speed: 1000,
            autoplaySpeed: 2000,
            infinite: true,
            autoplay: true,
            centerMode: true,
            centerPadding: "0",
<<<<<<< HEAD
            responsive: [
                {
=======
            responsive: [{
>>>>>>> 7d4bb382c43e0ea440d5b2d5b7aff8d271b34036
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
<<<<<<< HEAD
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }
=======
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }
>>>>>>> 7d4bb382c43e0ea440d5b2d5b7aff8d271b34036

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
