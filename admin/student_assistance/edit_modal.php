<!-- Addddddddddd SSSSSSSSSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <form id="updateAssistanceForm">
        <div class="card-body">
          <div class="card-title">
            <h3 class="text-center title-2">Update Student Assistant</h3>
          </div>
          <hr>
          <br>
        <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Schoolyear & Semester:</label>
            </div>
            <div class="col-md-4 input-group">
              <input class="form-control" type="text"  placeholder="started" name="yearStarted" id="yearStarted" required>
              <input class="form-control" type="text"  placeholder="ended" name="yearEnded" id="yearEnded" required>
            </div>
            <div class="col-md-4">
              <select name="semester" id="semester" class="form-control" required>

              </select>
            </div>
          </div>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">First & Last Name:</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text"  placeholder="First Name" id="firstname" name="firstname" required>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text"  placeholder="Last Name" id="lastname" name="lastname" required>
            </div>
          </div>

          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Id Number: </label>
            </div>
            <div class="col-md-4">
              <div class="">
              <input type="text" class="form-control" name="id_number" id="id_number" >
              </div>
            </div>

          </div>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Maintenance Schedule:</label>
            </div>
            <div class="col-md-4">
              <div class="">
                <select name="daySchedule" id="daySchedule" class="form-control" required>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="">
                <select name="lab" id="lab" class="form-control" required>

                </select>
              </div>
            </div>
          </div>
          <hr>
          <input type="hidden" name="id" id="id" >
          <div class="row col-md-12 justify-content-center">
            <div class="col-md-6">
              <button id="payment-button" type="submit" class="btn btn-md btn-success btn-block">
                <i class="fa fa-plus fa-md"></i>&nbsp;
                <span id="payment-button-amount">Update S.A</span>
              </button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- Addddddddddd SSSSSSSSSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
