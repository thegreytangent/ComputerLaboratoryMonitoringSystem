<!-- Addddddddddd SSSSSSSSSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
<div class="modal fade" id="studentAssistance" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <form id="studentAssistanceForm">
        <div class="card-body">
          <div class="card-title">
            <h3 class="text-center title-2">Add New Student Assistant</h3>
          </div>
          <hr>
          <br>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Schoolyear & Semester:</label>
            </div>
            <div class="col-md-4 input-group">
              <input class="form-control" type="text" placeholder="started" name="yearStarted" required>
              <input class="form-control" type="text" placeholder="ended" name="yearEnded" required>
            </div>
            <div class="col-md-4">
              <select name="semester" id="semester" class="form-control" required>
                <option value="">Select Semester</option>
                <option value="1st">1st Semester</option>
                <option value="2nd">2nd Semester</option>
                <option value="summer">Summer</option>
              </select>
            </div>
          </div>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">First & Last Name:</label>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" placeholder="First Name" name="firstname" required>
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" placeholder="Last Name" name="lastname" required>
            </div>
          </div>
          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Authorization:</label>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="ID Number" name="id_number">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" value="12345" name="password">
            </div>
          </div>


          <div class="row col-md-12 form-group">
            <div class="col-md-4">
              <label for="selectSm" class=" form-control-label">Maintenance Schedule:</label>
            </div>
            <div class="col-md-4">
              <div class="">
                <select name="daySchedule" id="daySchedule" class="form-control" required>
                  <option value="">Please Select Day</option>
                  <option value="Monday">Monday</option>
                  <option value="Tueday">Tueday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="">
                <select name="lab" id="lab" class="form-control" required>
                  <option value="">Please Select Lab</option>
                  <option value="lab1">ComLab1</option>
                  <option value="lab2">ComLab2</option>
                  <option value="lab3">ComLab3</option>
                  <option value="lab4">ComLab4</option>
                  <option value="lab5">ComLab5</option>
                  <option value="lab6">ComLab6</option>
                  <option value="lab7">ComLab7</option>
                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class="row col-md-12 justify-content-center">
            <div class="col-md-6">
              <button id="payment-button" type="submit" class="btn btn-md btn-success btn-block">
                <i class="fa fa-plus fa-md"></i>&nbsp;
                <span id="payment-button-amount">Add SA</span>
              </button>
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- Addddddddddd SSSSSSSSSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
