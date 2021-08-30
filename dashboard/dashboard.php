<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <?php include "../connect.php" ?>
</head>
<body>
<div id="header" class="col-lg-12">
    
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary sticky-top">
      <div class="container-fluid">
      <ul class="nav nav-tabs">
          <li class="nav-item">
            <span clss="marginle" style="font-size:30px;">PCP-MS</span>
          </li>
        </ul>
        <ul class="nav justify-content-end">
          <li class="nav-item">
              <a class=nav-link active aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg> <?php
                        echo $_COOKIE["user_name"]; ?></a>
            </li>
             <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../login/index.php">ออกจากระบบ</a>
            </li>
            </ul>
      </div></nav>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-info">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">เพิ่มโครงการ</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">รายชื่อโครงการ</span></a>
                    </li>
 
                    <li>
                        <a href="#" class="nav-link px-0 align-middle text-white">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">ร่างโครงการ</span> </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <header>

        <div class="col py-3">
            
            <!-- <h3>Left Sidebar with Submenus</h3>
            <p class="lead">An example 2-level sidebar with collasible menu items. The menu functions like an "accordion" where only a single menu is be open at a time.</p>
            <ul class="list-unstyled">
                <li><h5>Responsive</h5> shrinks in width, hides text labels and collapses to icons only on mobile</li>
            </ul> -->
        </div>
    </div>
</div>
</body>
</html>