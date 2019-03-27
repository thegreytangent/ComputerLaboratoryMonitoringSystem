<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php $count = 1; ?>
<?php foreach (Peripherals::selectAllGroupByPartsName() as $peripheral): ?>
	<tr>
		<td><?php echo $count; ?></td>
		<td><?php echo $peripheral->getPartsName(); ?></td>
		<td><?php echo count(Peripherals::find_by_array('PartsName',$peripheral->getPartsName())); ?></td>
		<td>
			<button type="button" partsName="<?php echo $peripheral->getPartsName(); ?>" class="btn btn-secondary btn-parts" data-toggle="modal">
				View
			</button>
		</td>
	</tr>
	<?php $count++; ?>
	<?php endforeach;  ?>