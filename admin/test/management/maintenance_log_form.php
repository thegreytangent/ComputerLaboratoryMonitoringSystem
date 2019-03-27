
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>CLAMS</title>

<!------------------------------------------ css links ------------------------------------------>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <!-- external link -->

    <link rel="stylesheet" type="text/css" href="vendor/select.css">
<!------------------------------------------ css links ------------------------------------------>

</head>

<body class="animsition">
    <div class="page-wrapper">



        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

            <!-- Laboratory COMLAB 4PC-->
<section class="statistic statistic2">
    <div class="row">
        <div class="col-lg-12" align="center">
            <h1>Maintenance Log Form</h1>
        </div>
    </div>
    <br>
    <hr>
    <div class="container">
        <!-- This is row -->
        <div class="row col-lg-12">
            <!-- first row -->
            <div class="col-lg-6">
                <div class="row form-group col-lg-12">
                    <div class="col-lg-4">
                        <label for="select" class=" form-control-label">Date Today:</label>
                    </div>
                    <div class="col-lg-8">
                        <input class="form-control" type="date" name="">
                    </div>
                </div>
            </div>
            <!-- end of first row -->
            <!-- new row -->
            <div class="col-lg-6">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label class=" form-control-label">Issue:</label>
                    </div>
                    <div class="col col-md-8">
                        <select name="select" id="select" class="form-control">
                            <option value="0">Select Issue</option>
                            <option value="1">Not Functioning</option>
                            <option value="2">System Error</option>
                            <option value="3">Hardware Error</option>
                            <option value="4">Defective</option>
                            <option value="4">Broken</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end of new row -->
        </div>
        <!-- This is end row -->
        <!-- This is row -->
        <div class="row col-lg-12">
            <!-- first row -->
            <div class="col-lg-6">
                <div class="row form-group col-lg-12">
                    <div class="col-lg-4">
                        <label for="select" class=" form-control-label">Select SA Name:</label>
                    </div>
                    <div class="col-lg-8">
                        <select name="select" id="select" class="form-control">
                            <option value="0">Please select</option>
                            <option value="1">Alexander</option>
                            <option value="2">Earl</option>
                            <option value="3">Joshua</option>
                            <option value="3">Noelyn</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end of first row -->
            <!-- new row -->
            <div class="col-lg-6">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label class=" form-control-label">Select Issued Device:</label>
                    </div>
                    <div class="col col-md-4">
                        <select class="select form-control" data-live-search="true">
                            <option>Please Select</option>
                            <option>Monitor</option>
                            <option>Keyboard</option>
                            <option>Mouse</option>
                            <option>AVR</option>
                            <option>Ram</option>
                            <option>Hard Drive</option>
                        </select>
                    </div>
                    <div class="col col-md-4">
                        <input class="form-control" type="text" placeholder="Serial Number" name="">
                    </div>
                </div>
            </div>
            <!-- end of new row -->
        </div>
        <!-- This is end row -->
        <!-- This is row -->
        <div class="row col-lg-12">
            <!-- first row -->
            <div class="col-lg-6">
                <div class="row form-group col-lg-12">
                    <div class="col-lg-4">
                        <label for="select" class=" form-control-label">Select Laboratory:</label>
                    </div>
                    <div class="col-lg-8">
                        <select name="select" id="select" class="form-control">
                            <option value="0">Please select</option>
                            <option value="1">ComLab1</option>
                            <option value="2">ComLab2</option>
                            <option value="3">ComLab3</option>
                            <option value="4">ComLab4</option>
                            <option value="5">ComLab5</option>
                            <option value="6">ComLab6</option>
                            <option value="7">ComLab7</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end of first row -->
            <!-- new row -->
            <div class="col-lg-6">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label class=" form-control-label">Action Taken:</label>
                    </div>
                    <div class="col col-md-8">
                        <select name="select" id="select" class="form-control">
                            <option value="0">Please select</option>
                            <option value="3">Basic Fixing</option>
                            <option value="3">Reassembled</option>
                            <option value="3">Cleaned</option>
                            <option value="3">Replaced</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end of new row -->
        </div>
        <!-- This is end row -->
        <!-- This is row -->
        <div class="row col-lg-12">
            <!-- first row -->
            <div class="col-lg-6">
                <div class="row form-group col-lg-12">
                    <div class="col-lg-4">
                        <label for="select" class=" form-control-label">Select Unit/s:</label>
                    </div>
                    <div class="col col-md-8">
                        <select class="selectpicker" multiple data-live-search="true">
                            <option>PC-1</option>
                            <option>PC-2</option>
                            <option>PC-3</option>
                            <option>PC-4</option>
                            <option>PC-5</option>
                            <option>PC-6</option>
                            <option>PC-7</option>
                            <option>PC-8</option>
                            <option>PC-9</option>
                            <option>PC-10</option>
                            <option>PC-11</option>
                            <option>PC-12</option>
                            <option>PC-13</option>
                            <option>PC-14</option>
                            <option>PC-15</option>
                            <option>PC-16</option>
                            <option>PC-17</option>
                            <option>PC-18</option>
                            <option>PC-19</option>
                            <option>PC-20</option>
                            <option>PC-21</option>
                            <option>PC-22</option>
                            <option>PC-23</option>
                            <option>PC-24</option>
                            <option>PC-25</option>
                            <option>PC-26</option>
                            <option>PC-27</option>
                            <option>PC-28</option>
                            <option>PC-29</option>
                            <option>PC-30</option>
                            <option>PC-31</option>
                            <option>PC-32</option>
                            <option>PC-33</option>
                            <option>PC-34</option>
                            <option>PC-35</option>
                            <option>PC-36</option>
                            <option>PC-37</option>
                            <option>PC-38</option>
                            <option>PC-39</option>
                            <option>PC-40</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- end of first row -->
            <!-- new row -->
            <div class="col-lg-6">
                <div class="row form-group">
                    <div class="col col-md-4">
                        <label class=" form-control-label">New Device Info:</label>
                    </div>
                    <div class="col col-md-4">
                        <select class="select form-control" data-live-search="true">
                            <option>Select Brand</option>
                            <option>All Brands</option>
                        </select>
                    </div>
                    <div class="col col-md-4">
                        <input class="form-control" type="text" placeholder="Serial Number" name="">
                    </div>
                </div>
            </div>
            <!-- end of new row -->
        </div>
        <!-- This is end row -->
        <hr>
        <!-- This is row -->
        <div class="row col-lg-12" align="center">
            <!-- first row -->
            <div class="col-lg-12">
                <div class="container">
                    <div class="col-lg-12">

                    <div class="row form-group justify-content-center">
                        <div class="col-lg-12">
                            <h3 for="textarea-input" class=" form-control-label">Remarks!</h3>
                        </div>
                        <div class="col-lg-5">
                            <textarea name="textarea-input" id="textarea-input" rows="3" placeholder="Note..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div>
                            <button data-toggle="modal" data-target="#maintenancesubmit" type="button" class="btn btn-outline-success btn-sm">Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- This is end row -->
    </div>
</section>
    <!-- END Laboratory PC-->

            <!-- COPYRIGHT-->
<section class="p-t-60 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>
            <!-- END COPYRIGHT-->
</div>

</div>

</body>

<!----------------------------------------- script links ----------------------------------------->
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- External Script for multidropdownselect -->
    <script src="vendor/select.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
<!----------------------------------------- script links ----------------------------------------->

</html>