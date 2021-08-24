<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เพิ่มโครงการ</title>
  <?php include "../connect.php" ?>
</head>

<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h5 class="nav" id="offcanvasExampleLabel">PTP-MS</h5>
    <a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
      </svg> เพิ่มโครงการ</a>
    <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond" viewBox="0 0 16 16">
        <path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z" />
      </svg> รายชื่อโครงการ</a>
  </div>


  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <span clss="marginle" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
          </li>
        </ul>
        <ul class="nav justify-content-end">
          <!-- <li class="nav-item">
          <a class=nav-link active" aria-current="page" href="#"><?php echo $row['username']; ?></a>
        </li> -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">ออกจากระบบ</a>
          </li>
        </ul>
  </header>

  <div id="main" class="bd-main order-1">
    <div class="d-md-flex flex-md-row align-items-center justify-content-around">
      <span class="bd-title" id="part1">1.ความเชื่อมโยงกับแผนกลุ่มจังหวัด</span>
      <span class="bd-title" id="part2">2.รายละเอียด</span>
      <span class="bd-title" id="part3">3.งบประมาณ</span>
      <span class="bd-title" id="part4">4.เพิ่มเติมอื่น ๆ</span>
    </div>
    <br>
    <div class="flex-md-row align-items-center justify-content-around part" id="p1">
      <span>P1</span>
      <span>P1</span>
      <span>P1</span>
      <span>P1</span>
    </div>
    <div class="flex-md-row align-items-center justify-content-around part" id="p2">
      <span>P2</span>
      <span>P2</span>
      <span>P2</span>
      <span>P2</span>
    </div>
    <div class="flex-md-row align-items-center justify-content-around part" id="p3">
      <span>P3</span>
      <span>P3</span>
      <span>P3</span>
      <span>P3</span>
    </div>
    <div class="flex-md-row align-items-center justify-content-around part" id="p4">
      <span>P4</span>
      <span>P4</span>
      <span>P4</span>
      <span>P4</span>
    </div>

    <div class="d-md-flex flex-md-row align-items-center justify-content-end fixed-bottom" style="margin-bottom: 100px; margin-right: 50px;">
      <button class="btn btn-primary" id="button1" onclick="previousPart()">หน้าก่อนหน้า</button>
      <button class="btn btn-primary" id="button2" onclick="nextPart()">หน้าถัดไป</button>
      <button class="btn btn-danger" id="button3" onclick="saveProject()">บันทึกและยืนยันเพิ่มโครงการ</button>
    </div>
  </div>

  <script>
    var part = 1;
    renderPart(part);

    function initPart() {
      document.getElementById("part1").style.fontWeight = "normal";
      document.getElementById("part2").style.fontWeight = "normal";
      document.getElementById("part3").style.fontWeight = "normal";
      document.getElementById("part4").style.fontWeight = "normal";

      document.getElementById("part1").style.textDecoration = "none";
      document.getElementById("part2").style.textDecoration = "none";
      document.getElementById("part3").style.textDecoration = "none";
      document.getElementById("part4").style.textDecoration = "none";

      document.getElementById("button1").style.display = "block";
      document.getElementById("button2").style.display = "block";
      document.getElementById("button3").style.display = "block";

      document.getElementById("p1").style.display = "none";
      document.getElementById("p2").style.display = "none";
      document.getElementById("p3").style.display = "none";
      document.getElementById("p4").style.display = "none";

    }

    function renderPart(part) {
      initPart();
      p = "part".concat(part.toString());
      document.getElementById(p).style.fontWeight = "bold";
      document.getElementById(p).style.textDecoration = "underline";

      if (part == 1) {
        document.getElementById("button1").style.display = "none";
        document.getElementById("button2").style.display = "block";
        document.getElementById("button3").style.display = "none";

        document.getElementById("p1").style.display = "flex";
        document.getElementById("p2").style.display = "none";
        document.getElementById("p3").style.display = "none";
        document.getElementById("p4").style.display = "none";

      }
      if (part == 2) {
        document.getElementById("button1").style.display = "block";
        document.getElementById("button2").style.display = "block";
        document.getElementById("button3").style.display = "none";

        document.getElementById("p1").style.display = "none";
        document.getElementById("p2").style.display = "flex";
        document.getElementById("p3").style.display = "none";
        document.getElementById("p4").style.display = "none";

      }
      if (part == 3) {
        document.getElementById("button1").style.display = "block";
        document.getElementById("button2").style.display = "block";
        document.getElementById("button3").style.display = "none";

        document.getElementById("p1").style.display = "none";
        document.getElementById("p2").style.display = "none";
        document.getElementById("p3").style.display = "flex";
        document.getElementById("p4").style.display = "none";

      }
      if (part == 4) {
        document.getElementById("button1").style.display = "block";
        document.getElementById("button2").style.display = "none";
        document.getElementById("button3").style.display = "block";

        document.getElementById("p1").style.display = "none";
        document.getElementById("p2").style.display = "none";
        document.getElementById("p3").style.display = "none";
        document.getElementById("p4").style.display = "flex";

      }
    }

    function nextPart() {
      part += 1;
      renderPart(part);
    }

    function previousPart() {
      part -= 1;
      renderPart(part);
    }

    function saveProject() {

    }
  </script>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }
  </script>
</body>

</html>