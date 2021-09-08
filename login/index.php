<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css_login.css" rel="stylesheet">
    <title>Login</title>
</head>
<?php include '../connect.php' ?>


<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    session_start();
    session_destroy();

    ?>
 
 <div class="container">
        <div class="row ">
            <div class="col-sm-11 fixed">

                <div class="card mb-3" >
                    <div class="card-body btn-success">
                        <div class="row">
                            <div class="col-sm">
                                <div class="row-sm" style="text-align: center;">
                                <img src="../assets/la.png " width="100px" height="50px" class="img-fluid rounded-start">
                                <img src="../assets/kn.png " width="120px" height="50px" class="img-fluid rounded-start">
                                <img src="../assets/sk.png " width="100px" height="50px" class="img-fluid rounded-start">
                                <img src="../assets/kl.png " width="100px" height="50px" class="img-fluid rounded-start">
                                </div>
                                
                                
                                <div class="row-sm">
                                    <div class="col-sm">
                                    <h5 class="card-title fs-1" style="text-align: center;">ระบบสารสนเทศโครงการกลุ่มจังหวัดร้อยแก่นสารสินธุ์</h5>
                                <p class="card-text fs-1" style="text-align: center;">Four Provinccial Group Maragement System (FPG-MS)</p>
                                    <div>
                                </div>
                            </div>
                        
                           

                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-sm-7">
                <img src="../assets/bg_login.png" class="img-fluid rounded-start">

            </div>
            <div class="col-sm">


                <div class="card mb-3" style="max-width: 540px; margin-right: 50px;" >
                    <div class="row">
                      
                        <div class="col-md-12">
                            <div class="card-body" style="padding-bottom: 100px;">
                                <h5 class="card-title">
                                    <form action="login_check.php" method="POST">
                                        <div class="mb-3 py-3">
                                            <h6 class="card-subtitle mb-2 text fs-3 ">
                                                <b> <label>เข้าสู่ระบบ</label> </b>
                                            </h6><br>
                                            <h6 class="card-subtitle mb-2 text fs-5 ">
                                                <label>User name</label> 
                                            </h6>
                                            <input type="email" name="user_email" class="form-control fs-5" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="card-subtitle mb-2 text fs-5">
                                                <label> Password </label>
                                            </h6>

                                            <input type="password" name="user_password" class="form-control fs-5 " id="exampleInputPassword1">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary fs-6">เข้าสู่ระบบ</button>
                                    </form>
                                </h5>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

</div>
    
</body>

</html>