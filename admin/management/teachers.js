$(document).on('submit','#studentAssistanceForm',function(){

   $.ajax({
      url: 'management/studentAssistanceAdd.php',
      method:'POST',
      data:$(this).serialize(),
      success:function(res){
         if (res == 1) {
            alert("Record has been added!");
            $('#studentAssistance').modal('hide');
            location.reload();
         }
      }
   });


  return false;
});


$(document).on('submit','#addTeacherForm',function(){
   $.ajax({
      url: 'management/teacher_add.php',
      method: 'POST',
      data: $(this).serialize(),
      success:function(res){
         if (res == 1)
         {
            alert("Teacher has been added");
            location.reload();
         }else if (res == -1) {
            alert("Teacher Authorization ID already exist!");
         }
      }
   });
   return false;
});
