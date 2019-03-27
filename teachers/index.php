<?php require_once '../core/init.php'; ?>
<?php  $page = new Page(Input::get('page')); ?>
<?php if (!Session::exists('teachers') || empty(Input::get('lab'))) { Redirect::to('../login/login.php');} ?>
  <?php require_once 'pages/header.php'; ?>
  <input type="hidden" id="lab_id" value="<?php echo Input::get('lab'); ?>">
  <body class="animsition">
    <div class="page-wrapper">
      <?php require_once 'pages/navbar.php'; ?>

      <div class="page-content--bgf7">
        <section class="statistic statistic2">
          <?php echo $page->teacherContent(); ?>
        </section>
        <!-- END Laboratory PC-->

        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="copyright">
                  <p>A Thesis Project develop for Computer Laboratory of STI West Negros University by <a href="#">Reck Ru</a>.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END COPYRIGHT-->
      </div>
      <!-- end of page content -->
    </div>
    <!------------------------------------------ for modal ------------------------------------------>
    <!-- modal Teacher Form Assitance Notifier -->
    <?php require_once 'dashboard/assistance_modal.php'; ?>
    <?php require_once 'dashboard/complaintForm_modal.php'; ?>
    <?php require_once 'dashboard/sourcesForm_modal.php'; ?>
    <?php //require_once 'dashboard/notification_modal.php'; ?>
  </body>
  <!------------------------------------------ for script ------------------------------------------>

  <!-- Bootstrap JS-->
  <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
  <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->
  <script src="../vendor/slick/slick.min.js">
  </script>
  <script src="../vendor/wow/wow.min.js"></script>
  <script src="../vendor/animsition/animsition.min.js"></script>
  <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  </script>
  <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
  <script src="../vendor/counter-up/jquery.counterup.min.js">
  </script>
  <script src="../vendor/circle-progress/circle-progress.min.js"></script>
  <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
  <script src="../vendor/select2/select2.min.js">
  </script>
  <!-- Main JS-->
  <script src="../js/main.js"></script>
  <!------------------------------------------ for script ------------------------------------------>
  </html>


  <script type="text/javascript">
  $(document).ready(function(){


$('.clearLogs').click(function(){
  var lab = $(this).attr('id');
  if (confirm("All logs will be deleted.Do you want to continue?")) {
     $.ajax({
      url: 'dashboard/clearLogs.php',
      method: 'post',
      dataType: 'json',
      data:{lab:lab},
      success:function(res){
       location.reload();
      }
    });
  }
  return false;
});





  $(document).on('submit','#request_assistance_form',function(){

    $.ajax({
      url: 'dashboard/assistance_request.php',
      method: 'post',
      data:$(this).serialize(),
      success:function(res){
        if (res == 1) {
          alert("Your request has been submitted!");
          $('#assistform').modal('hide');
        }
         location.reload();
      }
    });
    return false;
  });


  $(document).on('submit','#complaintform',function(){
   $.ajax({
    url: 'dashboard/complaint_add.php',
    method: 'POST',
    data:$(this).serialize(),
    success:function(res){
      if (res == 1)
      {
        alert("Complaint has been submitted!");
        $('#assistform').modal('hide');
        
      }
      location.reload();
    }
   });
    return false;
  });






    window.setInterval(function(){
      checkNotifications();
      checkLabStatus();
    },3000);


    function checkLabStatus()
    {
        $.ajax({
        url: 'check.php',
        dataType: 'json',
        success:function(data){
         checkUnitOnline(data);
         


        }
      });

    }

    function checkUnitOnline(data)
{
  $('.lab_status').removeClass('bg-success').addClass('bg-secondary');
  if ( jQuery.isEmptyObject(data) ) {
    
      $('.text_status').html("").html("STATUS: OFFLINE");
      $('.teacher-lab').html("");

    } else {
      $.map(data,function(i){
        $('.'+i.lab+'').removeClass('bg-secondary').addClass('bg-success');
        $('.'+i.lab+'_status').html("").html("STATUS: ONLINE");
        $('#teacher-'+i.lab).html("").html(i.teacher);
      });
    }
  }

    function checkNotifications() {
      var lab = $('#lab_id').val();
      $.ajax({
        url: 'notif.php',
        data:{lab:lab},
        success:function(res){
          $('.teacherNotif').removeClass('has-noti');
          if (res == 1) {
            $('.teacherNotif').addClass('has-noti');
          }
        }
      });
    }

  });

</script>
