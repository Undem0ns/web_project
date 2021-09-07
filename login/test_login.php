<!DOCTYPE html>
<?php include '../connect.php' ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="card mb-3 ">
                    <div class="card-body  btn-success">
                        <div class="row">
                            <div class="col-sm">
                                <img src="../assets/la.png " width="100px" height="50px" class="img-fluid rounded-start"  style="margin-left: 25rem;">
                                <img src="../assets/kn.png " width="120px" height="50px" class="img-fluid rounded-start" >
                                <img src="../assets/sk.png " width="100px" height="50px" class="img-fluid rounded-start" style="margin-block-end: 0%;">
                                <img src="../assets/kl.png " width="100px" height="50px" class="img-fluid rounded-start" style="margin-block-end: 0%;">
                                <h5 class="card-title fs-1" style="margin-left: 21rem;">ระบบสารสนเทศโครงการกลุ่มจังหวัดร้อยแก่นสารสินธุ์</h5>
                                <p class="card-text" style="margin-left: 27rem;">Four Provinccial Group Maragement System (FPG-MS)</p>
                            </div>
                           

                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-sm">
                <img src="../assets/login.png" class="img-fluid rounded-start">

            </div>
            <div class="col-sm">


                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <!-- <img src="../assets/login.png" class="img-fluid rounded-start" alt="..."> -->
                        </div>
                        <div class="col-md-8">
                            <div class="card-body"   >
                                <h5 class="card-title">
                                    <form action="login_check.php" method="POST">
                                        <div class="mb-3">
                                            <h6 class="card-subtitle mb-2 text fs-3 ">
                                                <b> <label>เข้าสู่ระบบ</label> </b>
                                            </h6>
                                            <h6 class="card-subtitle mb-2 text fs-3 ">
                                                <b> <label>User name</label> </b>
                                            </h6>
                                            <input type="email" name="user_email" class="form-control fs-5" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="card-subtitle mb-2 text fs-3">
                                                <b> <label> Password </label> </b>
                                            </h6>

                                            <input type="password" name="user_password" class="form-control fs-5" id="exampleInputPassword1">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary fs-4">เข้าสู่ระบบ</button>
                                    </form>
                                </h5>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>






</body>

</html>