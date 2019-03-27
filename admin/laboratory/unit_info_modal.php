<div class="modal fade" id="unit_info_modal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<form id="unit_info_form">
				<div class="card-body">
					<div class="card-title">
						<h3 class="text-center title-2">Unit Information</h3>
					</div>
					<hr>
					<br>
					<div id="pc_id"></div>
					<div id="pc_lab"></div>
					<div class="row col-md-12 form-group">
						<div class="col-md-3">
							<label for="selectSm" class=" form-control-label">Monitor:</label>
						</div>
						<div class="col-md-4">

							<select name="unit_info[monitor][id]" id="Monitor_select"  class="form-control" required>
								<option value=""></option>
								<?php foreach (Peripherals::find_by_array('PartsName','Monitor') as $brand): ?>
									<option value="<?php echo $brand->getId(); ?>"><?php echo $brand->getBrand(); ?></option>
								<?php endforeach; ?>
							</select>

						</div>
						<div class="col-md-5">
							<input class="form-control" id="Monitor_serial" required type="text" placeholder="S/N"  name="unit_info[monitor][serial]">
							<input class="form-control" id="Monitor-UnitId" type="hidden" placeholder="S/N"  name="unit_info[monitor][UnitId]">
						</div>
					</div>
					<div class="row col-md-12 form-group">
						<div class="col-md-3">
							<label for="selectSm" class=" form-control-label">Keyboard:</label>
						</div>
						<div class="col-md-4">
							<select name="unit_info[Keyboard][id]" id="Keyboard_select"  class="form-control" required>
								<option value=""></option>
								<?php foreach (Peripherals::find_by_array('PartsName','Keyboard') as $brand): ?>
									<option value="<?php echo $brand->getId(); ?>"><?php echo $brand->getBrand(); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-md-5">
							<input class="form-control" id="Keyboard_serial" required type="text" placeholder="S/N"  name="unit_info[Keyboard][serial]">
							<input class="form-control" id="Keyboard-UnitId" type="hidden" placeholder="S/N"  name="unit_info[Keyboard][UnitId]">
						</div>
					</div>
					<div class="row col-md-12 form-group">
						<div class="col-md-3">
							<label for="selectSm" class=" form-control-label">Mouse:</label>
						</div>
						<div class="col-md-4">
							<select name="unit_info[mouse][id]" id="Mouse_select" class="form-control" required>
								<option value=""></option>
								<?php foreach (Peripherals::find_by_array('PartsName','Mouse') as $brand): ?>
									<option value="<?php echo $brand->getId(); ?>"><?php echo $brand->getBrand(); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-md-5">
							<input class="form-control" id="Mouse_serial" required type="text" placeholder="S/N"  name="unit_info[mouse][serial]">
							<input class="form-control" id="Mouse-UnitId" type="hidden" placeholder="S/N"  name="unit_info[mouse][UnitId]">
						</div>
					</div>
					<div class="row col-md-12 form-group">
						<div class="col-md-3">
							<label for="selectSm" class=" form-control-label">AVR:</label>
						</div>
						<div class="col-md-4">
							<select name="unit_info[avr][id]" id="AVR_select" class="form-control" required>
								<option value=""></option>
								<?php foreach (Peripherals::find_by_array('PartsName','AVR') as $brand): ?>
									<option value="<?php echo $brand->getId(); ?>"><?php echo $brand->getBrand(); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-md-5">
							<input class="form-control" id="AVR_serial" required type="text" placeholder="S/N"  name="unit_info[avr][serial]">
							<input class="form-control" id="AVR-UnitId" type="hidden" placeholder="S/N"  name="unit_info[avr][UnitId]">
						</div>
					</div>
					<div class="row col-md-12 form-group">
						<div class="col-md-3">
							<label for="selectSm" class=" form-control-label">Ram:</label>
						</div>
						<div class="col-md-4">
							<select name="unit_info[ram][id]" id="RAM_select" class="form-control" required>
								<option value=""></option>
								<?php foreach (Peripherals::find_by_array('PartsName','Ram') as $brand): ?>
									<option value="<?php echo $brand->getId(); ?>"><?php echo $brand->getBrand(); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-md-5">
							<input class="form-control" id="RAM_serial" required type="text" placeholder="S/N"  name="unit_info[ram][serial]">
							<input class="form-control" id="RAM-UnitId" type="hidden" placeholder="S/N"  name="unit_info[ram][UnitId]">
						</div>
					</div>
					<div class="row col-md-12 form-group">
						<div class="col-md-3">
							<label for="selectSm" class="form-control-label">Hard Drive:</label>
						</div>
						<div class="col-md-4">
							<select name="unit_info[hardrive][id]" id="Hardrive_select" class="form-control" required>
								<option value=""></option>
								<?php foreach (Peripherals::find_by_array('PartsName','Hardrive') as $brand): ?>
									<option value="<?php echo $brand->getId(); ?>"><?php echo $brand->getBrand(); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-md-5">
							<input class="form-control" id="Hardrive_serial" required type="text" placeholder="S/N"  name="unit_info[hardrive][serial]">
							<input class="form-control" id="Hardrive-UnitId" type="hidden" placeholder="S/N"  name="unit_info[hardrive][UnitId]">
						</div>
					</div>
					<div class="row col-md-12 form-group">
						<div class="col-md-3">
							<label for="selectSm" class=" form-control-label">IP Address</label>
						</div>
						<div class="col-md-9">
							<input class="form-control" required type="text" placeholder="IP Address" name="ipAddress" id="ipAddress">
							<input class="form-control" id="labIPId" type="hidden" placeholder="S/N"  name="labIPId">
						</div>
					</div>

					<hr>
					<div class="row col-md-12">
						<div class="col-md-6">
							<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
								<i class="fa fa-bell fa-lg"></i>&nbsp;
								<span id="payment-button-amount">Update</span>
							</button>
						</div>
						<div class="col-md-6">
							<button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Cancel</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
