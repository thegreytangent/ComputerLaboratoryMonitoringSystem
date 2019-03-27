<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="title-5 m-b-35">Complaint Table for <?php echo laboratory(Input::get('lab')); ?></h3>
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
              <th>Date</th>
              <th>Lab</th>
              <th>Unit #</th>
              <th>Parts</th>
              <th>Teacher</th>
              <th>Concerns</th>
              <th></th>
            </tr>

          </thead>
          <tbody>
            <?php $count = 1; ?>
            <?php foreach (Complaint::findbyLabStatus(Input::get('lab'),0) as $complaint ): ?>
            <tr>
              <td><?php echo $count; ?>.</td>
              <td><?php echo $complaint->getDate(); ?></td>
              <td><?php echo $complaint->getLab(); ?></td>
              <td><?php echo $complaint->getPCNum(); ?></td>
              <td><?php echo $complaint->getParts(); ?></td>
              <td><?php echo $complaint->complaintName(); ?></td>
              <td><?php echo $complaint->getConcerns(); ?></td>
              <td>
                <button id="<?php echo $complaint->getId(); ?>" class="btn btn-success complaintOkBtn">Ok</button>
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

<script src="complaint/script.js"></script>
