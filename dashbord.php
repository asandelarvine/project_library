<?php
require_once 'header.php';
require_once 'connection.php';
?>
<div class="container-fluid">
    <div class="row topbar" id="" >
        <div class="col col-4" >Dashboard</div>
        <div class="col col-5"></div>
        <div class="col col-3">
            <i  class="fas fa-user-alt"></i><a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Manage accounts</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i  class="fas fa-user-alt"></i> My profile</a>
                <a class="dropdown-item" href="#"><i class="fas fa-key"></i> Change password</a>
                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log out</a>
            </div>
        </div>
    </div>
    <div class="row" style="background-color:#00008b">
        <div class="col col-3" style="margin-left:-50px; background-color:#003366">
            <div class="card" style="background-color:#00008b">
                <div class="card-body">
                    <ul class="sidebar" style="margin-left:40px;color:#0df4fc; background-color:#0033660;">
                        <li> <i class="fas fa-tachometer-alt"></i> Dashboard</li><hr>
                        <li> <i class="fas fa-book "></i> <a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Manage books</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Add books</a>
                                <a class="dropdown-item" href="#">Remove books</a>
                                <a class="dropdown-item" href="#">Edit book</a>
                            </div></li> 
                            <hr>
                        <li> <i class="fas fa-hand-holding-usd"></i><a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Manage fines</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">view fines</a>
                            <a class="dropdown-item" href="#">clear fines</a>
                        </div></li>
                        <hr>
                        <li> <i class="fas fa-book-reader"></i> Issue Books</li><hr>
                        <li> <i class="fas fa-book"></i> View All Books</li><hr>
                        <li> <i class="fas fa-book-open"></i> View Bookings</li><hr>
                        <li> <i class="fas fa-user-graduate"></i><a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> student</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Add students</a>
                                    <a class="dropdown-item" href="#">view all students</a>
                                </div>
                        </li>
                        <hr>
                        <li> <i class="fas fa-cogs"></i> <a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Settings</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Manage courses</a>
                                    <a class="dropdown-item" href="#">Manage Years</a>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="col col-3" style="background-color:#00008b">
            <br>
                <div class="card wow fadeInLeft">
                    <img src="lib.jpg" class="card-img-top" alt="photo">
                </div>
                <br>
                <div class="card wow fadeInUp">
                <canvas id="doughnutChart" style="height:250px"></canvas>
                </div>

            </div>
            <div class="col col-3" style="background-color:#00008b">
            <br>
            <br>
                <div class="card wow zoomIn" style="background-color:#00bfff; height:170px">
                <br>
                    <i class="fas fa-book green-text text-center fa-5x"></i>
                    <div class="card-body">
                        <h4 class="card-title"><a>50</a></h4>
                        <p class="card-text">Returned Books</p>
                    </div>
                </div>
                <br>
                <div class="card wow zoomIn" style="background-color:#00bfff; height:170px">
                <br>
                    <i class="fas fa-book red-text text-center fa-5x"></i>
                    <div class="card-body" >
                        <h4 class="card-title"><a>50</a></h4>
                        <p class="card-text">Not Returned Books</p>
                    </div>
                </div>
            </div>
            <div class="col col-3"style="background-color:#00008b">
            <br>
            <br>
            <div class="card wow fadeInRight" style="background-color:#00bfff; height:170px">
            <br>
                    <i class="fas fa-book yellow-text text-center fa-5x"></i>
                    <div class="card-body">
                        <h4 class="card-title"><a>100</a></h4>
                        <p class="card-text">Issued books</p>
                    </div>
                </div>
                <br>
                <div class="card wow fadeInUp" style="background-color:#00bfff; height:170px">
                <br>
                    <i class="fas fa-book dark-grey-text text-center fa-5x"></i>
                    <div class="card-body">
                        <h4 class="card-title"><a>203</a></h4>
                        <p class="card-text">Total books</p>
                    </div>
                </div>    
            </div>
    </div>
</div>
    
<?php
require_once "footer.php";
?>