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
        
                <div class="col " style="margin-bottom: 30px;">
                <b><label style="font-size: 60px; margin-left: 100px;"> ระบบสารสนเทศโครงการกลุ่มจังหวัดร้อยแก่นสารสินธุ์ </label>  </b>
            <b> <label style="font-size: 40px; margin-left: 190px;"> Four Provinccial Group Maragement System (FPG-MS) </label></b>
             
            </div>
          
            <div class="row ">
                <div class="col-7 "><img src="../assets/bg_login.png" height="90%" width="100%"></div>
                <div class="col-5">
                    <div class="card-body btn-Light" style="padding-top: 3rem; width: 20rem; margin-left: 70px;">
                        <h5 class="card-title fs-3 " >
                        <b> <label style="margin-left: 100px; margin-bottom: 25px; " >เข้าสู่ระบบ</label>  <b>
                        </h5>


                        <form action="login_check.php" method="POST">
                            <div class="mb-3">
                                <h6 class="card-subtitle mb-2 text fs-3">
                               <b> <label >User name</label> </b>  
                                </h6>
                                <input type="email" name="user_email" class="form-control fs-5" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <h6 class="card-subtitle mb-2 text fs-3">
                               <b> <label > Password </label> </b>   
                                </h6>

                                <input type="password" name="user_password" class="form-control fs-5" id="exampleInputPassword1" >
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary fs-4">เข้าสู่ระบบ</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
</body>

</html>