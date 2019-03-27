<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
$data = [];
// $get 					=  RequestAssistance::find_by_array('lab',Input::get('lab'))[0];
$get = RequestAssistance::findbyLabSeeDesc(Input::get('lab'),0)[0];


if ($get) {
	if (RequestAssistanceReply::find_by('RequestId',$get->getId())) {
			
		if (empty(RequestAssistanceRate::find_by('RequestReplyId',RequestAssistanceReply::find_by('RequestId',$get->getId())->getId()))) {
			
			$teacher 				= Teachers::find_by_id($get->getTeacherId());
			$data['requestId'] 		= $get->getId();
			$data['teachername']  	= $teacher->teacherName();
			$data['message']  		= $get->getMessage();
		}
	}else {
			$teacher 				= Teachers::find_by_id($get->getTeacherId());
			$data['requestId'] 		= $get->getId();
			$data['teachername']  	= $teacher->teacherName();
			$data['message']  		= $get->getMessage();

	}



} else {
	$data = null;
}




echo json_encode($data);

?>
