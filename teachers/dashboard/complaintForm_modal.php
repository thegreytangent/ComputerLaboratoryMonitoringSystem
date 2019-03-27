<div class="modal fade" id="complaintform" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <form id="complaintform">
        <div class="card-body">
          <div class="card-title">
            <h3 class="text-center title-2">Complaint Form</h3>
          </div>
          <hr>
          <br>
          <div class="row">
            <div class="col-6">
              <label for="x_card_code" class="control-label mb-1">PC Number</label>
              <div class="input-group">
                <input id="unitNum" name="unitNum" type="number" class="form-control cc-cvc" placeholder="Unit/PC number" autocomplete="off">
              </div>
            </div>
            <div class="col-6">
              <label for="selectSm" class=" form-control-label">Peripheral Parts</label>
              <select name="parts" id="parts" class="form-control-sm form-control">
                <option value="">Select Parts</option>
                <option value="Monitor">Monitor</option>
                <option value="Keyboard">Keyboard</option>
                <option value="Mouse">Mouse</option>
                <option value="AVR">AVR</option>
                <option value="Unit">Unit</option>
                <option value="Connection">Connection</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>
          <br/>
          <div class="col-12 col-md-12">
            <label for="selectSm" class=" form-control-label">For other Concerns..</label>
            <textarea name="concerns" id="concerns" rows="9" placeholder="Note..." class="form-control"></textarea>
          </div>
          <div><hr>
            <input type="hidden" name="lab" value="<?php echo Input::get('lab'); ?>">
            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
              <i class="fa fa-bell fa-lg"></i>&nbsp;
              <span id="payment-button-amount">Submit From</span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
