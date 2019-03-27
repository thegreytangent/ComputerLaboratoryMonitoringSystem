<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Peripheral Brand</h3>
                    </div>
                    <hr>
                    <form action="" method="post" novalidate="validate">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Peripheral:</label>
                            <select class="form-control" name="peripheral" id="peripheral">
                                <option value=""></option>
                                <?php foreach (Peripherals::listParts() as $peripheral): ?>
                                    <option value="<?php echo $peripheral; ?>"><?php echo $peripheral; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Brand:</label>

                            <input type="text" class="form-control" name="brand" id="brand" autocomplete="off" required>
                        </div>
                        <div>

                            <button id="submit_brand" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Peripherals Name </th>
                            <th>Brand Count</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="part_table">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once 'management/parts_modal.php'; ?>
<?php require_once 'management/brand_edit_modal.php'; ?>

<script type="text/javascript">
    $(document).ready(function () {
        var peripheral, brand;

        getTableParts();



        $('.btn-update-brand').click(function () {
            var id = $(this).attr('id');
            var brand = $('#update_brand').val();
            var parts = $('#update_parts').val();
            $.ajax({
                url: 'management/brand_update.php',
                method: 'post',
                data: {id: id, brand: brand},
                dataType: 'json',
                success: function (res) {
                    if (res == 1) {
                        alert("Brand has been updated!");
                        getTableBrandName(parts);
                        $('#edit-brand-modal').modal('hide');
                    }
                }
            });
        });





        $(document).on('click', '.edit-brand-btn', function () {
            $('#edit-brand-modal').modal('show');
            var id = $(this).attr('id');
            $.ajax({
                url: 'management/brand_get.php',
                method: 'post',
                data: {id: $(this).attr('id')},
                dataType: 'json',
                success: function (data) {
                    $(".btn-update-brand").attr('id', id);
                    $("#update_brand").val(data.brand);
                    $("#update_parts").val(data.parts);
                }
            });
        });



        $(document).on('click', '.btn-brand-delete', function () {
            var partName = $(this).attr('partsName');
            if (confirm("Do you want to delete this record?"))
            {
                $.ajax({
                    url: 'management/brand_delete.php',
                    method: 'post',
                    data: {id: $(this).attr('id')},
                    success: function (res) {
                        if (res == 1) {
                            alert("Record has been deleted!");
                            getTableBrandName(partName);
                        }
                    }
                });
            }
        });







        $(document).on('click', '.btn-parts', function () {
            var partsName = $(this).attr('partsName');
            $('#parts_modal').modal('show');
            getTableBrandName(partsName);
        });





        function getTableBrandName(partsName) {
            $.ajax({
                url: 'management/brand_table.php',
                method: 'post',
                data: {partsName: partsName},
                success: function (data) {
                    $('#partsTitle').html('' + partsName + ' Brands');
                    $('#brand_table').html(data);
                }
            });
        }







        function getTableParts() {
            $.ajax({
                url: 'management/parts_table.php',
                method: 'post',
                data: {peripheral: peripheral, brand: brand},
                success: function (data) {
                    $('#part_table').html(data);
                }
            });
        }



        $('#submit_brand').click(function () {

            peripheral = $('#peripheral').val();
            brand = $('#brand').val();

            if (peripheral == "" || brand == "") {
                alert("Some fields are empty");
                return false;
            }

            $.ajax({
                url: 'management/parts_add.php',
                method: 'post',
                data: {peripheral: peripheral, brand: brand},
                success: function (res) {
                    if (res == 1) {
                        alert("Your Brand has been added successfully!");
                        $('#peripheral').val("");
                        $('#brand').val("");
                        getTableParts();
                    }
                }
            });
            return false;
        });



    });
</script>