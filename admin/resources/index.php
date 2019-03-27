<section class="statistic statistic2">

 <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Resources Name</h3>
                    </div>
                    <hr>
                    <form id="resources_form">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Resources:</label>
                            <input type="text" class="form-control" name="ResourcesName" id="ResourcesName" autocomplete="off" required>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Qty:</label>

                            <input type="text" class="form-control" name="Qty" id="Qty" autocomplete="off" required>
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
                            <th>Resources Name</th>
                            <th>Qty</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="part_table">
                        <?php $count = 1; ?>
                        <?php foreach (Resources::find_all() as $resources ): ?>
                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $resources->getResourcesName(); ?></td>
                                <td><?php echo $resources->getCount(); ?></td>
                                <td>
                                    <button class="btn btn-danger resourcesBtnDelete" id="<?php echo $resources->getId(); ?>">Delete</button>
                                </td>
                            </tr>
                            <?php $count++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</section>


<script src="resources/script.js"; type="text/javascript"></script>
