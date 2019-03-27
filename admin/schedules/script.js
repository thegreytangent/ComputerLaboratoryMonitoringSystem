$('.SABtnClick').click(function(){
	var tmpId 	= $(this).attr('tmpId');
	var day 		= $(this).attr('day');
	var student = $(this).attr('student');
	var tm 			= $(this).attr('tm');
	var time 		= $(this).attr('id');
	// $(this).removeClass('btn-outline-success').addClass('btn-success');
	$(this).toggleClass('btn-outline-danger').toggleClass( 'btn-success');

	if ($(this).hasClass('btn-outline-danger')) {
		$('#schedule_text_'+tmpId+'_'+day+'').html("Unavailable");
	} else {
		$('#schedule_text_'+tmpId+'_'+day+'').html("Available");
	}

	

	if ($(this).hasClass('btn-outline-danger')) {
		$('#schedule_text_pm_'+tmpId+'_'+day+'').html("Unavailable");
	} else {
		$('#schedule_text_pm_'+tmpId+'_'+day+'').html("Available");
	}



	$.ajax({
		url: 'schedules/crud.php',
		method: 'POST',
		data:{day:day,student:student,tm:tm,time:time},
		dataType: 'json',
		success:function(data){
		}
	});
});
