
<div class="modal fade" id="edit_inventory_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Edit Inventory</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <input type="hidden" id="edit_id" value="">
          <div class="form-group">
            <label for="Category">Category</label>
            <input type="text" name="Category" class="form-control" id="edit_Category" placeholder="Category">
          </div>
          <div class="form-group">
            <label for="edit_Brand">Brand</label>
            <input type="text" name="Brand" class="form-control" id="edit_Brand" placeholder="Brand">
          </div>
          <div class="form-group">
            <label for="edit_Type">Type</label>
            <input type="text" name="Type" class="form-control" id="edit_Type" placeholder="Type">
          </div>
          <div class="form-group">
            <label for="edit_Type_2">Type 2</label>
            <input type="text" name="Type2" class="form-control" id="edit_Type_2" placeholder="Type 2">
          </div>
          <div class="form-group">
            <label for="edit_Machine_ID">ID</label>
            <input type="text" name="Machine_ID" class="form-control" id="edit_Machine_ID" placeholder="Machine ID">
          </div>
          <div class="form-group">
            <label for="edit_Available">Available</label>
            <input type="text" name="Available" class="form-control" id="edit_Available" placeholder="Available">
          </div>
          <div class="form-group">
            <label for="edit_Notes">Notes</label>
            <textarea class="form-control" name="Notes" id="edit_Notes" placeholder="Notes"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary save_form_button" onclick="edit_inventory();">Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>