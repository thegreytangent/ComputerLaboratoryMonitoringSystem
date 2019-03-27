<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">

      <form id="change_password" action="" method="post" class="form-horizontal">
        <div class="card">
          <div class="card-header">
            <strong>Update Password:</strong>
          </div>
          <div class="card-body card-block">

            <div class="row form-group">
              <div class="col col-md-4">
                <label for="hf-email" class=" form-control-label">Current Password:</label>
              </div>
              <div class="col-12 col-md-8">
                <input type="password" id="oldpassword" name="oldpassword" class="form-control" data-validation="required">
                <span id="oldpassword_error"></span>
              </div>
            </div>


            <div class="row form-group">
              <div class="col col-md-4">
                <label for="hf-email" class=" form-control-label">New Password:</label>
              </div>
              <div class="col-12 col-md-8">
                <input type="password" id="newpassword" name="newpassword" class="form-control" data-validation="required">
              </div>
            </div>

            <div class="row form-group">
              <div class="col col-md-4">
                <label for="hf-email" class=" form-control-label">Repeat Password:</label>
              </div>
              <div class="col-12 col-md-8">
                <input type="password" id="cpassword" name="cpassword" class="form-control" data-validation-confirm="newpassword" data-validation="confirmation">
              </div>
            </div>

          </div>

          <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Update</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset </button>
          </div>
        </div>


      </form>
    </div>
  </div>

</div>

<script>
$.validate({
  modules : 'security'
});

$(document).ready(function(){

  $('#change_password').submit(function(){
    $.ajax({
      url: 'password/update.php',
      method:'POST',
      data:$(this).serialize(),
      dataType: 'JSON',
      success:function(data){
        if (data.res == 1) {
          alert("Password has been updated!");
          window.location = '?page=dashboard&lab=<?php echo Input::get('lab');?>';
        }else {
          alert('Please check your current password!');

        }
      }
    });
    return false;
  });
});
</script>
