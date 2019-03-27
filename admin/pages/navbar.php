<!----------------------- HEADER DESKTOP----------------------------------------------------------->
<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo"><h2>
                <a href="index.php" class="text-info">
                    <img src="../images/icon/logo-mini.png" alt="CoolAdmin"/>&nbsp;L&nbsp;A&nbsp;M&nbsp;S
                </a></h2>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    <li>
                        <a href="?page=management">
                            <i class="fas fa-trophy"></i>
                            <span class="bot-line"></span>Management</a>
                        </li>
                        <li>
                            <a href="?page=schedules">
                                <i class="fas fa-trophy"></i>
                                <span class="bot-line"></span>SA Schedules</a>
                            </li>
                            <?php  if (Session::exists('admin')) : ?>
                                <li>
                                    <a href="?page=reports">
                                        <i class="fas fa-trophy"></i>
                                        <span class="bot-line"></span>Comlab Reports</a>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <a href="?page=logs">
                                        <i class="fas fa-users"></i>
                                        <span class="bot-line"></span>User Logs</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header__tool">
                                &nbsp;&nbsp;
                                <div class="header-button-item" data-toggle="modal" data-target="#myhelp">
                                    <i class="fa fa-question-circle text-info"></i>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item defaultcursor account-item--style2 clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo Session::showPosition(); ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name"><?php 
                                                    if (Session::exists('admin')) {
                                                        echo Session::showPosition();
                                                    } else {
                                                        echo $userLogin->completeName();
                                                    }
                                                    ?></h5>
                                                    <?php if (!Session::exists('admin')): ?>
                                                     <hr>
                                                     <span><small>ID Number:&nbsp;&nbsp;
                                                         <?php echo $userLogin->getIdNumber(); ?>                        </small></span><hr>
                                                         <span>
                                                         </span>
                                                         <!-- <hr> -->
                                                     <?php endif; ?>
                                                    
                                                     </div>
                                                 </div>
                                                 <div class="account-dropdown__footer">
                                                    <?php if (Session::exists('admin')): ?>
                                                        <a href="?page=change-username">
                                                            <i class="fa fa-share"></i>Change Username
                                                        </a>
                                                    <?php endif; ?>
                                                    <a href="?page=change-password">
                                                        <i class="fa fa-share"></i>Change Password
                                                    </a>
                                                    <a href="auth/logout.php">
                                                        <i class="fa fa-share"></i>Logout
                                                    </a>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="shutdown.php">
                                                        <i class="zmdi zmdi-power"></i>Shutdown</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!----------------------- END HEADER -->
                        <!-- Addddddddddd SSSSSSSSSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
                        <div class="modal fade" id="myhelp" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Administrator Guide</h3>
                                        </div>
                                        <hr>
                                        <br>
                                        <h4>How monitoring box works?</h4>
                                        <label>If the teacher is online the status will labaled "ONLINE" and teacher name will appear in "TEACHER" and the background color of monitor box will turn
                                        green. Also By clicking the monitor box will send you to a seatplan of selected laboratory. Click the any PC unit to identify its brand and serialnumber.</label><hr>
                                        <h4>How to add SA accounts or Teacher accounts and Add new Brand?</h4>
                                        <label>Click "Management" in upper corner to open the designated page, Click box with "ADD " to add accounts or click with a word "List" in box to view it's list. Peripheral Brands to add new branded unit parts.</label><hr>
                                        <h4>What is SA Schedules?</h4>
                                        <label>SA schedules is a list of Student Assistant's Schedules in where you will able to identify who's Assigned in each laboratory for maintenance. Also to view and edit SA duty time.</label>
                                        <hr>
                                        <h4>How to view reports?</h4>
                                        <label>Click ComLab Reports to view the reports and select which report you wanted to view and print it.</label>
                                        <hr>
                                        <h4>How to identify who created reports? who logged in?</h4>
                                        <label>Click User Logs to View the list of users who created reports and the  time-in time-out of each user.</label>
                                        <hr>
                                        <h4>How to log out?</h4>
                                        <label>At upper right corner click "Administrator" to expand its features and select "Log out" to log out in the system, "accounts" to manage user accounts and its list, "Shutdown" to shutdown the computer</label>
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
