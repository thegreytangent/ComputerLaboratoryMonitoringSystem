 $('.btnIssueDelete').click(function(){
 	var id = $(this).attr('id');
 	$.ajax({
 		url: 'maintenance/crud.php',
 		method:'post',
 		data: {id:id,action:'delete'},
 		dataType: 'json',
 		success:function(data){
 			if (data.res == 1) {
 				alert("Data has been deleted");
 				window.location = '?page=Maintenance_log';
 			}
 		}
 	});
 });



 $('select[name=ActionTaken]').on('change', function() {
 	if (this.value == 'replaced') 
 	{
 		$('#PeripherlasSerial,#PeripheralsId').removeAttr('disabled');
 	} else {
 		$('#PeripherlasSerial,#PeripheralsId').attr('disabled',true);
 	}
 });


 $('#maintenance_form').submit(function(){ maintenance('add'); return false; });


 function maintenance(action)
 {
 	$.ajax({
 		url: 'maintenance/crud.php',
 		method:'post',
 		data: $('#maintenance_form').serialize()+'&action='+action+'',
 		dataType: 'json',
 		success:function(data){
 			if (data.res == 1) {
 				alert("Data has been inserted");
 				window.location = '?page=Maintenance_log';
 			}
 		}
 	});
 }
