<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
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
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Bootstrap CSS-->
  <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <br>
        <center><h3>Logs Report</h3></center>
                <table class="table table-earning">
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
<script type="text/javascript">
        window.print();
       setTimeout('closePrint()', 500);
       function closePrint() {
           document.location.href = '../index.php?page=logs'
       }
</script>
</body>
</html>
