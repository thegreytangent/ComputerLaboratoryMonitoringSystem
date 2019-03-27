<!-- resourcesssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->
<div class="modal fade" id="assistance_rate_modal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <form id="request_rate_form">
        <div class="card-body" align="center">
          <div class="card-title">
            <h4 class="text-center text-danger title-2">Administrator Response</h4>
          </div>
          <hr>

          <div class="form-group col-md-8">
            <label for="inputState">Rate the Student Assistant</label>
            <select name="rate" class="form-control" required>
              <option value="" selected>Select Stars</option>
              <option value="1">☆ star</option>
              <option value="2">☆☆ stars</option>
              <option value="3">☆☆☆ stars</option>
              <option value="4">☆☆☆☆ stars</option>
              <option value="5">☆☆☆☆☆ stars</option>
            </select>
          </div><br>
          <div class="form-group col-md-8">
            <label><small>Click "Done" if your request has been done or finished by SA</small></label>
            <hr>
            <button type="submit" class="btn btn-outline-success">Done</button>
          </div>
          <div><hr>
            <input type="hidden" name="id" id="rate_id" >
            <input type="hidden" name="lab" value="<?php echo Input::get('lab'); ?>">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- resourcesssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->
