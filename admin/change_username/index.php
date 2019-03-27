<?php 
if (Session::exists('admin')) {
  $id= Session::get('admin');

  $user = Users::find_by_id($id);

} ?>
<?php $username = ($user) ? $user->getUsername() : ""; ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">

      <form id="change_username" action="" method="post" class="form-horizontal">
        <div class="card">
          <div class="card-header">
            <strong>Update Password:</strong>
          </div>
          <div class="card-body card-block">

            <div class="row form-group">
              <div class="col col-md-4">
                <label for="hf-email" class=" form-control-label">Change Username:</label>
              </div>
              <div class="col-12 col-md-8">
                <input type="text" value="<?php echo $username; ?>" id="username" name="username" class="form-control" data-validation="required">
                <span id="oldpassword_error"></span>
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

  $(document).ready(function(){

    $('#change_username').submit(function(){
      $.ajax({
        url: 'change_username/update.php',
        method:'POST',
        data:$(this).serialize(),
        dataType: 'JSON',
        success:function(data){
          if (data.res == 1) {
            alert("Username has been updated!");
            window.location = '?';
          }
        }
      });
      return false;
    });
  });
</script>
