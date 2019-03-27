var request_assistance_notifArray = [];
var resources_notifArray = [];
var complaint_notifArray = [];



$(document).on('submit','#request_assistance_form',function(){
  $.ajax({
    url: 'dashboard/requestAssistanceReply.php',
    data:$(this).serialize(),
    success:function(res){
      if (res == 1){
        alert("Message sent!");
        $('#requestAssistanceModal').modal('hide');
        // location.reload();
      }
    }
  });
  return false;
});



$('.notif-bell').click(function(){
  var lab = $(this).attr('lab');

  $('#lab_id').val(lab);
  $.ajax({
    url: 'dashboard/requestAssistancegetInfo.php',
    method: 'POST',
    dataType:'json',
    data: {lab:lab},
    success:function(data){

      if (data == null || data == "")
      {
        $('.respondBtn').attr('disabled','true');
      } else {

        $('.respondBtn').removeAttr('disabled');
        $('#requestTeacherName').text(data.teachername);
        $('#requestMessage').html(data.message);
        $('#request_assistanceId').val(data.requestId);
      }
    }
  });
  $('#requestAssistanceModal').modal('show');
});



$('.requestAlert').click(function(){
  $('#assistanceModal').modal('show');
  $.ajax({
    url: 'dashboard/get.php',
    dataType:'json',
    data:{id:$(this).attr('id')},
    success:function(data){
      $('#textarea-input').val(data.Message);
    }
  });
  return false;
});


$('#assistanceModal').on('hidden.bs.modal', function () {
 location.reload();
})

function checkRequestAssistance(data) {
  $('.notif-bell').removeClass('has-noti');

  if (!jQuery.isEmptyObject(data.request)){
    $.map(data.request,function(lab){


      $('.'+lab+'-notif-bell').addClass('has-noti');
      request_assistance_notifArray.push(lab);

      
    });
  }
}


function checkUnitOnline(data)
{
  if ( jQuery.isEmptyObject(data) ) {
    $('.lab_status').removeClass('bg-success').addClass('bg-secondary');
    $('.text_status').html("").html("STATUS: OFFLINE");
    $('.teacher-lab').html("");

  } else {
    $.map(data,function(i){
      $('.'+i.lab+'').removeClass('bg-secondary').addClass('bg-success');
      $('.'+i.lab+'_status').html("").html("STATUS: ONLINE");
      $('#teacher-'+i.lab).html("").html(i.teacher);
    });
  }
}


function hasResources(lab) {
 $('.notif-socket').removeClass('has-noti');
 $.map(lab,function(a){
  if (a) {
    $('.notif-socket-'+a).addClass('has-noti');
  }
})
}



$('.notif-socket').click(function(){
  $.ajax({
    url: 'dashboard/getResourceInfo.php',
    method: 'POST',
    data:{lab:$(this).attr('lab')},
    dataType: 'json',
    success:function(data){
      disabledRequestReplyBtn(data);
      clearRequestResourcesModal();
      $('#requestResourcesId').val(data.id);
      $('#requestResourcesLab').val(data.lab);
      $('#requestResourcesTeacher').html(data.teacher);
      $('#requestResourcesNote').html(data.note);
      $('#requestResourcesNeed').html(data.peripherals);
      $('#resources').modal('show');
    }
  });
});




$('#requestReplyModalForm').submit(function(){
  $.ajax({
    url: 'dashboard/requestAssistanceReplyAdd.php',
    type: 'POST',
    data: $(this).serialize(),
    success:function(res){
      if (res == 1) {
        alert("Request has been sent!");
        $('#resources').modal('hide');
        location.reload();
      }
    }
  });
  return false;
});



function disabledRequestReplyBtn(data)
{
 if (jQuery.isEmptyObject(data)){
  $('#RequestReplyBtn').attr('disabled','true');
}else {
  $('#RequestReplyBtn').removeAttr('disabled');
}
}



function clearRequestResourcesModal()
{
  $('#message').html("");
  $('#requestResourcesId').val("");
  $('#requestResourcesLab').val("");
  $('#requestResourcesTeacher').html("");
  $('#requestResourcesNote').html("");
  $('#requestResourcesNeed').html("");
}


$('.notif-paper').click(function(){
 if ($(this).hasClass('has-noti')){
  var lab = $(this).attr('lab');
  window.location = '?page=complaint&lab='+lab;
}

});



function hasComplaint(lab) {
  $('.notif-paper').removeClass('has-noti');
  $.map(lab,function(a){
    if (a) {
// audio.play();
$('.notif-paper-'+a).addClass('has-noti');
push_data(complaint_notifArray,a);
}
})
}


function checkNotification() {
  $.ajax({
    url: 'dashboard/check.php',
    dataType: 'json',
    success:function(data) {

      $.map(data.request,function(a) {

        if (!request_assistance_notifArray.indexOf(a)) {
          audio.play();
        }
      })

       


        $.map(!data.resources,function(a) {
        if (resources_notifArray.indexOf(a)) {
          audio.play();
        }
      })

      


      $.map(data.complaint,function(a) {

      })


      checkRequestAssistance(data);
      hasComplaint(data.complaint);
      hasResources(data.resources);
      checkUnitOnline(data);


    }
  });
}



function push_data(array,data)
{
  if(array.indexOf(data) == -1){
  array.push(data);
}
}




setInterval(function(){checkNotification();}, 2000);
