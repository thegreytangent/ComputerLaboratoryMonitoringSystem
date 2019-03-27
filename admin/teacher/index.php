<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="title-5 m-b-35">Teacher List</h3>
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
                            <th>School Year</th>
                            <th>Semester</th>
                            <th>ID Number</th>
                            <th>Teacher Name</th>
                            <th>Deparment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count =1; ?>
                        <?php foreach ( Teachers::find_all() as $teacher ): ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $teacher->schoolYear(); ?></td>
                            <td><?php echo $teacher->semester(); ?></td>
                            <td><?php echo $teacher->getAuthorization(); ?></td>
                            <td><?php echo $teacher->teacherName(); ?></td>
                            <td><?php echo $teacher->getDepartment(); ?></td>
                            <td>
                                 <button class="btn btn-warning btn-sm btn_teacherReset" id="<?php echo $teacher->getId(); ?>">Reset</button>
                                 <button class="btn btn-info btn-sm btn_teacherEdit" id="<?php echo $teacher->getId(); ?>">Edit</button>
                                 <?php if (Session::exists('admin')): ?>
                                 <button class="btn btn-danger btn-sm btn_teacherDelete" id="<?php echo $teacher->getId(); ?>">Delete</button>
                                <?php endif; ?>
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

<?php require_once 'teacher/modal_edit.php'; ?>



<script type="text/javascript" src="teacher/script.js"></script>
