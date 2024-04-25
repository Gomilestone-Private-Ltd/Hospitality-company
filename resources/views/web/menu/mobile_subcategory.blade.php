    <p id="backProductByMaterial" class="back-btn-box backProductByMaterial" >
        <img class="backArro" src="{{asset('assets/web/image/nextArro.png')}}" alt="" onclick="hideShowProductCategoryList()">
        PRODUCTS/ {{$categoryName->name ??''}}
    </p>
    @foreach($subCategoryList as $subCategory)
    <div class="productByMaterial_subMenu">
        <p>{{$subCategory->name ??''}}</p>
        <ul>  
            @foreach($subCategory->getSuperSubCategory as $superSubCategory)
                <li>
                    <a href="#">{{$superSubCategory->name ??''}}</a>
                </li>
            @endforeach
        </ul>
    </div>
    @endforeach