    <p id="backProductByMaterial" class="back-btn-box backProductByMaterial" >
        <img class="backArro" src="{{asset('assets/web/image/nextArro.png')}}" alt="" onclick="hideShowProductCategoryList()">
        PRODUCTS/ {{$categoryName->name ??''}}
    </p>
    @foreach($subCategoryList as $subCategory)
    <div class="productByMaterial_subMenu">
        <a href="{{url('/category')}}/{{$subCategory->meta_url ??""}}/{{$subCategory->slug ??""}}">{{$subCategory->name ??''}}</p>
        <ul>  
            @foreach($subCategory->getSuperSubCategory as $superSubCategory)
                <li>
                    <a href="{{url('/sub-category')}}/{{$superSubCategory->meta_url ??""}}/{{$superSubCategory->slug ??""}}">{{$superSubCategory->name ??''}}</a>
                </li>
            @endforeach
        </ul>
    </div>
    @endforeach