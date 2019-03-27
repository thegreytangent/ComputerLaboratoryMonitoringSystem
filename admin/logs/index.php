<?php $logs = array(); ?>
<?php $teacherLogs = array() ?>
<?php

function date_sort($a, $b) {
  return strtotime($a) - strtotime($b);
}

foreach (LogsAdmin::find_all() as $adminLog ) {
  $logs[] = array(
    'user' => 'Admin',
    'date' => $adminLog->getDate(),
    'time' => $adminLog->getTime(),
    'message' => $adminLog->getMessage()
  );
}

foreach (Logs::find_all() as $log ) {
  $logs[] = array(
    'user' => 'Teacher',
    'date' => $log->getDate(),
    'time' => $log->getTime(),
    'message' => $log->getMessage()
  );
}


foreach ($logs as $key => $part) {
  $sort[$key] = strtotime($part['date']);
}
@array_multisort($sort, SORT_DESC, $logs);

?>

<div class="container" align="center">
  <div class="row justify-content-center" align="center">
    <div class="col">
      <div class="card-header">
        <div class="pull-left">
          <h4>
            Logs &nbsp;&nbsp;<a href="" id="lab1" class="clearLogs">
              <i class="zmdi zmdi-refresh-alt  zmdi-hc-lg"></i></a>
            </h4>
          </div>
          <div class="pull-right">
            <a href="logs/print.php" class="btn btn-success">Print</a>
          </div>
            <br>
          </div>

          <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
              <thead>
                <tr>
                  <th>#</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Logs Message</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($logs as $a ): ?>
                  <tr>
                    <td></td>
                    <td><?php echo $a['user']; ?></td>
                    <td><?php echo $a['date']; ?></td>
                    <td><?php echo $a['time']; ?></td>
                    <td><?php echo $a['message']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready(function(){

        $('.clearLogs').click(function(){
         if (confirm('All logs will be deleted. Do you want to continue?')) 
         {
          $.ajax({
            url: 'logs/clear.php',
            dataType: 'json',
            success:function(data){
              if (data.res == 1) {
                alert("All logs has been deleted");
                location.reload();
              }
            }
          });
        }
        return false;
      });


      });
    </script>
