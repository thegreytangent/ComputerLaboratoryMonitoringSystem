<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
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
								Laboratory Reports<br/>
								For the month ended <?php echo readableDate(Input::get('from')); ?> - <?php echo readableDate(Input::get('to')); ?><br/>
							</p>
						</td>
					</tr>
					<tr>
						<td width="44">&nbsp;</td>
						<td width="100">&nbsp;</td>
						<td width="119">&nbsp;</td>
						<td width="108">&nbsp;</td>
						<td width="216">&nbsp;</td>
						<td width="193">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" valign="middle"><strong>Id</strong></td>
						<td align="center" valign="middle"><strong>Date</strong></td>
						<td align="center" valign="middle"><strong>Unit #</strong></td>
						<td align="center" valign="middle"><strong>Unit Device</strong></td>
						<td align="center" valign="middle"><strong>Note</strong></td>
						<td align="center" valign="middle"><strong>Complainant Name</strong></td>
					</tr>
					<?php $count = 1; ?>
					<?php foreach ( Complaint::findBetweenDate(Input::get('from'),Input::get('to')) as $complaint ): ?>
					<tr>
						<td style="text-align: center"><?php echo $count; ?></td>
						<td style="text-align: center; width:20%;"><?php echo readableDate($complaint->getDate()); ?></td>
						<td style="text-align:center;">Unit #: <?php echo $complaint->getPCNum(); ?></td>
						<td style="text-align:center;"><?php echo $complaint->getParts(); ?></td>
						<td style="text-align:center; width:30%;"><?php echo $complaint->getConcerns(); ?></td>
						<td style="text-align:center;"><?php echo $complaint->complaintName(); ?></td>
					</tr>	
					<?php $count++; ?>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
	     window.print();
       setTimeout('closePrint()', 500);
       function closePrint() {
           document.location.href = '../index.php?page=reports'
       }
</script>
</html>
