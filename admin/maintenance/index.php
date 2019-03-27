    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Management Logs</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-12">
                <a href="?page=maintenance_add_log" class="btn btn-success btn-mini"><i class="fa fa-plus"></i> Add Logs</a>
                <br><br>
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>SA Name</th>
                                <th>Laboratory</th>
                                <th>PC number</th>
                                <th>Issue</th>
                                <th>Action Taken</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; ?>
                            <?php foreach (Maintenance::find_all() as $maintenance): ?>
                                <?php $student = StudentAssistance::find_by_id($maintenance->getStudentAssisId()); ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo readableDate($maintenance->getDate()); ?></td>
                                    <td><?php echo $student->completeName() ?></td>
                                    <td><?php echo laboratory($maintenance->getLab()); ?></td>
                                    <td>Unit # <?php echo $maintenance->getUnits() ?></td>
                                    <td><?php echo $maintenance->issue(); ?></td>
                                    <td><?php echo $maintenance->getActionTaken(); ?></td>
                                    <td>
                                        <!-- <a href="?page=maintenance_edit_log&id=<?php echo $maintenance->getId(); ?>" class="btn btn-info btn-mini">Edit</a> -->
                                        <button class="btn btn-danger btn-mini btnIssueDelete" id="<?php echo $maintenance->getId(); ?>">Delete</button>
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
<script src="maintenance/script.js"></script>
