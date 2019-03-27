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
							<td colspan="7" align="center"><strong>STI West Negros Univerisity</strong><br/>
								Burgos Street, Bacolod City<br/>
								Maintenance Reports<br/>
								For the month ended <?php echo readableDate(Input::get('from')); ?> - <?php echo readableDate(Input::get('to')); ?><br/>
							</p>
						</td>
					</tr>
					<tr>
						<td width="44" colspan="7">&nbsp;</td>
					</tr>
					<tr>
						<td align="center" valign="middle"><strong>Id</strong></td>
						<td align="center" valign="middle"><strong>Date</strong></td>
						<td align="center" valign="middle"><strong>SA Name</strong></td>
						<td align="center" valign="middle"><strong>Laboratory</strong></td>
						<td align="center" valign="middle"><strong>PC Number</strong></td>
						<td align="center" valign="middle"><strong>Issue</strong></td>
						<td align="center" valign="middle"><strong>Action Taken</strong></td>
					</tr>
					      <tbody>
                            <?php $count = 1; ?>
                            <?php foreach (Maintenance::find_all() as $maintenance): ?>
                                <?php $student = StudentAssistance::find_by_id($maintenance->getStudentAssisId()); ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $count; ?></td>
                                    <td style="text-align: center;"><?php echo readableDate($maintenance->getDate()); ?></td>
                                    <td style="text-align: center;"><?php echo $student->completeName() ?></td>
                                    <td style="text-align: center;"><?php echo laboratory($maintenance->getLab()); ?></td>
                                    <td style="text-align: center;">Unit # <?php echo $maintenance->getUnits() ?></td>
                                    <td style="text-align: center;"><?php echo $maintenance->issue(); ?></td>
                                    <td style="text-align: center;"><?php echo $maintenance->getActionTaken(); ?></td>
                                   
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
