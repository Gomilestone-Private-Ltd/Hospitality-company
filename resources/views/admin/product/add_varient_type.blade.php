<div class="modal fade" id="addVarientType" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="add_varient_type" enctype='multipart/form-data'>
            @csrf
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Varient Type</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                <div class="modal-body">

                    <div class="col-md-12 col-sm-6 col-12">
                        <div class="form-group ">
                            <label class="form-label-box">Varient Type Name</label>
                            <input type="text" placeholder="Varient Type Name" class="form-control form-control-user" name="varient_type_name">
                            <p class="text-danger varient_type_name"></p>
                            
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-6 col-12">
                        <div class="form-group ">
                            <label class="form-label-box">Varient Type</label>
                            <br>
                            <input type="radio" name="varient_type" value="text" >
                            <label for="html">Text</label>
                            <input type="radio" name="varient_type" value="color">
                            <label for="html">Color</label><br>
                           <p class="text-danger varient_type"></p>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary create_varient_type">Save changes</button>
            </div>
        </form>
      </div>
    </div>
</div>