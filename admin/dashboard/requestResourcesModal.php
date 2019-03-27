<!-- resourcesssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->
<div class="modal fade" id="resources" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<form id="requestReplyModalForm">
				<div class="card-body" align="center">
					<div class="card-title">
						<h4 class="text-center text-danger title-2">Requested Resources!!</h4>
					</div>
					<hr>
					<div class="col-12 col-md-12">
						<label class="text-secondary">Teacher: <span id="requestResourcesTeacher"></span> </label>
						<br>
						<label class="text-secondary">Resources Need: <span id="requestResourcesNeed">df</span></label>
						<textarea class="form-control" rows="3" readonly id="requestResourcesNote"></textarea>
					</div><br>
					<div class="col-12 col-md-12">
						<label>Reply Message</label>
						<textarea id="message" name="message" class="form-control" rows="2" placeholder="Message..."></textarea>
					</div><br>
					<div class="form-group col-md-8">
						<label for="inputState">Select Student Assistant</label>
						<select name="StudentAssistance" id="StudentAssistance" class="form-control">
							<option value=""></option>
							<?php foreach (StudentAssistance::find_all() as $student): ?>
								<option value="<?php echo $student->getId(); ?>"><?php echo $student->completeName(); ?></option>
							<?php endforeach; ?>
						</select>
					</div><br>
					<input type="hidden" id="requestResourcesId" name="requestResourcesId">
					<input type="hidden" id="requestResourcesLab" name="requestResourcesLab">
					<div class="form-group col-md-8">
						<button type="submit" id="RequestReplyBtn" class="btn btn-outline-success">Respond</button>
					</div>
					<div><hr>
						
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- resourcesssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->
