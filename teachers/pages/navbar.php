

<header class="header-desktop3 d-none d-lg-block">
  <div class="section__content section__content--p35">
    <div class="header3-wrap">
      <div class="header__logo">
        <h2>
          <a href="?page=dashboard&lab=<?php echo Input::get('lab'); ?>" class="text-info">
            <img src="logo-mini.png" alt="CoolAdmin"/>&nbsp;L&nbsp;A&nbsp;M&nbsp;S
          </a>
        </h2>
      </div>
      <div class="header__navbar">
        <ul class="list-unstyled">
          <li>
            <a href="?page=notifications&lab=<?php echo Input::get('lab'); ?>" class="teacherNotif">
              <i class="zmdi zmdi-info-outline"></i>
              <span class="bot-line"></span>Notifications</a>
            </li>
            <li>
              <a href="#" data-toggle="modal" data-target="#assistform">
                <i class="zmdi zmdi-alert-polygon"></i>
                <span class="bot-line"></span>Assistance Alert</a>
              </li>
              <li>
                <a href="#" data-toggle="modal" data-target="#sourceform">
                  <i class="zmdi zmdi-border-color"></i>
                  <span class="bot-line"></span>Request Resources</a>
                </li>
                <li>
                  <a href="#" data-toggle="modal" data-target="#complaintform">
                    <i class="zmdi zmdi-file-text"></i>
                    <span class="bot-line"></span>Complaint Form</a>
                  </li>
                </ul>
              </div>
              <div class="header__tool">
                <div class="header-button-item" data-toggle="modal" data-target="#myhelp">
                  <i class="fa fa-question-circle text-info"></i>
                </div>
                <div class="account-wrap">
                  <div class="mine account-item account-item--style2 clearfix js-item-menu">
                    <div class="content">
                      <a class="js-acc-btn" href="#">Teacher</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                      <div class="info clearfix">
                        <div class="content">
                          <h5 class="name"><?php echo $teacher_login->teacherName(); ?>
                          </h5>
                          <hr>
                          <span><small>ID Number:&nbsp;&nbsp;
                            <?php echo $teacher_login->getAuthorization(); ?>
                          </small></span><hr>
                          <span><small>Department:&nbsp;&nbsp;
                            <?php echo $teacher_login->getDepartment(); ?>
                          </small></span><hr>
                        </div>
                      </div>
                      <div class="account-dropdown__footer">
                        <a href="?page=password&lab=<?php echo Input::get('lab'); ?>">
                          <i class="fa fa-gears (alias)"></i>Change Password
                        </a>
                      </div>
                      <div class="account-dropdown__footer">
                        <a href="../login/teacher_logout.php">
                          <i class="fa fa-share"></i>Logout
                        </a>
                      </div>
                      <!-- <div class="account-dropdown__footer">
                        <a href="shutdown.php">
                          <i class="zmdi zmdi-power"></i>Shutdown
                        </a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>

        <!-- Addddddddddd SSSSSSSSSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
        <div class="modal fade" id="myhelp" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="card-body">
                <div class="card-title">
                  <h3 class="text-center title-2">Teachers Manual</h3>
                </div>
                <hr>
                <br>
                <h4>How to send notification alert</h4>
                <label>Click "Assistance Alert" for immidiate assistance, then click submit or add message if wanted.</label><hr>
                <h4>How to report defective units or complain issues</h4>
                <label>Click "Complaint Form" to report any defective units or wanted to complain any issue inside laboratory room, Then Select Devices, date and PC number and its condition or status of the issued unit. Add message if there is any complains</label><hr>
                <h4>How to request computer resources</h4>
                <label>And if you need some computer resource that wanted to be installed in computer laboratory to use, just click “Request Resources” to report the needs in computer laboratory.</label>
                <hr>
                <h4>How to log out or change password</h4>
                <label>At upper right corner click "teacher" to expand its features and select change password to change password, log out to log out in system and shutdown to directly shutdown the computer</label>
                <hr>
                <!-- <div class="row col-md-12 justify-content-center">
                <div class="col-md-6">
                <button id="payment-button" type="submit" class="btn btn-md btn-success btn-block">
                <i class="fa fa-plus fa-md"></i>&nbsp;
                <span id="payment-button-amount">OK</span>
              </button>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Addddddddddd SSSSSSSSSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
