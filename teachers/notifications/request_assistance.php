<section class="statistic statistic2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title-5 m-b-35">Request Assistance Notifications</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-12">
        <div class="table-responsive m-b-40">
          <table class="table table-borderless table-data3">
            <thead>
              <tr>
                <th>#</th>
                <th>Message</th>
                <th>S.A Name</th>
                <th>Rate</th>

                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $count = 1; ?>
              <?php foreach ( RequestAssistanceReply::find_by_array('Lab',Input::get('lab')) as $reply ):  ?>
                <tr>
                  <td><?php echo $count; ?></td>
                  <td><?php echo $reply->getMessage(); ?></td>
                  <td><?php echo $reply->SAName(); ?></td>
                  <td><?php echo $reply->rating(); ?></td>
                  <td>
                    <?php if (!$reply->checkRatingExist()): ?>
                      <button id="<?php echo $reply->getId(); ?>" type="button" class="btn btn-sm btn-info rateBtn" name="button">&nbsp;Rate
                      </button>
                    <?php endif; ?>
                  </td>
                </tr>
                <?php $count++; ?>
              <?php endforeach;  ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>



<?php require_once 'assistance_rate_modal.php'; ?>

<script type="text/javascript">
  $(document).ready(function(){

  $('.rateBtn').click(function(){
      $('#rate_id').val($(this).attr('id'));
      $('#assistance_rate_modal').modal('show');
    });

    $('#request_rate_form').submit(function(){
      var id = $(this).attr('id');
      $.ajax({
        url: 'notifications/request_assistance_rate.php',
        data: $(this).serialize(),
        success:function(res){
          if (res == 1) {
            alert("Reponse has been submitted!");
            $('#assistance_rate_modal').modal('hide');
            location.reload();
          }
        }
      });
      return false;
    });



  });


</script>
