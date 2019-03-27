<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php 
$to 	= Input::get('to');
$from  	= Input::get('from');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap CSS-->
	<link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table width="100%" border="1" cellspacing="1" cellpadding="3" align="center">
					<tbody>
						<tr>
							<td colspan="6" align="center"><strong>STI West Negros Univerisity</strong><br/>
								Burgos Street, Bacolod City<br/>
								<b>Resources Reports</b>
								<br/>
								For the month ended <?php echo readableDate(Input::get('from')); ?> - <?php echo readableDate(Input::get('to')); ?><br/>
							</p>
						</td>
					</tr>
					<tr>
						<td colspan="6">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" valign="middle"><strong>ID #</strong></td>
						<td align="center" valign="middle"><strong>Date</strong></td>
						<td align="center" valign="middle"><strong>Laboratory</strong></td>
						<td align="center" valign="middle"><strong>Resources Need</strong></td>
						<td align="center" valign="middle"><strong>Note</strong></td>
						<td align="center" valign="middle"><strong>Requestor Name</strong></td>
					</tr>
					<?php $count = 1; ?>
					<?php foreach ( ResourcesRequest::findBetweenDate($from,$to) as $resources ): ?>
						<tr>
							<td style="text-align: center;"><?php echo $count; ?></td>
							<td style="text-align: center;" ><?php echo readableDate($resources->getDate()); ?></td>
							<td style="text-align: center;" ><?php echo $resources->laboratory(); ?></td>
							<td style="text-align: center;" ><?php echo $resources->getPeripherals(); ?></td>
							<td style="text-align: center;" ><?php echo $resources->getNote(); ?></td>
							<td style="text-align: center;" ><?php echo $resources->teacherName(); ?></td>
						</tr>
						<?php $count++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	     window.print();
       setTimeout('closePrint()', 500);
       function closePrint() {
           document.location.href = '../index.php?page=reports'
       }
</script>
</body>
</html>
