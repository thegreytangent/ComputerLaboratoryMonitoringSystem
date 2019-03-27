<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="title-5 m-b-35">Student Assistant List</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-12">
      <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
          <thead>
            <tr>
              <th>Id Number</th>
              <th>School Year</th>
              <th>Semester</th>
              <th>S.A Name</th>
              <th style="text-align: center;">Rating</th>
              <th>Assign Lab</th>
              <th>Day</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php $count = 1; ?>
            <?php foreach (StudentAssistance::find_all() as $sa): ?>
              <tr>
                <td><?php echo $sa->getIdNumber(); ?></td>
                <td><?php echo $sa->schoolYear(); ?></td>
                <td><?php echo $sa->semester(); ?></td>
                <td><?php echo $sa->completeName(); ?></td>
                <td style="text-align: center;"><?php echo $sa->averageRating(); ?></td>
                <td><?php echo $sa->getAssignLab(); ?></td>
                <td><?php echo $sa->getMaintenanceSchedule(); ?></td>
                <td>
                  <button class="btn btn-sm btn-info btn-edit" id="<?php echo $sa->getId(); ?>">Edit</button>
                  <button class="btn btn-sm btn-danger btn-delete" id="<?php echo $sa->getId(); ?>">Delete</button>
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

<?php require_once 'student_assistance/edit_modal.php'; ?>
<script type="text/javascript">
$(document).ready(function(){

  $('.btn-delete').click(function(){
    var id = $(this).attr('id');
    if (confirm('Do you want to delete this data?')) {
      $.ajax({
        url: 'student_assistance/delete.php',
        data: {id:id},
        dataType: 'json',
        success:function(data) {
          if (data.res == 1) {
            alert("Data has been deleted!");
            location.reload();
          }
        }
      });
    }

    return false;
  });

  $('.btn-edit').click(function(){
    var id = $(this).attr('id');
    $('#edit_modal').modal('show');

    $.ajax({
      url: 'student_assistance/get.php',
      data: {id:id},
      dataType: 'json',
      success:function(data) {
        $('#yearStarted').val(data.yearStarted);
        $('#yearEnded').val(data.yearEnded);
        $('#firstname').val(data.firstname);
        $('#lastname').val(data.lastname);
        $('#id_number').val(data.idNumber);
        $('#id').val(data.id);
        LabList(data);
        semester(data);
        shedule(data);
      }
    });
  });

  function semester(data)
  {
    $('#semester').html("");
    $.each(data.semester,function(a,b){
      $('#semester').append(`<option value="${a}">${b}</option>`);
    });
    $.each(data.semList,function(a,b){
      $('#semester').append(`<option value="${a}">${b}</option>`);
    });
  }

  function shedule(data)
  {
    $('#daySchedule').html("");

    $('#daySchedule').append(`<option value="${data.maintenanceSched}">${data.maintenanceSched}</option>`);

    $.map(data.sheduleList,function(a){
      $('#daySchedule').append(`<option value="${a}">${a}</option>`);
    });
  }

  function LabList(data)
  {
    $('#lab').html("");
    $.each(data.assignLab,function(a,b){
      $('#lab').append(`<option value="${a}">${b}</option>`);
    });
    $.each(data.comLabList,function(a,b){
      $('#lab').append(`<option value="${a}">${b}</option>`);
    });
  }

  $('#updateAssistanceForm').submit(function(){
    $.ajax({
      url: 'student_assistance/update.php',
      method: 'post',
      data: $(this).serialize(),
      success:function(res){
        if (res == 1) {
          location.reload();
        }
      }
    });
    return false;
  });






});
</script>
