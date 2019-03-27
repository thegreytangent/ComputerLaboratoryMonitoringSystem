<div class="modal fade" id="sourceform" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">

      <form id="resourcesform">
        <div class="card-body">
          <div class="card-title">
            <h3 class="text-center title-2">Request Resources Form</h3>
          </div>
          <hr>
          <br>
          <div class="row">
            <div class="col-12">
              <label for="selectSm" class=" form-control-label">Sources Need</label>
              <select name="peripheral" id="peripheral" class="form-control" required>
                <option value="">Select Resources</option>
                <?php foreach (Resources::find_all() as $resources): ?>
                  <option value="<?php echo $resources->getResourcesName(); ?>"><?php echo $resources->getResourcesName(); ?></option>
                <?php endforeach; ?>
                <option value="others">Others</option>

              </select>
            </div>
          </div>
          <br>
          <div class="col-12 col-md-12">
            <textarea name="note" id="note" rows="9" placeholder="Note..." class="form-control"></textarea>
          </div>
          <input type="hidden" name="lab" value="<?php echo Input::get('lab') ?>">
          <div><hr>
            <button type="submit" class="btn btn-lg btn-info btn-block">
              <i class="fa fa-bell fa-lg"></i>&nbsp;
              <span id="payment-button-amount">Submit Request</span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#resourcesform').submit(function(){

      $.ajax({
        url: 'dashboard/resourcesRequestAdd.php',
        method: 'POST',
        data: $(this).serialize(),
        success:function(res){
          if (res == 1) {
            alert("Request has been submitted!");
            $('#sourceform').modal('hide');

          }
           location.reload();
        }

      });
      return false;
    });
  });
</script>
