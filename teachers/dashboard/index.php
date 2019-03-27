<div class="container">

  <div class="row">
    <div class="col-lg-3">
      <div class="col-lg-12">
        <div class="au-card au-card--no-shadow au-card--no-pad">
          <div class="au-card-title">
            <div class="bg-overlay bg-overlay--blue"></div>
            <h3>
              <i class="zmdi zmdi-comment-text"></i>Logs  <a href="" id="<?php echo Input::get('lab'); ?>" class="clearLogs"><i class="zmdi zmdi-refresh-alt"></i></a>
            </h3>
          </div>
          <div class="au-inbox-wrap js-inbox-wrap" style="height: 500px;">
            <div class="au-message js-list-load">
              <div class="au-message-list">
                <?php foreach (Logs::getMax15(Session::get('teachers'),Input::get('lab')) as $log ): ?>
                <?php $teacher = Teachers::find_by_id($log->getTeacherId()); ?>
                <div class="message__item">
                  <div class="au-message__item-inner">
                      <div class="text">
                         <label><?php echo readableDate($log->getDate()); ?></label><br>
                        <label><?php echo $log->getTime(); ?></label>
                        <h6 class="name"><?php echo $teacher->teacherName(); ?></h6>
                        <small><?php echo $log->getMessage();?></small>
                      </div>
                  </div>
                </div>
                <hr>
              <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-9">
      <div class="row">
        <div class="col-lg-4">
          <div class="statistic__item lab_status lab1 <?php echo LabStatus::check_active('lab1') ?>">
            <h2 class="number">COMLAB 1</h2>
            <span class="desc lab1_status text_status ">Status: <?php echo  LabStatus::status_name('lab1'); ?></span><br>
            <span class="desc"><small>Teacher: <span id="teacher-lab1" class="teacher-lab"></span></small></span><br>
            <span class="desc"><small><small>Location: IT Building, Ground Floor</small></small></span>
            <div class="icon">
              <i class="fas  fa-power-off"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="statistic__item lab_status lab2 <?php echo LabStatus::check_active('lab2') ?>">
            <h2 class="number">COMLAB 2</h2>
            <span class="desc lab2_status text_status ">Status: <?php echo  LabStatus::status_name('lab2'); ?></span><br>
             <span class="desc"><small>Teacher: <span id="teacher-lab2" class="teacher-lab"></span></small></span><br>
            <span class="desc"><small><small>Location: IT Building, Ground Floor</small></small></span>
            <div class="icon">
              <i class="fas  fa-power-off"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="statistic__item lab_status lab3 <?php echo LabStatus::check_active('lab3') ?>">
            <h2 class="number">COMLAB 3</h2>
            <span class="desc lab3_status text_status ">Status: <?php echo  LabStatus::status_name('lab3'); ?></span><br>
             <span class="desc"><small>Teacher: <span id="teacher-lab3" class="teacher-lab"></span></small></span><br>
            <span class="desc"><small><small>Location: Main Building, 3rd Floor</small></small></span>
            <div class="icon">
              <i class="fas  fa-power-off"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="statistic__item lab_status lab4 <?php echo LabStatus::check_active('lab4') ?>">
            <h2 class="number">COMLAB 4</h2>
            <span class="desc lab4_status text_status ">Status: <?php echo  LabStatus::status_name('lab4'); ?></span><br>
               <span class="desc"><small>Teacher: <span id="teacher-lab4" class="teacher-lab"></span></small></span><br>
            <span class="desc"><small><small>Location: Main Building, 3rd Floor</small></small></span>
            <div class="icon">
              <i class="fas  fa-power-off"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="statistic__item lab_status lab5 <?php echo LabStatus::check_active('lab5') ?>">
            <h2 class="number">COMLAB 5</h2>
            <span class="desc lab5_status text_status ">Status: <?php echo  LabStatus::status_name('lab5'); ?></span><br>
              <span class="desc"><small>Teacher: <span id="teacher-lab5" class="teacher-lab"></span></small></span><br>
            <span class="desc"><small><small>Location: Main Building, 3rd Floor</small></small></span>
            <div class="icon">
              <i class="fas  fa-power-off"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="statistic__item lab_status lab6 <?php echo LabStatus::check_active('lab6') ?>">
            <h2 class="number">COMLAB 6</h2>
            <span class="desc lab6_status text_status ">Status: <?php echo  LabStatus::status_name('lab6'); ?></span><br>
               <span class="desc"><small>Teacher: <span id="teacher-lab6" class="teacher-lab"></span></small></span><br>
            <span class="desc"><small><small>Location: IT Building, 2nd Floor</small></small></span>
            <div class="icon">
              <i class="fas  fa-power-off"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="statistic__item lab_status lab7 <?php echo LabStatus::check_active('lab7') ?>">
            <h2 class="number">COMLAB 7</h2>
            <span class="desc lab7_status text_status ">Status: <?php echo  LabStatus::status_name('lab7'); ?></span><br>
             <span class="desc"><small>Teacher: <span id="teacher-lab7" class="teacher-lab"></span></small></span><br>
            <span class="desc"><small><small>Location: IT Building, 2nd Floor</small></small></span>
            <div class="icon">
              <i class="fas  fa-power-off"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



