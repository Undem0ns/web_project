<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "../connect.php" ?>

</head>
<body>
<?php  
        session_start();
if (!isset($_SESSION["user_email"]) ) {
    header("location:../login/index.php");
    }
   
    
?>
  <nav class="navbar navbar-light bg-secondary fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav justify-content-end">
        <!-- <li class="nav-item">
          <a class=nav-link active" aria-current="page" href="#"><?php echo $row['username']; ?></a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">ออกจากระบบ</a>
        </li>
    </ul>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">PTP-MS</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">เพิ่มโครงการ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">รายชื่อโครงการ</a>
          </li>
      </div>
      
  </nav>

</body>
</html>