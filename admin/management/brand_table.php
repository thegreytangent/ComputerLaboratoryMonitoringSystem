<?php  require_once '../../core/init.php'; ?>
<?php ob_clean(); ?>
<?php $count = 1; ?>
<?php foreach (Peripherals::find_by_array('PartsName',Input::get('partsName')) as $brand): ?>
	<tr>
		<td><?php echo $count; ?></td>
		<td><?php echo $brand->getBrand(); ?></td>
		
		<td>
			<button type="button" id="<?php echo $brand->getId(); ?>" class="btn btn-info btn-sm edit-brand-btn" data-toggle="modal">
				Edit
			</button>
			<button type="button" partsName="<?php echo $brand->getPartsName(); ?>" id="<?php echo $brand->getId(); ?>" class="btn btn-danger btn-sm btn-brand-delete" data-toggle="modal">
				Delete
			</button>
		</td>
	</tr>
	<?php $count++; ?>
	<?php endforeach;  ?>