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

  <!-- This is cssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->
  <!-- Fontfaces CSS-->
  <link href="../../css/font-face.css" rel="stylesheet" media="all">
  <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
  <link rel="stylesheet" type="text/css" href="monitorstatus.css">

  <!-- Main CSS-->
  <link href="../../css/theme.css" rel="stylesheet" media="all">
  <!-- This is cssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->

</head>

<body class="animsition">
  <div class="page-wrapper">



    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
      <br>
      <div class="container" align="center">
        <div class="row col-lg-12 justify-content-center" align="center">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h2 class="text-success">Alexander Schedule</h2>
              </div>
              <div class="card-header">
                <div class="col-md-3">
                  <select name="semester" id="semester" class="form-control">
                    <option value="">Select Student Assistant</option>
                    <option value="1st">Alexander</option>
                  </select>
                </div>
              </div>
              <div class="card-body">
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#s-am" role="tab" aria-controls="home" aria-selected="true">Morning</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#s-pm" role="tab" aria-controls="profile" aria-selected="false">Afternoon</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#s-assgn" role="tab" aria-controls="contact" aria-selected="false">Assignments</a>
                  </li>
                </ul>
              </div>


              <div class="tab-content pl-3 p-1" id="myTabContent">
                <div class="tab-pane fade show active" id="s-am" role="tabpanel" aria-labelledby="home-tab">
                  <div class="col-lg-12">
                    <table class="table table-sm table-borderless table-hover text-center">
                      <thead class="text-info">
                        <tr>
                          <th scope="col">Time</th>
                          <th scope="col">Monday</th>
                          <th scope="col">Tuesday</th>
                          <th scope="col">Wednesday</th>
                          <th scope="col">Thursday</th>
                          <th scope="col">Friday</th>
                          <th scope="col" class="text-right text-warning">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">7:00-7:30</th>
                          <td class="bg-success"></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">7:30-8:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature left">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">8:00-8:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature left">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">8:30-9:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature left">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">9:00-9:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature left">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">9:30-10:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature left">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">10:00-10:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature left">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">10:30-11:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature left">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">11:00-11:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature left">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">11:30-12:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature left">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="s-pm" role="tabpanel" aria-labelledby="home-tab">
                  <div class="col-lg-12">
                    <table class="table table-sm table-borderless table-hover text-center">
                      <thead class="text-info">
                        <tr>
                          <th scope="col">Time</th>
                          <th scope="col">Monday</th>
                          <th scope="col">Tuesday</th>
                          <th scope="col">Wednesday</th>
                          <th scope="col">Thursday</th>
                          <th scope="col">Friday</th>
                          <th scope="col" class="text-right text-warning">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1:00-1:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">1:30-2:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2:00-2:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2:30-3:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3:00-3:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3:30-4:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4:00-4:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4:30-5:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5:00-5:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5:30-6:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">6:00-6:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">6:30-7:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">7:00-7:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">7:30-8:00</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">8:00-8:30</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="s-assgn" role="tabpanel" aria-labelledby="home-tab">
                  <div class="col-lg-12">
                    <table class="table table-borderless table-hover">
                      <thead class="text-info" align="center">
                        <tr>
                          <th scope="col">Laboratory Room</th>
                          <th scope="col">SA Name</th>
                          <th scope="col">Schedule of Maintenance</th>
                          <th scope="col" class="text-right text-warning">Action</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                        <tr>
                          <th scope="row">ComLab1</th>
                          <td>Earl</td>
                          <td>Friday</td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">ComLab2</th>
                          <td>Joshua</td>
                          <td>Friday</td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">ComLab3</th>
                          <td>Alexander</td>
                          <td>Friday</td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">ComLab4</th>
                          <td>Alexander</td>
                          <td>Friday</td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">ComLab5</th>
                          <td>Alexander</td>
                          <td>Friday</td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">ComLab6</th>
                          <td>Noelyn</td>
                          <td>Friday</td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">ComLab7</th>
                          <td>Noelyn</td>
                          <td>Friday</td>
                          <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                              </button>
                              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>



      <!-- END Laboratory PC-->

    </div>

  </div>
</body>

<!---------------------------------- This is script ---------------------------------->
<!-- Jquery JS-->
<script src="../../vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
<script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="../../vendor/slick/slick.min.js">
</script>
<script src="../../vendor/wow/wow.min.js"></script>
<script src="../../vendor/animsition/animsition.min.js"></script>
<script src="../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="../../vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="../../vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="../../vendor/circle-progress/circle-progress.min.js"></script>
<script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../../vendor/chartjs/Chart.bundle.min.js"></script>
<script src="../../vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="../../js/main.js"></script>
<!---------------------------------- This is script ---------------------------------->
</html>
