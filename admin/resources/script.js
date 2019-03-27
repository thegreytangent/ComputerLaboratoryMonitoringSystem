$("#resources_form").submit(function(){
	$.ajax({
		url: 'resources/crud.php',
		method: 'post',
		data: $(this).serialize()+'&action=add',
		dataType: 'json',
		success:function(res){
			if (res == 1) {
				alert("your data has been added!");
				location.reload();
			}
		}
	});
	return false;
});


$('.resourcesBtnDelete').click(function(){
	var id = $(this).attr('id');

	if (confirm('Do you want do delete this data?')) {
	$.ajax({
		url: 'resources/crud.php',
		method: 'post',
		data:{id:id,action:'delete'},
		dataType: 'json',
		success:function(res){
			if (res == 1) {
				location.reload();
			}
		}
	});
	}






});
