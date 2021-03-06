<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เพิ่มโครงการ</title>
  
</head>
<?php
include('../connect_2.php');
$sql = "SELECT * FROM development_subject";
$query = mysqli_query($conn, $sql);
?>
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



<body id="body-pd" class="body-pd">
<header class="header body-pd" id="header">
        <div class="header_toggle"> <i class='bx bx-menu bx-x' id="header-toggle"></i> </div>
        <div><img src="/img/111-removebg-preview.png" class="img-fluid" width="600"></div>

        <a class="nav-link" style="color: #F7F6FB;"><span><i class='bx bx-user nav_icon'></i> <?php
                    echo $_COOKIE["user_name"]; ?></span></a>
    </header>
    <div class="l-navbar show" id="nav-bar">
        <nav class="nav">
            <div> <a href="dashboard.php" class="nav_logo">  <img src="../assets/logo.png" height="100px" width="100px "> <span class="nav_logo-name">FPG-MS</span> </a>
                <div class="nav_list"> 
                <a href="dashboard.php" class="nav_link "> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">รายชื่อโครงการ</span> </a> 
                 <a href="add_project.php" class="nav_link active"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">เพิ่มโครงการ</span> </a> 
                 <a href="model.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">แบบร่างโครงการ</span> </a> 
                 <!-- <a href="search_db.php" class="nav_link "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg> <span class="nav_name">สืบค้น (DBA)</span> </a> -->
                </div>
            </div> 
            <a href="../login/index.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">ออกจากระบบ</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 py-3">
    <h2 class="bd-title mb-5" id="content" style="font-weight: bold;">เพิ่มโครงการ</h2>
        <div class="bd-intro ps-lg-4">
          <div id="main" class="bd-main order-1">
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

                <form action="add_check.php" method="post" enctype="multipart/form-data">
                  <div class="mb-3 was-validated" novalidate>
                    <label for="project_name" class="col-form-label" style="font-weight: bold;font-size:22px;">ชื่อโครงการ/ชื่อกิจกรรม/ชื่อการดำเนินงาน</label>
                    <textarea class="form-control fs-6" name="project_name" id="project_name" style="height: 100px" required></textarea>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                          กรุณากรอกชื่อโครงการ
                        </div>
                  </div>

                  <div class="row mb-3">
                    <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
                      <b><label>เลือกความเชื่อมโยงของโครงการกับแผนกลุ่มจังหวัด
                      </label></b>
                    </div>
                  </div>
                  <div class="row mb-3" >
                    <label for="development_subject" class="col-sm-3 col-form-label ">ประเด็นการพัฒนา</label>
                    <div class="col-sm-9 was-validated"  novalidate>
                      <select class="form-select md mb-3 fs-6" id="development_subject" name="development_subject"  required>
                        
                        <option selected disabled value="">เลือก...</option>

                        <?php while ($result = mysqli_fetch_assoc($query)) : ?>
                          <option value="<?= $result['development_id'] ?>"><?= $result['development_name'] ?></option>
                        <?php endwhile; ?>

                      </select>
                      <div  class="invalid-feedback">
                          กรุณาเลือกประเด็น
                        </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="project_roadmap" class="col-sm-3 col-form-label ">แผนงาน</label>
                    <div class="col-sm-9 was-validated">
                      <select class="form-select form-select-md mb-3 fs-6" id="project_roadmap" name="project_roadmap"  disabled required>
                        <option selected disabled value="">เลือก...</option>
                      </select>
                      <div  class="invalid-feedback">
                          กรุณาเลือกประเด็น
                        </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="project_main" class="col-sm-3 col-form-label ">โครงการหลัก (ตามแผน)</label>
                    <div class="col-sm-9 was-validated">
                      <select class="form-select form-select-md mb-3 fs-6" id="project_main" name="project_main" disabled required>
                        <option selected disabled value="">เลือก...</option>
                      </select>
                      <div  class="invalid-feedback">
                          กรุณาเลือกประเด็น
                        </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="project_sub" class="col-sm-3 col-form-label ">โครงการ/กิจกรรมย่อย (ตามแผน)</label>
                    <div class="col-sm-9 was-validated">
                      <select class="form-select form-select-md mb-3 fs-6" id="project_sub" name="project_sub"  disabled required>
                      <option selected disabled value="">เลือก...</option>
                      </select>
                      <div  class="invalid-feedback">
                          กรุณาเลือกประเด็น
                        </div>
                    </div>
                  </div>

              </div>
            </div>


            <div class="flex-md-row align-items-center justify-content-around part" id="p2">
              <div class="w-100 bd-highlight">

                <div class="row mb-3">
                  <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
                    <b><label>ภาพรวมการดำเนินงาน</label></b>
                  </div>
                </div>

                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-3 pt-0" for="operation_type">ลักษณะการดำเนินงาน</legend>
                  <div class="col-sm-9 d-flex">
                    <div class="form-check">
                      <input class="form-check-input input-font-size-lg" type="radio" id="gridRadios1" value="โครงการ" name="operation_type">
                      <label class="form-check-label" for="gridRadios1">
                        โครงการ
                      </label>
                    </div>
                    <div class="form-check" style="margin-left: 20px;">
                      <input class="form-check-input" type="radio" id="gridRadios2" value="การดำเนินงาน" name="operation_type">
                      <label class="form-check-label" for="gridRadios2">
                        การดำเนินงาน
                      </label>
                    </div>
                  </div>
                </fieldset>


                <div class="row mb-3 ">
                  <label for="project_code" class="col-sm-3 col-form-label">รหัสโครงงาน (ถ้ามี)</label>
                  <div class="col-sm-9">
                    <input class="form-control fs-6" id="project_code " name="project_code">
                  </div>
                </div>


                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-3 pt-0" for="use_budget">การใช้งบประมาณ</legend>
                  <div class="col-sm-9 d-flex">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="use_budget1" value="ใช้งบประมาณ" name="use_budget">
                      <label class="form-check-label" for="use_budget1">
                        ใช้งบประมาณ
                      </label>
                    </div>
                    <div class="form-check" style="margin-left: 10px;">
                      <input class="form-check-input" type="radio" id="use_budget2" value="ไม่ใช้งบประมาณ" name="use_budget">
                      <label class="form-check-label" for="use_budget2">
                        ไม่ใช้งบประมาณ
                      </label>
                    </div>
                  </div>


                </fieldset>
                <!-- <div class="row mb-3">
                  <label for="budget_year" class="col-sm-3 col-form-label">ปีงบประมาณที่ดำเนินโครงการ</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control fs-6" id="budget_year" name="budget_year" >
                  </div>
                </div> -->
                <div class="row mb-3">
                  <label for="budget_year" class="col-sm-3 col-form-label">ปีงบประมาณที่ดำเนินโครงการ</label>
                  <div class="col-sm-9 was-validated">
                    <select class="form-select form-select-md mb-3 fs-6" id="budget_year" name="budget_year" required >
                    <option selected disabled value="">เลือก...</option>
                      <option value="2560">2560</option>
                      <option value="2561">2561</option>
                      <option value="2562">2562</option>
                      <option value="2563">2563</option>
                      <option value="2564">2564</option>
                      <option value="2565">2565</option>
                      <option value="2566">2566</option>
                      <option value="2567">2567</option>
                      <option value="2568">2568</option>
                      <option value="2569">2569</option>
                      <option value="2570">2570</option>
                    </select>
                    <div class="invalid-feedback">กรุณาเลือกปีงบประมาณที่ดำเนินโครงการ</div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="institution" class="col-sm-3 col-form-label">หน่วยงานที่รับผิดชอบ</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control fs-6" id="institution" name="institution" >
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="province" class="col-sm-3 col-form-label">จังหวัดที่ดำเนินโครงการ</label>
                  <div class="col-sm-9 was-validated">
                    <select class="form-select form-select-md mb-3 fs-6" id="province" name="province" required>
                      <option selected disabled value="">เลือก...</option>
                      <option value="ขอนแก่น">ขอนแก่น</option>
                      <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                      <option value="มหาสารคาม">มหาสารคาม</option>
                      <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                    </select>
                    <div class="invalid-feedback">กรุณาเลือกจังหวัดที่ดำเนินโครงการ</div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="target_user" class="col-sm-3 col-form-label">กลุ่มเป้าหมายในการดำเนินงาน</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control fs-6" id="target_user" name="target_user" >
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
                    <b><label>รายละเอียดการดำเนินงาน</label></b>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="project_objective" class="col-sm-3 col-form-label">วัตถุประสงค์และรายละเอียดของโครงการ</label>
                  <div class="col-sm-9">
                    <textarea type="text" class="form-control fs-6" id="project_objective" name="project_objective" style="height: 300px"></textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="project_result" class="col-sm-3 col-form-label">ผลผลิต/ผลลัพธ์ ตามตัวชี้วัด</label>
                  <div class="col-sm-9">
                    <textarea type="text" class="form-control fs-6" id="project_result" name="project_result" style="height: 300px"></textarea></div>
                </div>
              </div>
            </div>


            <div class="flex-md-row align-items-center justify-content-around part" id="p3">
              <div class="w-100 bd-highlight">
                <div>
                  <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
                    <b><label>แหล่งงบประมาณตามแผน</label></b>
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
                      <input type="text" disabled class="form-control fs-6" id="budget_province_plan" name="budget_province_plan" value="0" >
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
                      <input type="text" disabled class="form-control fs-6" id="budget_department_plan" name="budget_department_plan" value="0">
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkbox1_3" onclick="enableInput('checkbox1_3','budget_local_plan')">
                        <label class="form-check-label" for="checkbox1_3">
                          งบประมาณขององค์กรปกครองส่วนท้องถิ่น
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text" input type="text" disabled class="form-control fs-6" id="budget_local_plan" name="budget_local_plan" value="0">
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
                      <input type="text" disabled class="form-control fs-6" id="budget_private_plan" name="budget_private_plan" value="0">
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                </div>

                <div>
                  <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
                    <b><label>งบประมาณที่ได้รับจัดสรร</label></b>
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
                      <input type="text" disabled class="form-control fs-6" id="budget_province_receive" name="budget_province_receive" value="0">
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
                      <input type="text" disabled class="form-control fs-6" id="budget_department_receive" name="budget_department_receive" value="0">
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
                      <input type="text" disabled class="form-control fs-6" id="budget_local_receive" name="budget_local_receive" value="0">
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
                      <input type="text" disabled class="form-control fs-6" id="budget_private_receive" name="budget_private_receive" value="0">
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                </div>


                <div>
                  <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
                    <b><label>งบประมาณตามที่ใช้จ่ายจริง</label></b>
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
                      <input type="text" disabled class="form-control fs-6" id="budget_province_use" name="budget_province_use" value="0">
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
                      <input type="text" disabled class="form-control fs-6" id="budget_department_use" name="budget_department_use" value="0">
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
                      <input type="text" disabled class="form-control fs-6" id="budget_local_use" name="budget_local_use" value="0">
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
                      <input type="text" disabled class="form-control fs-6" id="budget_private_use" name="budget_private_use" value="0">
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
                <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
                  <b><label>รายละเอียดอื่น ๆ เพิ่มเติม</label></b>
                </div><br>
                <div>
                  <label for="addition">ลิงค์หรือรายละเอียดอื่น ๆ <br>เพิ่มเติมที่น่าจะเป็นประโยชน์</label>
                  <textarea class="form-control fs-6" id="project_additional" style="height: 300px" name="project_additional"></textarea>
                </div><br>
                <div class="-flex p-2 bd-highlight" style="background-color: #bbc7cd;">
                  <b><label for="addition">ไฟล์แนบ (ถ้ามี)</label></b>
                </div><br>
                <div class="input-group mb-3">
                  <input type="file" class="form-control" id="upload_file" name="upload_file">
                  <label class="input-group-text" for="upload_file">Upload</label>
                </div>
              </div>
            </div>
          </div>



          <div class="d-md-flex flex-md-row align-items-center justify-content-end" style="margin-bottom: 100px; margin-right: 50px;">
            <button class="btn btn-secondary" type="submit" id="button0" name="draft" onclick="" style="margin-right: 10px; margin-bottom: 50px;">บันทึกร่างโครงการ</button>
            <div class="btn btn-primary" id="button1" onclick="previousPart()" style="margin-right: 10px; margin-bottom: 50px;">หน้าก่อนหน้า</div>
            <div class="btn btn-primary" id="button2" onclick="nextPart()" style="margin-right: 10px; margin-bottom: 50px;">หน้าถัดไป</div>
            <button class="btn btn-success" type="submit" id="button3" name="save" onclick="saveProject()" style="margin-right: 10px; margin-bottom: 50px;">บันทึกและยืนยันเพิ่มโครงการ</button>
          </div>
        </div>
        </form>
      </div>
    </div>

    <!-- --------------------------------------------------------------------------- -->
    <script src="../assets/jquery.min.js"></script>
    <script src="../assets/script.js"></script>
    <script src="../assets/numeric.js"></script>
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
          input.value = '0';
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
        scrollTo(0, 0);
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


   

</body>

</html>