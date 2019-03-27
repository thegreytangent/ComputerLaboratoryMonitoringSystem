	<!-- modal small -->
	<div class="modal fade" id="complaint_modal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="reports/complaint.php" id="complaint_form" method="get" enctype="multipart/form-data" class="form-horizontal">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="smallmodalLabel">Print Complaint reports</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Date from:</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="date" id="text-input" name="from" placeholder="Text" class="form-control">
							</div>
						</div>
						<div class="row form-group">
							<div class="col col-md-3">
								<label for="text-input" class=" form-control-label">Date to:</label>
							</div>
							<div class="col-12 col-md-9">
								<input type="date" id="text-input" name="to" placeholder="Text" class="form-control">
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Print</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- end modal small -->
