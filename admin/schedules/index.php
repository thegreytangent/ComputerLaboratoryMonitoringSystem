<div class="container" align="center">
  <div class="row col-lg-8 justify-content-center" align="center">
    <div class="col">
      <div class="card-header" style="text-align: left">
        <h4>Student Assistance Schedules
        </h4>
      </div>
      <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
          <thead>
            <tr>
              <th>#</th>
              <th>Student Assistance</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $count = 1; ?>
            <?php foreach (StudentAssistance::find_all() as $student): ?>
              <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $student->completeName(); ?></td>
                <td>
                  <a href="?page=view_schedules&id=<?php echo $student->getId(); ?>" class="btn btn-success">View Schedules</a>
                </td>
              </tr>
              <?php $count++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="schedules/script.js"></script>
