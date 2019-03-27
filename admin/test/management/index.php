        <section class="statistic statistic2">
            <div class="container">
                <div class="row col-lg-12">
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item bg-info" style="cursor: pointer;" data-toggle="modal" data-target="#studentAssistance">
                            <h2 class="number">ADD<br>Student Assistant(SA)</h2>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <a href="?page=studentAssistance">
                            <div class="statistic__item bg-info" style="cursor: pointer;">
                                <h2 class="number">Student Assistant<br>List</h2>
                                <div class="icon">
                                    <i class="fa fa-list-alt"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item bg-info" style="cursor: pointer;" data-toggle="modal" data-target="#addteacher">
                            <h2 class="number">ADD<br>Teacher</h2>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item bg-info" style="cursor: pointer;" onclick="window.location.href='?page=teacher'">
                            <h2 class="number">Teacher Accounts<br>List</h2>
                            <div class="icon">
                                <i class="fa fa-list-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item bg-info" style="cursor: pointer;" onclick="window.location.href='?page=parts'">
                            <h2 class="number">Peripheral<br>Brands</h2>
                            <div class="icon">
                                <i class="fa fa-gears (alias)"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item bg-info" style="cursor: pointer;" onclick="window.location.href='?page=parts'">
                            <h2 class="number">Laboratory<br>Resources</h2>
                            <div class="icon">
                                <i class="fa fa-gears (alias)"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item bg-info" style="cursor: pointer;" onclick="window.location.href='?page=parts'">
                            <h2 class="number">Maintenance Log<br>Form</h2>
                            <div class="icon">
                                <i class="fa fa-gears (alias)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once 'management/addteachmodal.php'; ?>
        <?php include 'management/studentAssistanceModal.php'; ?>



        <script type="text/javascript" src="management/teachers.js"></script>

