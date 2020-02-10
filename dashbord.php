<?php
require_once 'header.php';
?>
<body>
<div class="container-fluid">
    <div class="row" style="height:30px;background-color:#ececf9;">
        <div class="col col-4" >sd</div>
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
    <div class="row" >
        <div class="col col-3" style="margin-left:-50px;"><!-- Card -->
            <div class="card">
            <!-- Card content -->
            <div class="card-body">
        <h4 class="card-title" style="margin-left:40px;color:#0df4fc;">Side Bar</h4>
    <hr>
        <style>
            .sidebar{
                list-style: none;
            }
        </style>
    <ul class="sidebar" >
        <li> <i class="fas fa-tachometer-alt"></i> Dashboard</li><hr>
        <li> <i class="fas fa-book "></i> <a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Manage books</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Add books</a>
                    <a class="dropdown-item" href="#">Remove books</a>
                    <a class="dropdown-item" href="#">Edit book</a>
                </div></LI> <hr>
            <li> <i class="fas fa-hand-holding-usd"></i><a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Manage fines</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">view fines</a>
                    <a class="dropdown-item" href="#">clear fines</a>
                </div></li><hr>
        <li> <i class="fas fa-book-reader"></i> Issue Books</li><hr>
        <li> <i class="fas fa-book"></i> View All Books</li><hr>
        <li> <i class="fas fa-book-open"></i> View Bookings</li><hr>
        <li> <i class="fas fa-user-graduate"></i><a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"> student</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Add students</a>
                    <a class="dropdown-item" href="#">view all students</a>
                </div>
        </li><hr>
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
<!-- Card --></div>
        <div class="col col-6">yu</div>
        <div class="col col-3"></div>
    </div>
</div>
    
<?php
require_once "footer.php";
?>