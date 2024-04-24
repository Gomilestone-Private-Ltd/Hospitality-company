<div class="modal fade" id="addVarientValue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" action="{{route('add.products')}}" id="add-inventory" enctype='multipart/form-data'>
            @csrf
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Varient Value</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                <div class="modal-body">

                    <div class="col-md-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label class="form-label-box">Label</label>
                            <input type="text" placeholder="Label Name" class="form-control form-control-user" name="label_name">
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-6 col-12">
                        <div class="form-group">
                            <label class="form-label-box">Value</label>
                            <input type="text" placeholder="label_value" class="form-control form-control-user" name="label_value">
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
</div>