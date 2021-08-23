<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include "../connect.php" ?>

</head>
<body>
  <header>
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
            <a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
</svg> เพิ่มโครงการ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond" viewBox="0 0 16 16">
  <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
</svg> รายชื่อโครงการ</a>
          </li>
      </div>
    </div> 
  </div>  
  </nav>
  </header>
  <main class="bd-main order-1">
      <div class="bd-intro ps-lg-4">
        <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
        <!-- <button type="button" class="btn btn-secondary">Secondary</button> -->
        
          <a class="btn btn-secondary" href="" title="add_project" target="_blank" rel="noopener" style="margin-right: 15px;"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
</svg> เพิ่มโครงการ/ดำเนินการ </a>
          <h2 class="bd-title" id="content">รายชื่อโครงการทั้งหมด</h2>
        </div>
      </div>
      <br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ชื่อโครงการและการดำเนินงาน</th>
            <th scope="col">ประเด็นการพัฒนาที่เกี่ยวข้อง</th>
            <th scope="col">จังหวัด</th>
            <th scope="col">ปีงบประมาณ</th>
            <th scope="col">การจัดการโครงการ</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
        </table>


  </main>
</body>
</html>