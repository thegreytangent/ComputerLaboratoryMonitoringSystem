<div class="modal fade" id="requestAssistanceModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<form id="request_assistance_form">
				<div class="card-body" align="center">
					<div class="card-title">
						<h4 class="text-center text-danger title-2">Requested Assistance</h4>
					</div>
					<hr>
					<input type="hidden"  name="request_assistanceId" id="request_assistanceId">
					<input type="hidden" id="lab_id"  name="lab_id" >
					<div class="col-12 col-md-12">
						<label class="text-warning">Teacher: <span id="requestTeacherName"></span></label>
						<textarea class="form-control" rows="3" id="requestMessage" readonly></textarea>
					</div><br>
					<div class="col-12 col-md-12">
						<label>Reply Message</label>
						<textarea class="form-control" name="message"  rows="2" placeholder="Message..."></textarea>
					</div><br>
					<div class="form-group col-md-8">
						<label for="inputState">Select Student Assistant</label>
						<select id="studentAssisId" name="studentAssisId" class="form-control">
							<option value=""></option>
							<?php foreach (StudentAssistance::find_all() as $sa ): ?>
								<option value="<?php echo $sa->getId(); ?>"><?php echo $sa->completeName(); ?></option>
							<?php endforeach; ?>
							<!-- <option></option> -->
						</select>
					</div><br>
					<div class="form-group col-md-8">
						<button type="submit" class="btn btn-outline-success respondBtn">Respond</button>
					</div>
					<div><hr>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
