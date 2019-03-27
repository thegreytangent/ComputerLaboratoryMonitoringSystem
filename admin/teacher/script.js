$('.btn_teacherReset').click(function(){
	var id = $(this).attr('id');
	if (confirm("Account password will be reset. Do you want to continue?")) {
		$.ajax({
			url: 'teacher/reset_password.php',
			data:{id:id},
			dataType: 'JSON',
			success:function(data){
				if (data.res == 1) {
					alert("Account Password has been reset!");
					location.reload();
				}

			}
		});
	}
});

$('.btn_teacherEdit').click(function(){
	var id = $(this).attr('id');
	$.ajax({
		url: 'teacher/fetch.php',
		data:{id:id},
		dataType: 'JSON',
		success:function(data){
			get(data);
		}
	});
	$('#modal_edit').modal('show');
});


$('.btn_teacherDelete').click(function() {
	var id = $(this).attr('id');
	if (confirm('Do you want to delete this record?')) {

		$.ajax({
			url: 'teacher/delete.php',
			data:{id:id},
			dataType: 'JSON',
			success:function(data){
				if( data.res == 1 ) {
					alert("Data has been deleted!");
					location.reload();
				}
			}
		});
	}

	


});

$('#updateTeacherForm').submit(function(){
	$.ajax({
		url: 'teacher/update.php',
		method: 'POST',
		dataType: 'json',
		data:$(this).serialize(),
		success:function(data){
			if( data.res == 1 ) {
				alert("Data has been updated!");
				location.reload();
			}
		}
	});
	return false;
});


function get(data)
{
	$('#id').val(data.id);	
	$('#yearStarted').val(data.started);
	$('#yearEnded').val(data.ended);
	$('#firstname').val(data.firstname);
	$('#lastname').val(data.lastname);
	$('#authorization').val(data.authorization);
	$('#department').html("").append('<option value='+data.department+'>'+data.department+'</option>');
	$.map(data.departmentList,function(dept_list){
		$('#department').append('<option value='+dept_list+'>'+dept_list+'</option>');
	});
	$.map(data.semester,function(a,b){
		$('#semester').html("").append('<option value='+a.code+'>'+a.sem+'</option>');
	});
	$.map(data.semesterList,function(a,b){
		$('#semester').append('<option value='+a.code+'>'+a.sem+'</option>');
	});
}

