<div class="modal fade" id="assistform" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">

      <form id="request_assistance_form">
      <div class="card-body">
        <div class="card-title">
          <h3 class="text-center title-2">Request Assistance</h3>
        </div>
        <hr>
        <div class="col-12 col-md-12">
          <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Message..." class="form-control"></textarea>
        </div>
        <br>
        <div><hr>
          <input type="hidden" name="lab" value="<?php echo Input::get('lab'); ?>">
          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
            <i class="fa fa-bell fa-lg"></i>&nbsp;
            <span id="payment-button-amount">Notify</span>
          </button>
        </div>
      </div>
      </form>



    </div>
  </div>
</div>
