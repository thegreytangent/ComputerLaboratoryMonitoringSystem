<section class="statistic statistic2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title-5 m-b-35">Request Resources Notifications</h3>
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
                <th>Action</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $count = 1; ?>
              <?php foreach ( ResourcesRequest::find_by_array('Lab',Input::get('lab')) as $reply ):  ?>
                <?php if (!empty(ResourcesRequestReply::findbyLabStatus($reply->getId(),0))): ?>
                  <?php $resourcesReply  =  ResourcesRequestReply::find_by('ResourcesRequestId',$reply->getId()); ?>
                  <?php $sa = StudentAssistance::find_by_id($resourcesReply->getStudentAssistanceId()); ?>
                  <tr>

                    <td><?php echo $count; ?></td>
                    <td><?php echo $resourcesReply->getMessage(); ?></td>
                    <td><?php echo $sa->completeName(); ?></td>
                    <td>
                      <button class="btn btn-success resourcesNotifBtn" id="<?php echo $resourcesReply->getId(); ?>">Ok</button>
                    </td>
                    <td></td>
                  </tr>
                <?php endif; ?>
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

    $('.resourcesNotifBtn').click(function(){

      var id = $(this).attr('id');

      if (confirm("Do you want to confirm?")) {
       $.ajax({
        url: 'notifications/requestResourceAdd.php',
        method: 'post',
        data : {id:id},
        success:function(res) {
          if (res == 1)
          {
            location.reload();
          }
        }
      });
     }

     
     return false;

   });

    $('.rateBtn').click(function() {
      $('#rate_id').val($(this).attr('id'));
      $('#assistance_rate_modal').modal('show');
    });


    $('#request_rate_form').submit(function() {
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
