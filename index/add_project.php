<!DOCTYPE html>
<?php include "../connect.php" ?>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION["user_email"])) {
  header("location:../login/index.php");
}
// $stmt = $pdo->prepare("SELECT * FROM project WHERE project_id = ?");
// $stmt->bindParam(1, $_GET["project_id"]);
// $stmt->execute();
// $row = $stmt->fetch(); 
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เพิ่มโครงการ</title>

</head>

<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h5 class="nav" id="offcanvasExampleLabel">PTP-MS</h5>
    <a class="nav-link active" aria-current="page" href="add_project.php"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
      </svg> เพิ่มโครงการ</a>
    <a class="nav-link" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diamond" viewBox="0 0 16 16">
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
          <a class=nav-link active" aria-current="page" href="#"><?php echo $row['user_name']; ?></a>
        </li> -->
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">ออกจากระบบ</a>
          </li>
        </ul>
  </header>

  <div id="main" class="main bd-main order-1">
    <div class="d-md-flex flex-md-row align-items-center justify-content-around">
      <span class="bd-title" id="part1">1. ความเชื่อมโยงกับแผนกลุ่มจังหวัด</span>
      <span class="bd-title" id="part2">2. รายละเอียด</span>
      <span class="bd-title" id="part3">3. งบประมาณ</span>
      <span class="bd-title" id="part4">4. เพิ่มเติมอื่น ๆ</span>
    </div>
    <br>

    <div class="flex-md-row align-items-center justify-content-around part" id="p1">
      <div class="w-100 bd-highlight">
        <!-- --------------------------------------------------------------------------- -->

        <form action="add_check.php" method="post">
          <div class="mb-3">
            <label for="project_name" class=" col-form-label ">ชื่อโครงการ/ชื่อกิจกรรม/ชื่อการดำเนินงาน</label>
            <textarea class="form-control fs-3" name="project_name" id="project_name"></textarea>
          </div>
          <div class="row mb-3">
            <label for="development_subject" class="col col-form-label ">ประเด็นการพัฒนา</label>
            <div class="col-sm-10">
              <select class="form-select form-select-lg mb-3 fs-3" id="development_subject" name="development_subject">
                <option value="ประเด็นการพัฒนาที่ 1">ประเด็นการพัฒนาที่ 1</option>
                <option value="ประเด็นการพัฒนาที่ 2">ประเด็นการพัฒนาที่ 2</option>
                <option value="ประเด็นการพัฒนาที่ 3">ประเด็นการพัฒนาที่ 3</option>
                <option value="ประเด็นการพัฒนาที่ 4">ประเด็นการพัฒนาที่ 4</option>
                <option value="ประเด็นการพัฒนาที่ 5">ประเด็นการพัฒนาที่ 5</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_roadmap" class="col-sm-2 col-form-label ">แผนงาน</label>
            <div class="col-sm-10">
              <select class="form-select form-select-lg mb-3 fs-3" id="project_roadmap" name="project_roadmap">
                <option value="แผนงาน 1">แผนงาน 1</option>
                <option value="แผนงาน 2">แผนงาน 2</option>
                <option value="แผนงาน 3">แผนงาน 3</option>
                <option value="แผนงาน 4">แผนงาน 4</option>
                <option value="แผนงาน 5">แผนงาน 5</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_main" class="col-sm-2 col-form-label ">โครงการหลัก (ตามแผน)</label>
            <div class="col-sm-10">
              <select class="form-select form-select-lg mb-3 fs-3" id="project_main" name="project_main">
                <option value="โครงการหลัก (ตามแผน) 1">โครงการหลัก (ตามแผน) 1</option>
                <option value="โครงการหลัก (ตามแผน) 2">โครงการหลัก (ตามแผน) 2</option>
                <option value="โครงการหลัก (ตามแผน) 3">โครงการหลัก (ตามแผน) 3</option>
                <option value="โครงการหลัก (ตามแผน) 4">โครงการหลัก (ตามแผน) 4</option>
                <option value="โครงการหลัก (ตามแผน) 5">โครงการหลัก (ตามแผน) 5</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="project_sub" class="col-sm-2 col-form-label ">โครงการ/กิจกรรมย่อย (ตามแผน)</label>
            <div class="col-sm-10">
              <select class="form-select form-select-lg mb-3 fs-3" id="project_sub" name="project_sub">
                <option value="โครงการ/กิจกรรมย่อย (ตามแผน) 1">โครงการ/กิจกรรมย่อย (ตามแผน) 1</option>
                <option value="โครงการ/กิจกรรมย่อย (ตามแผน) 2">โครงการ/กิจกรรมย่อย (ตามแผน) 2</option>
                <option value="โครงการ/กิจกรรมย่อย (ตามแผน) 3">โครงการ/กิจกรรมย่อย (ตามแผน) 3</option>
                <option value="โครงการ/กิจกรรมย่อย (ตามแผน) 4">โครงการ/กิจกรรมย่อย (ตามแผน) 4</option>
                <option value="โครงการ/กิจกรรมย่อย (ตามแผน) 5">โครงการ/กิจกรรมย่อย (ตามแผน) 5</option>
              </select>
            </div>
          </div>

      </div>
    </div>


    <div class="flex-md-row align-items-center justify-content-around part" id="p2">
      <div class="w-100 bd-highlight">

        <div class="row mb-3">
          <div class="-flex p-2 bd-highlight" style="background-color: gray;">
            <label>ภาพรวมการดำเนินงาน</label>
          </div>
        </div>

        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0" for="operation_type">ลักษณะการดำเนินงาน</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input input-font-size-lg" type="radio" id="gridRadios1" value="โครงการ" name="operation_type" checked>
              <label class="form-check-label" for="gridRadios1">
                โครงการ
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="gridRadios2" value="การดำเนินงาน" name="operation_type">
              <label class="form-check-label" for="gridRadios2">
                การดำเนินงาน
              </label>
            </div>
          </div>
        </fieldset>


        <div class="row mb-3">
          <label for="project_code" class="col-sm-2 col-form-label">รหัสโครงงาน (ถ้ามี)</label>
          <div class="col-sm-10">
            <input type="text" class="form-control fs-3" id="project_code " name="project_code">
          </div>
        </div>


        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0" for="use_budget">การใช้งบประมาณ</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" id="gridRadios1" value="option1" checked name="use_budget">
              <label class="form-check-label" for="use_budget1">
                ใช้งบประมาณ
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" id="gridRadios2" value="option2" name="use_budget">
              <label class="form-check-label" for="use_budget2">
                ไม่ใช้งบประมาณ
              </label>
            </div>
          </div>


        </fieldset>
        <div class="row mb-3">
          <label for="budget_year" class="col-sm-2 col-form-label">ปีงบประมาณที่ดำเนินโครงการ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control fs-3" id="budget_year" name="budget_year">
          </div>
        </div>

        <div class="row mb-3">
          <label for="institution" class="col-sm-2 col-form-label">หน่วยงานที่รับผิดชอบ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control fs-3" id="institution" name="institution">
          </div>
        </div>

        <div class="row mb-3">
          <label for="province" class="col-sm-2 col-form-label fs-3">จังหวัดที่ดำเนินโครงการ</label>
          <div class="col-sm-10">
            <select class="form-select form-select-lg mb-3" id="province" name="province">
              <option value="ขอนแก่น">ขอนแก่น</option>
              <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
              <option value="มหาสารคาม">มหาสารคาม</option>
              <option value="กาฬสินธุ์">กาฬสินธุ์</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="target" class="col-sm-2 col-form-label">กลุ่มเป้าหมายในการดำเนินงาน</label>
          <div class="col-sm-10">
            <input type="text" class="form-control fs-3" id="target" name="target">
          </div>
        </div>
        <div class="row mb-3">
          <div class="-flex p-2 bd-highlight" style="background-color: gray;">
            <label>รายละเอียดการดำเนินงาน</label>
          </div>
        </div>

        <div class="row mb-3">
          <label for="project_objective" class="col-sm-2 col-form-label">วัตถุประสงค์และรายละเอียดของโครงการ</label>
          <div class="col-sm-10">
            <input type="text" class="form-control fs-3" id="project_objective" name="project_objective">
          </div>
        </div>

        <div class="row mb-3">
          <label for="project_result" class="col-sm-2 col-form-label">ผลผลิต/ผลลัพธ์ ตามตัวชี้วัด</label>
          <div class="col-sm-10">
            <input type="text" class="form-control fs-3" id="project_result" name="project_result">
          </div>
        </div>
      </div>
    </div>


    <div class="flex-md-row align-items-center justify-content-around part" id="p3">
      <div class="w-100 bd-highlight">
        <div>
          <div class="-flex p-2 bd-highlight" style="background-color: gray;">
            <label>แหล่งงบประมาณตามแผน</label>
          </div>
          <br>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox1_1" onclick="enableInput('checkbox1_1','budget_province_plan')">
                <label class="form-check-label" for="checkbox1_1">
                  งบประมาณของจังหวัด/กลุ่มจังหวัด
                </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_province_plan" name="budget_province_plan" >
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox1_2" onclick="enableInput('checkbox1_2','budget_department_plan')">
                  <label class="form-check-label" for="checkbox1_2"> งบประมาณของกระทรวง/กรม </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_department_plan" name="budget_department_plan" >
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox1_3" onclick="enableInput('checkbox1_3','budget_local_plan')" >
                <label class="form-check-label" for="checkbox1_3">
                  งบประมาณขององค์กรปกครองส่วนท้องถิ่น
                </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text"  input type="text" disabled class="form-control fs-3" id="budget_local_plan" name="budget_local_plan">
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox1_4" onclick="enableInput('checkbox1_4','budget_private_plan')">
                <label class="form-check-label" for="checkbox1_4">
                  งบประมาณของภาคเอกชน/ชุมชน
                </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_private_plan" name="budget_private_plan">
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
        </div>

        <div>
          <div class="-flex p-2 bd-highlight" style="background-color: gray;">
            <label>งบประมาณที่ได้รับจัดสรร</label>
          </div>
          <br>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox2_1" onclick="enableInput('checkbox2_1','budget_province_receive')">
                <label class="form-check-label" for="checkbox2_1">
                  งบประมาณของจังหวัด/กลุ่มจังหวัด
                </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_province_receive" name="budget_province_receive">
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox2_2" onclick="enableInput('checkbox2_2','budget_department_receive')">
                  <label class="form-check-label" for="checkbox2_2"> งบประมาณของกระทรวง/กรม </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_department_receive" name="budget_department_receive">
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox2_3" onclick="enableInput('checkbox2_3','budget_local_receive')">
                <label class="form-check-label" for="checkbox2_3">
                  งบประมาณขององค์กรปกครองส่วนท้องถิ่น
                </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_local_receive" name="budget_local_receive">
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox2_4" onclick="enableInput('checkbox2_4','budget_private_receive')">
                <label class="form-check-label" for="checkbox2_4">
                  งบประมาณของภาคเอกชน/ชุมชน
                </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_private_receive" name="budget_private_receive">
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
        </div>


        <div>
          <div class="-flex p-2 bd-highlight" style="background-color: gray;">
            <label>งบประมาณตามที่ใช้จ่ายจริง</label>
          </div>
          <br>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox3_1" onclick="enableInput('checkbox3_1','budget_province_use')">
                <label class="form-check-label" for="checkbox3_1">
                  งบประมาณของจังหวัด/กลุ่มจังหวัด
                </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_province_use" name="budget_province_use">
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox3_2" onclick="enableInput('checkbox3_2','budget_department_use')">
                  <label class="form-check-label" for="checkbox3_2"> งบประมาณของกระทรวง/กรม </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_department_use" name="budget_department_use">
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox3_3" onclick="enableInput('checkbox3_3','budget_local_use')">
                <label class="form-check-label" for="checkbox3_3">
                  งบประมาณขององค์กรปกครองส่วนท้องถิ่น
                </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_local_use" name="budget_local_use">
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkbox3_4" onclick="enableInput('checkbox3_4','budget_private_use')">
                <label class="form-check-label" for="checkbox3_4">
                  งบประมาณของภาคเอกชน/ชุมชน
                </label>
              </div>
            </div>
            <div class="col-auto">
              จำนวน
            </div>
            <div class="col-sm-5">
              <input type="text" disabled class="form-control fs-3" id="budget_private_use" name="budget_private_use">
            </div>
            <div class="col-auto">
              บาท
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="flex-md-row align-items-center justify-content-around part" id="p4">
      <div class="w-100 bd-highlight">
        <div class="-flex p-2 bd-highlight" style="background-color: gray;">
          <label>รายละเอียดอื่น ๆ เพิ่มเติม</label>
        </div><br>
        <div>
          <label for="addition">ลิงค์หรือรายละเอียดอื่น ๆ <br>เพิ่มเติมที่น่าจะเป็นประโยชน์</label>
          <textarea class="form-control" id="project_additional" style="height: 100px" name="project_additional"></textarea>
        </div><br>
        <div class="-flex p-2 bd-highlight" style="background-color: gray;">
          <label for="addition">ไฟล์แนบ (ถ้ามี)</label>
        </div><br>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="inputGroupFile02">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>

      </div>
    </div>



    <div class="d-md-flex flex-md-row align-items-center justify-content-end" style="margin-bottom: 100px; margin-right: 50px;">
      <div class="btn btn-primary" id="button1" onclick="previousPart()" style="margin-right: 10px;">หน้าก่อนหน้า</div>
      <div class="btn btn-primary" id="button2" onclick="nextPart()">หน้าถัดไป</div>
      <button class="btn btn-danger" type="submit" id="button3" onclick="saveProject()">บันทึกและยืนยันเพิ่มโครงการ</button>
    </div>
  </div>
  </form>
  <!-- --------------------------------------------------------------------------- -->
  <script>
    var part = 1;
    renderPart(part);

    function enableInput(checkbox_id, input_id) {
      var checkBox = document.getElementById(checkbox_id);
      var input = document.getElementById(input_id);
      if (checkBox.checked == true) {
        input.disabled = false;
      } else {
        input.disabled = true;
        input.value = '';
      }
    }

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