
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css.css" rel="stylesheet">
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
        <div class="row row-cols-2">
            <div class="col">
            </div>
            <div class="col-sm-4 ">
                <div class="card-body " style="padding-top: 14rem; width: 20rem;">
                    <h5 class="card-title fs-3">เข้าสู่ระบบ</h5>
                    <h6 class="card-subtitle mb-2 text-muted fs-3">sign in your account</h6>

                    <form action="login_check.php" method="POST">
                        <div class="mb-3">
                            <input type="email" name="user_email" class="form-control fs-5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="user_password" class="form-control fs-5" id="exampleInputPassword1" placeholder="password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary fs-4">เข้าสู่ระบบ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>