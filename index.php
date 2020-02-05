<?php
    require_once 'header.php';
    require_once "signup.php";
?>
<body class="body" style="background-color:#d3d3d3; height:100%;">
    <div class="container" >
        <div class="row">
            <div class="col col-3"></div>
            <div  class="col col-6">
                <div class="card" style="margin-top:20px;">
                    <div class="card-body">
                        <form action="" method="post">
                            <p class="h4 text-center py-4">Sign In</p>
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <label for="materialFormCardNameEx" class="font-weight-light">User Name</label>
                                <input type="text" id="materialFormCardNameEx" class="form-control">
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <label for="materialFormCardPasswordEx" class="font-weight-light">Your password</label>
                                <input type="password" id="materialFormCardPasswordEx" class="form-control">
                            </div>
                            <div class="text-center py-4 mt-3">
                                <button class="btn btn-primary" type="submit">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p>New Member? <a href="signup.php" data-toggle="modal" data-target="#exampleModalLong">Sign Up</a></p>
            </div>
            <div  class="col col-3"></div>
        </div>
    </div>
<?php
    require_once 'footer.php';
?>