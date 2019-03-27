$('.complaintOkBtn').click(function(){	

	var id = $(this).attr('id');

	if (confirm('Already read the complain?')) {
		$.ajax({
			url: 'complaint/crud.php',
			data:{id:id,action:'update_status'},
			method: 'POST',
			dataType: 'JSON',
			success:function(res){
				if (res.status == 1) {
					location.reload();
				}
			}
		});
	}




});
