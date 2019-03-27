
<div class="col-lg-12 justify-content-center">
  <div class="row justify-content-center">

    <div class="col-lg-4 justify-content-center">
      <a href="?page=request_assistance_notif&lab=<?php echo Input::get('lab'); ?>">
        <div class="statistic__item assistanceAlertNotif lab1 bg-success">
          <h2 class="number">Assitance Alert Notifications</h2>
          <!-- butangi lng design ang count -->
          <h2 class="number"><?php echo RequestAssistanceReply::countUnSeenNotif(Input::get('lab')); ?></h2>
        </div>
      </a>
    </div>

    <div class="col-lg-4">
     <a href="?page=request_resources_notif&lab=<?php echo Input::get('lab'); ?>">
      <div class="statistic__item lab1 bg-info">
        <h2 class="number">Request Resources Notifications</h2>
        <h2 class="number"><?php echo ResourcesRequestReply::countUnseen(Input::get('lab')) ; ?> </h2>
      </div>
    </a>
  </div>





</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){

    $('.assistanceAlertNotif').click(function() {
      var lab = $('#lab_id').val();
      $.ajax({
        url: 'notifications/clearNotif.php',
        data:{lab:lab,NotifType:'assistanceAlert'},
        success:function(res){}
      });
    });
  });
</script>
