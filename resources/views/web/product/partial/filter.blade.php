<div class="accordion" id="accordionFilter">
    
    @if(count($sizes))
    <div class="card accordion-card-box">
        <div class="card-header arrordion-header" data-toggle="collapse" data-target="#SizeFilter"
            aria-expanded="true">
            <span class="accordion-title">Size</span>
            <span class="accicon"><i class="fa fa-angle-down rotate-icon"
                    aria-hidden="true"></i></span>
        </div>
        
        <div id="SizeFilter" class="collapse show" data-parent="#accordionFilter">
            <div class="card-body accrodion-card-body">
                <form action="">
                @foreach($sizes as $size)
                    <div class="check-box">
                        <input type="checkbox" id="Size" name="Size">
                        <p>{{$size->size ??''}}</p>
                    </div>
                @endforeach
                    
                </form>
            </div>
        </div>
       
    </div>
    @endif

    @if(count($colors))
    <div class="card accordion-card-box">
        <div class="card-header arrordion-header collapsed" data-toggle="collapse"
            data-target="#ColourFilter" aria-expanded="false" aria-controls="ColourFilter">
            <span class="accordion-title">Colour</span>
            <span class="accicon"><i class="fa fa-angle-down rotate-icon"
                    aria-hidden="true"></i></span>
        </div>
        <div id="ColourFilter" class="collapse" data-parent="#accordionFilter">
            <div class="card-body accrodion-card-body">
                <form action="">
                @foreach($colors as $color)
                    <div class="check-box">
                        <input type="checkbox" id="Colour" name="Colour">
                        <p>{{$color->color_name ??''}}</p>
                    </div>
                @endforeach    
                </form>
            </div>
        </div>
    </div>
    @endif

    @if(count($materials))
    <div class="card accordion-card-box">
        <div class="card-header arrordion-header collapsed" data-toggle="collapse"
            data-target="#MaterialFilter" aria-expanded="false">
            <span class="accordion-title">Material</span>
            <span class="accicon"><i class="fa fa-angle-down rotate-icon"
                    aria-hidden="true"></i></span>
        </div>

        <div id="MaterialFilter" class="collapse" data-parent="#accordionFilter">
            <div class="card-body accrodion-card-body">
                <form action="">
                @foreach($materials as $material)
                    <div class="check-box">
                        <input type="checkbox" id="Material" name="Material">
                        <p>{{$material->name ??''}}</p>
                    </div>
                @endforeach    
                </form>
            </div>
        </div>
    </div>
    @endif


    @if(count($areaOfUse))
    <div class="card accordion-card-box">
        <div class="card-header arrordion-header collapsed" data-toggle="collapse"
            data-target="#AreaFilter" aria-expanded="false">
            <span class="accordion-title">Area of Use</span>
            <span class="accicon"><i class="fa fa-angle-down rotate-icon"
                    aria-hidden="true"></i></span>
        </div>
        <div id="AreaFilter" class="collapse" data-parent="#accordionFilter">
            <div class="card-body accrodion-card-body">
                <form action="">
                @foreach($areaOfUse as $areaOfUses)
                    <div class="check-box">
                        <input type="checkbox" id="Area" name="Area">
                        <p>{{$areaOfUses->area_of_use ??""}}</p>
                    </div>
                @endforeach
                </form>
            </div>
        </div>
    </div>
    @endif
    
    @if(count($idealFor))
    <div class="card accordion-card-box">
        <div class="card-header arrordion-header collapsed" data-toggle="collapse"
            data-target="#IdealFilter" aria-expanded="false">
            <span class="accordion-title">Ideal for</span>
            <span class="accicon"><i class="fa fa-angle-down rotate-icon"
                    aria-hidden="true"></i></span>
        </div>
        <div id="IdealFilter" class="collapse" data-parent="#accordionFilter">
            <div class="card-body accrodion-card-body">
                <form action="">
                @foreach($idealFor as $idealFor)
                    <div class="check-box">
                        <input type="checkbox" id="Ideal" name="Ideal">
                        <p>{{$idealFor->ideal_for ??''}}</p>
                    </div>
                @endforeach    
                </form>
            </div>
        </div>
    </div>
    @endif

</div>