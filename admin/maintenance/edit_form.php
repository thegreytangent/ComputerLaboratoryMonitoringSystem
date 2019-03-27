<?php $maintenance = Maintenance::find_by_id(Input::get('id')); ?>
<?php $students = StudentAssistance::find_by_id($maintenance->getStudentAssisId()); ?>
<section class="statistic statistic2">
    <form id="maintenance_form">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1>Update Maintenance Log Form</h1>
        </div>
    </div>
    <br>
    <hr>
    <div class="container">
        <!-- This is row -->
        
        <div class="row col-lg-12">
            <!-- first row -->
            <div class="col-lg-6">
                <div class="row form-group col-lg-12">
                    <div class="col-lg-4">
                        <label for="select" class=" form-control-label">Date:</label>
                    </div>
                    <div class="col-lg-8">
                        <input class="form-control" value="<?php echo $maintenance->getDate(); ?>" type="date" name="Date" required>
                    </div>
                </div>
            </div>
            <!-- end of first row -->
            <!-- new row -->
            <div class="col-lg-6">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label class=" form-control-label">Issue:</label>
                    </div>
                    <div class="col col-md-8">
                        <select name="Issue" id="Issue" class="form-control" required>
                            <option value="">Select Issue</option>
                            <?php foreach (issues() as $code => $issue): ?>
                                <option value="<?php echo $code; ?>"><?php echo $issue; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end of new row -->
        </div>
        <!-- This is end row -->
        <!-- This is row -->
        <div class="row col-lg-12">
            <!-- first row -->
            <div class="col-lg-6">
                <div class="row form-group col-lg-12">
                    <div class="col-lg-4">
                        <label for="select" class=" form-control-label">Select SA Name:</label>
                    </div>
                    <div class="col-lg-8">
                        <select name="StudentAssisId" id="StudentAssisId" class="form-control" required>
                            <option value="<?php echo $students->getId(); ?>"><?php echo $students->completeName() ?></option>
                            <?php foreach (StudentAssistance::find_all() as $student ): ?>
                                <option value="<?php echo $student->getId(); ?>"><?php echo $student->completeName(); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end of first row -->
            <!-- new row -->
            <div class="col-lg-6">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label class=" form-control-label">Select Issued Device:</label>
                    </div>
                    <div class="col col-md-4">
                        <select name="IssueDeviceName" class="select form-control" data-live-search="true">
                            <option value="<?php echo $maintenance->getIssueDeviceName(); ?>"><?php echo $maintenance->getIssueDeviceName(); ?></option>
                            <option value="Monitor">Monitor</option>
                            <option value="Keyboard">Keyboard</option>
                            <option value="Mouse">Mouse</option>
                            <option value="AVR">AVR</option>
                            <option value="Ram">Ram</option>
                            <option value="HardDrive">HardDrive</option>
                        </select>
                    </div>
                    <div class="col col-md-4">
                        <input class="form-control" value="<?php echo $maintenance->getIssueDeviceSerial(); ?>" type="text" placeholder="Serial Number" id="IssueDeviceSerial" name="IssueDeviceSerial">
                    </div>
                </div>
            </div>
            <!-- end of new row -->
        </div>
        <!-- This is end row -->
        <!-- This is row -->
        <div class="row col-lg-12">
            <!-- first row -->
            <div class="col-lg-6">
                <div class="row form-group col-lg-12">
                    <div class="col-lg-4">
                        <label for="select" class=" form-control-label">Select Laboratory:</label>
                    </div>
                    <div class="col-lg-8">
                        <select name="Lab" id="Lab" class="form-control">
                            <option value="0">Please select</option>
                            <option value="lab1">ComLab1</option>
                            <option value="lab2">ComLab2</option>
                            <option value="lab3">ComLab3</option>
                            <option value="lab4">ComLab4</option>
                            <option value="lab5">ComLab5</option>
                            <option value="lab6">ComLab6</option>
                            <option value="lab7">ComLab7</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end of first row -->
            <!-- new row -->
            <div class="col-lg-6">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label class=" form-control-label">Action Taken:</label>
                    </div>
                    <div class="col col-md-8">
                        <select name="ActionTaken" id="ActionTaken" class="form-control">
                            <option value="">Please select</option>
                            <option value="basicFixing">Basic Fixing</option>
                            <option value="reassembled">Reassembled</option>
                            <option value="Cleaned">Cleaned</option>
                            <option value="replaced">Replaced</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end of new row -->
        </div>
        <!-- This is end row -->
        <!-- This is row -->
        <div class="row col-lg-12">
            <!-- first row -->
            <div class="col-lg-6">
                <div class="row form-group col-lg-12">
                    <div class="col-lg-4">
                        <label for="select" class=" form-control-label">Select Unit/s:</label>
                    </div>
                    <div class="col col-md-8">
                        <select name="Units" class="form-control">
                            <option value="">Please select</option>
                            <?php for ($x = 1; $x <= 40; $x++) : ?>
                                <option value="<?php echo $x; ?>">PC-<?php echo $x;?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end of first row -->
            <!-- new row -->
            <div class="col-lg-6">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label class=" form-control-label">New Device Info:</label>
                    </div>
                    <div class="col col-md-4">
                        <select name="PeripheralsId" disabled id="PeripheralsId" class="select form-control" data-live-search="true">
                            <option value="">Select Brand</option>
                            <?php foreach (Peripherals::find_all() as $parts): ?>
                            <option value="<?php echo $parts->getId(); ?>"><?php echo $parts->getBrand(); ?></option>
                        <?php endforeach; ?>
                           
                        </select>
                    </div>
                    <div class="col col-md-4">
                        <input disabled id="PeripherlasSerial" class="form-control" type="text" placeholder="Serial Number" name="PeripherlasSerial">
                    </div>
                </div>
            </div>
            <!-- end of new row -->
        </div>
        <!-- This is end row -->
        <hr>
        <!-- This is row -->
        <div class="row col-lg-12" align="center">
            <!-- first row -->
            <div class="col-lg-12">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="row form-group justify-content-center">
                            <div class="col-lg-12">
                                <h3 for="textarea-input"  class=" form-control-label">Remarks!</h3>
                            </div>
                            <div class="col-lg-5">
                                <textarea name="Remarks" id="Remarks" rows="3" placeholder="Note..." class="form-control"></textarea>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-success btn-sm">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- This is end row -->
    </div>
    </form>
</section>
<!-- END Laboratory PC-->
<!-- COPYRIGHT-->
<section class="p-t-60 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END COPYRIGHT-->

<script src="maintenance/script.js"></script>
