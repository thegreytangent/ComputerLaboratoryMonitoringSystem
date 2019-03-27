<?php $student = StudentAssistance::find_by_id(Input::get('id')); ?>
<div class="container" align="center">
  <div class="row col-lg-12 justify-content-center" align="center">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h2 class="text-success"> <?php echo $student->completeName(); ?>
          </h2>
        </div>
        <div class="card-body">
          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#s-am" role="tab" aria-controls="home" aria-selected="true">Morning</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#s-pm" role="tab" aria-controls="profile" aria-selected="false">Afternoon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#s-assgn" role="tab" aria-controls="contact" aria-selected="false">Assignments</a>
            </li>
          </ul>
        </div>


        <div class="tab-content pl-3 p-1" id="myTabContent">
          <div class="tab-pane fade show active" id="s-am" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-lg-12">
              <table class="table table-sm table-borderless table-hover text-center">
                <thead class="text-info">
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Monday</th>
                    <th scope="col">Tuesday</th>
                    <th scope="col">Wednesday</th>
                    <th scope="col">Thursday</th>
                    <th scope="col">Friday</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach(timeArrays() as $id => $time): ?>
                    <tr>
                      <td><?php echo $time; ?></td>
                      <?php foreach(daysArray() as $day): ?>
                        <td><button tmpId=<?php echo $id; ?> student="<?php echo Input::get('id'); ?>" day="<?php echo $day; ?>" id="<?php echo $time; ?>" tm = 'pm' class="btn SABtnClick <?php echo Schedules::class(Input::get('id'),$time,$day,'pm'); ?> btn-sm ">
                          <span id="schedule_text_<?php echo $id; ?>_<?php echo $day; ?>"><?php echo Schedules::classText(Input::get('id'),$time,$day,'pm'); ?></span>
                        </button>
                      </td>
                    <?php endforeach; ?>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="tab-pane fade" id="s-pm" role="tabpanel" aria-labelledby="home-tab">
          <div class="col-lg-12">
            <table class="table table-sm table-borderless table-hover text-center">
              <thead class="text-info">
                <tr>
                  <th scope="col">Time</th>
                  <th scope="col">Monday</th>
                  <th scope="col">Tuesday</th>
                  <th scope="col">Wednesday</th>
                  <th scope="col">Thursday</th>
                  <th scope="col">Friday</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach(timeArraysPM() as $id => $time): ?>
                  <tr>
                    <td><?php echo $time; ?></td>
                    <?php foreach(daysArray() as $day): ?>
                      <td><button tmpId=<?php echo $id; ?> student="<?php echo Input::get('id'); ?>" day="<?php echo $day; ?>" id="<?php echo $time; ?>" tm = 'pm' class="btn SABtnClick <?php echo Schedules::class(Input::get('id'),$time,$day,'pm'); ?> btn-sm ">
                        <span id="schedule_text_pm_<?php echo $id; ?>_<?php echo $day; ?>"><?php echo Schedules::classText(Input::get('id'),$time,$day,'pm'); ?></span>
                      </button>
                    </td>
                  <?php endforeach; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>


      <div class="tab-pane fade" id="s-assgn" role="tabpanel" aria-labelledby="home-tab">
        <div class="col-lg-12">
          <table class="table table-borderless table-hover">
            <thead class="text-info" align="center">
              <tr>
                <th scope="col">Laboratory Room</th>
                <th scope="col">SA Name</th>
                <th scope="col">Schedule of Maintenance</th>
              </tr>
            </thead>
            <tbody align="center">
              <?php foreach (laboratoryList() as $lab ): ?>
                <tr>
                  <th scope="row"><?php echo laboratory($lab); ?></th>
                  <td><?php echo StudentAssistance::assignToLab($lab); ?></td>
                  <td><?php echo StudentAssistance::assignToLabDay($lab); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

      </div>

    </div>
  </div>
</div>
</div>
</div>

<script src="schedules/script.js"></script>
