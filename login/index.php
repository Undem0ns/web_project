<?php include '../connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  class="bg-secondary">
    <div class="container " style="margin-top: 12%; ">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">เข้าสู่ระบบ</h5>
                    <h6 class="card-subtitle mb-2 text-muted">sign in your account</h6>

                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="mb-3">
                            <input type="email" name="e_mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="passwd" class="form-control" id="exampleInputPassword1"  placeholder="password">
                        </div>
                       
                        <button type="submit" name="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col">

        </div>
    </div>
</div>
</body>
</html>

<?php 
 if(isset($_POST['submit'])){
    session_start();
    $_SESSION['e_mail'] = htmlentities($_POST['e_mail']);
    header('location: test.php  ');
 }

?>

