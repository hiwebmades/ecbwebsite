<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECB</title>
    <?php 
    include 'head.php'  
    ?>
</head>
<body>
<?php
include'clock.php'
?>
    
   <?php
include'menu.php'
?>
    <br />
    <div class="container col-12">
        <div class="row">

            <div class="col-12 col-md-3 float-left">
                <div class="card">
                    <div class="card-header bg-info text-black text-center">
                        Addmission
                    </div>

                    <div class="card-body">
                        <p class="card-text">
                            <ul>
                                <li><a href="#">Admission Procedure</a></li>
                                <li><a href="#">Fee Structure</a></li>
                                <li><a href="#">Scholarships & Awards</a></li>
                                <li><a href="#">Payment Procedure</a></li>
                            </ul>
                        </p>

                    </div>
                </div>
                <br />
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        Courses
                    </div>

                    <div class="card-body">
                        <p class="card-text">
                            <span class="badge badge-primary"><a href="#">B.Tech</a></span>
                            <span class="badge badge-info"><a href="#">M.Tech</a></span>
                            <span class="badge badge-primary"><a href="#">BBA</a></span>
                            <span class="badge badge-info"><a href="#">MBA</a></span>
                            <span class="badge badge-info"><a href="#">MCA</a></span>
                            <span class="badge badge-info"><a href="#">M.Sc (CS)</a></span>
                            <span class="badge badge-dark"><a href="#">M.Sc (Physics)</a></span>
                            <span class="badge badge-dark"><a href="#">M.Sc (Chemistry)</a></span>
                            <span class="badge badge-dark"><a href="#">M.Sc (Maths)</a></span>
                            <span class="badge badge-primary"><a href="#">BCA</a></span>
                            <span class="badge badge-secondary"><a href="#">PhD</a></span>

                        </p>

                    </div>
                </div>
                <br />
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        Departments
                    </div>

                    <div class="card-body">
                        <p class="card-text">
                            <ul>
                                <li><a href="#">Applied Sciences</a></li>
                                <li><a href="#">Civil Engineering</a></li>
                                <li><a href="#">Computer Science Engg.</a></li>
                                <li><a href="#">Electrical Engineering</a></li>
                                <li><a href="#">Electronics Engineering</a></li>
                                <li><a href="#">Mechanical Engineering</a></li>


                            </ul>
                        </p>

                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6">
                

                <div id="slide" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#slide" data-slide-to="0" class="active"></li>
                        <li data-target="#slide" data-slide-to="1"></li>
                        <li data-target="#slide" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/slides/1.jpeg" height="270" alt="ECB">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slides/2.jpeg" height="270" alt="Campus">
                        </div>
                        <div class="carousel-item">
                            <img src="images/slides/3.jpeg" height="270" alt="ECB">
                        </div>

                    </div>
                     <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#slide" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#slide" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                <hr />
                </div>
                    <!--Notice Board-->
                    <br>
                <div class="card  bg-white">
                    <div class="card-header bg-primary">
                        <span class="text-white fa fa-newspaper"> Notice Board</span>
                    </div>
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="orders-tab" data-toggle="pill" href="#orders" role="tab" aria-controls="orders" aria-selected="true">Office Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="teq-tab" data-toggle="pill" href="#teq" role="tab" aria-controls="teq" aria-selected="false">TEQIP-III</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="placement-tab" data-toggle="pill" href="#placement" role="tab" aria-controls="placement" aria-selected="false">Placement Cell</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="events-tab" data-toggle="pill" href="#events" role="tab" aria-controls="events" aria-selected="false">Events</a>

                            </li>

                        </ul>
                        <hr />

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">

                                <table class="table table-hover" style="font-size:smaller">
                                    <tr>
                                        <th>
                                            Uploaded On
                                        </th>
                                        <th>
                                            Notification <img src="images/new.png" class="blink_me img-fluid" alt="New" />
                                        </th>
                                    </tr>

                                    <tr>
                                        <td>
                                            27 April 2020
                                        </td>
                                        <td>
                                            <a href="#form">Revel Form Notice (B.TECH - V SEM / MCA - V SEM MAIN/BACK, M.TECH I SEM BACK)</a>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            27 April 2020
                                        </td>
                                        <td>
                                            <a href="#form">B.TECH - V SEM / MCA - V SEM MAIN/BACK, M.TECH I SEM BACK</a>

                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            17 March 2020
                                        </td>
                                        <td>
                                            <a href="#form">M.TECH I SEM BACK Form</a>

                                        </td>

                                    </tr>

                                </table>

                                <center>
                                    <a href="#form-all" class="btn btn-outline-primary">Check All Orders <span class="fa fa-arrow-circle-right"></span></a>
                                </center>
                            </div>
                            <div class="tab-pane fade" id="teq" role="tabpanel" aria-labelledby="teq-tab">
                                <table class="table table-hover" style="font-size:smaller">
                                    <tr>
                                        <th>
                                            Uploaded On
                                        </th>
                                        <th>
                                            TEQIP -III <img src="images/new.png" class="blink_me img-fluid" alt="New" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            19 March 2020
                                        </td>

                                        <td>
                                            <a href="#new">New Update I</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            19 March 2020
                                        </td>

                                        <td>
                                            <a href="#new">New Update II</a>
                                        </td>
                                    </tr>
                                </table>
                                <center>
                                    <a href="#form-all" class="btn btn-outline-primary">Check All <span class="fa fa-arrow-circle-right"></span></a>
                                </center>
                            </div>
                            <div class="tab-pane fade" id="placement" role="tabpanel" aria-labelledby="placement-tab">
                                <table class="table table-hover" style="font-size:smaller">
                                    <tr>
                                        <th>
                                            Uploaded On
                                        </th>
                                        <th>
                                            Placement <img src="images/new.png" class="blink_me img-thumbnail" alt="New" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            19 March 2020
                                        </td>

                                        <td>
                                            <a href="#place">Placement cell notice I</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            17 March 2020
                                        </td>

                                        <td>
                                            <a href="#place">Placement cell notice II</a>
                                        </td>
                                    </tr>
                                </table>
                                <center>
                                    <a href="#form-all" class="btn btn-outline-primary">Check All Notification <span class="fa fa-arrow-circle-right"></span></a>
                                </center>
                            </div>
                            <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
                                <table class="table table-hover" style="font-size:smaller">
                                    <tr>
                                        <th>
                                            Uploaded On
                                        </th>
                                        <th>
                                            Events <img src="images/new.png" class="blink_me img-thumbnail" alt="New" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            19 March 2020
                                        </td>

                                        <td>
                                            <a href="#event">ECB Event I </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            19 March 2020
                                        </td>

                                        <td>
                                            <a href="#event">ECB Event I Online Registration </a>
                                        </td>
                                    </tr>
                                </table>
                                <center>
                                    <a href="#form-all" class="btn btn-outline-primary">Check All Events <span class="fa fa-arrow-circle-right"></span></a>
                                </center>
                            </div>

                        </div>
                    </div>
                </div>
                

                   

                
                <br />
            </div>
            <div class="col-12 col-md-3 float-right">
                <div class="card">
                    <img class="card-img-top" src="images/d.png" height="170" width="100" alt="Card image cap">
                    <div class="card-body">

                        <a href="#" class="btn btn-sm btn-primary">A message from Principal Sir</a>
                    </div>
                </div>
                <br />
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        About Us
                    </div>

                    <div class="card-body">
                        <p class="card-text">
                            <ul>
                                <li><a href="#">Vision, mission, values</a></li>
                                <li><a href="#">Board of Governors</a></li>
                                <li><a href="#">Administration</a></li>
                                <li><a href="#">Map and location</a></li>
                            </ul>
                        </p>

                    </div>
                </div>
                <br />
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        General Information
                    </div>

                    <div class="card-body">
                        <p class="card-text">
                            <ul>
                                <li><a href="#">Anti-Ragging @ECB</a></li>
                                <li><a href="#">Disclaimer News</a></li>
                                <li><a href="#">ECB in Media</a></li>
                                <li><a href="#">Payment Gateway</a></li>

                            </ul>
                        </p>

                    </div>
                </div>
                <br />

            </div>

        </div>

    </div>
<?php
include'footer.php'
?>
</body>
</html>
