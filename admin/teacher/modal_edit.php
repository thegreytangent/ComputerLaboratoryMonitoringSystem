<!-- Addddddddddd Tttteeeeeeaaaaaaacccccchhhhhhhhheeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
         <form id="updateTeacherForm">
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Edit Teacher Account</h3>
                </div>
                <hr>
                <br>
                <div class="row col-md-12 form-group">
                    <div class="col-md-4">
                        <label for="selectSm" class=" form-control-label">Schoolyear & Semester:</label>
                    </div>
                    <div class="col-md-4 input-group">
                        <input class="form-control" type="text" placeholder="started" name="yearStarted" id="yearStarted" required>
                        <input class="form-control" type="text" placeholder="ended" name="yearEnded" id="yearEnded" required>
                    </div><!-- 
                    <div class="col-md-2">
                        <input class="form-control" type="text" placeholder="ended" name="">
                    </div> -->
                    <div class="col-md-4">
                        <select name="semester" id="semester" class="form-control" required> </select>
                    </div>
                </div>  
                <div class="row col-md-12 form-group">
                    <div class="col-md-4">
                        <label for="selectSm" class=" form-control-label">First & Last Name:</label>
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" type="text" placeholder="First Name" name="firstname" id="firstname" required>
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" type="text"  placeholder="Last Name" name="lastname" id="lastname" required>
                    </div>
                </div>
                <div class="row col-md-12 form-group">
                    <div class="col-md-4">
                        <label for="selectSm" class=" form-control-label">Authorization:</label>
                    </div>
                    <div class="col-md-4">
                        <input class="form-control" type="text" placeholder="Id Number" name="authorization" id="authorization" required>
                    </div>
                   
                </div>
                <div class="row col-md-12 form-group">
                    <div class="col-md-4">
                        <label for="selectSm" class=" form-control-label">Department:</label>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <select name="department" id="department" class="form-control" required>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <input type="hidden" id="id" name="id">
                <div class="row col-md-12 justify-content-center">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-md btn-success btn-block">
                            <i class="fa fa-plus fa-md"></i>&nbsp;
                            <span id="payment-button-amount">Update Account</span>
                        </button>
                    </div>  
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<!-- Addddddddddd Tttteeeeeeaaaaaaacccccchhhhhhhhheeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->
