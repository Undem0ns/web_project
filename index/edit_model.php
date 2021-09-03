<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>แก้ไขโครงการ</title>

</head>
<?php include "../connect.php" ?>
<?php
include('../connect_2.php');
$sql = "SELECT * FROM development_subject";
$query = mysqli_query($conn, $sql);
?>
<?php

session_start();
if (!isset($_SESSION["user_email"])) {
  header("location:../login/index.php");
}


$stmt = $pdo->prepare("SELECT * FROM project_draft WHERE project_id = ?");
$stmt->bindParam(1, $_GET["project_id"]);
$stmt->execute();
$row = $stmt->fetch();




?>



<body>
<nav class="navbar navbar-expand-lg navbar-light t sticky-top" style="background-color:#a6a6a6;">
    <div class="container-fluid">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php" style="font-size:25px; color:black">PCP-MS</a>
        </li>
      </ul>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class=nav-link active aria-current="page" style="color:#212121"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg> <?php
                    echo $_COOKIE["user_name"]; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../login/index.php" style="color:#212121">ออกจากระบบ</a>
        </li>
      </ul>
    </div>
  </nav>


        
  <div class="container-fluid">
    <div class="row">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #0070c0;">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <a href="add_project.php" class="nav-link align-middle px-0 text-white">
                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">เพิ่มโครงการ</span>
              </a>
            </li>
            <li>
              <a href="dashboard.php" class="nav-link px-0 align-middle text-white">
                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">รายชื่อโครงการ</span></a>
            </li>

            <li>
              <a href="model.php" class="nav-link px-0 align-middle text-white">
                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline ">ร่างโครงการ</span> </a>
            </li>
          </ul>
          <hr>
        </div>
      </div>
      <div class="col py-3 ">
        <div class="bd-intro ps-lg-4">
          <div id="main" class="bd-main order-1">
            <h2 class="bd-title" id="content" style="font-weight: bold; color:red">แก้ไขแบบร่างโครงการ</h2> <br>
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
                  <h5 class="card-title"><input type="hidden" name="project_id" value="<?= $row["project_id"] ?>"></h5>
                  <div class="mb-3 was-validated">
                    <label for="project_name" class=" col-form-label " style="font-weight: bold;font-size:25px;">ชื่อโครงการ/ชื่อกิจกรรม/ชื่อการดำเนินงาน</label>
                    <textarea class="form-control fs-5" name="project_name" id="project_name" style="height: 100px" required><?= $row["project_name"] ?></textarea>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                          กรุณากรอกชื่อโครงการ
                        </div>
                  </div>

                  <div class="row mb-3">
                    <div class="-flex p-2 bd-highlight" style="background-color: gray;">
                      <label>เลือกความเชื่อมโยงของโครงการกับแผนกลุ่มจังหวัด
                      </label>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="development_subject" class="col col-form-label ">ประเด็นการพัฒนา</label>
                    <div class="col-sm-10">
                      <select class="form-select form-select-md mb-3 fs-5" id="development_subject" name="development_subject" >
                        <option selected class="text-muted " value="<?= $row["development_subject"] ?>">เลือก...</option>


                        <?php while ($result = mysqli_fetch_assoc($query)) : ?>
                          <option value="<?= $result['development_id'] ?>"><?= $result['development_name'] ?></option>
                        <?php endwhile; ?>

                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="project_roadmap" class="col-sm-2 col-form-label ">แผนงาน</label>
                    <div class="col-sm-10">
                      <select disabled class="form-select form-select-md mb-3 fs-5" id="project_roadmap" name="project_roadmap" >
                        <option selected value="<?= $row["project_roadmap"] ?>">เลือก...</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="project_main" class="col-sm-2 col-form-label ">โครงการหลัก (ตามแผน)</label>
                    <div class="col-sm-10">
                      <select  disabled class="form-select form-select-md mb-3 fs-5" id="project_main" name="project_main" >
                        <option selected value="<?= $row["project_main"] ?>">เลือก...</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="project_sub" class="col-sm-2 col-form-label ">โครงการ/กิจกรรมย่อย (ตามแผน)</label>
                    <div class="col-sm-10">
                      <select disabled class="form-select form-select-md mb-3 fs-5" id="project_sub" name="project_sub" >
                        <option selected value="<?= $row["project_sub"] ?>">เลือก...</option>
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
                  <div class="col-sm-10 d-flex">
                    <div class="form-check">
                      <input class="form-check-input input-font-size-lg" type="radio" id="gridRadios1" value="โครงการ" name="operation_type" >
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


                <div class="row mb-3">
                  <label for="project_code" class="col-sm-2 col-form-label">รหัสโครงงาน (ถ้ามี)</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control fs-5" id="project_code " name="project_code" value='<?= $row["project_code"] ?>'>
                  </div>
                </div>


                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0" for="use_budget">การใช้งบประมาณ</legend>
                  <div class="col-sm-10 d-flex">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" id="gridRadios1" value="ใช้งบประมาณ"  name="use_budget">
                      <label class="form-check-label" for="use_budget1">
                        ใช้งบประมาณ
                      </label>
                    </div>
                    <div class="form-check " style="margin-left: 10px;">
                      <input class="form-check-input" type="radio" id="gridRadios2" value="ไม่ใช้งบประมาณ" name="use_budget">
                      <label class="form-check-label" for="use_budget2">
                        ไม่ใช้งบประมาณ
                      </label>
                    </div>
                  </div>


                </fieldset>
                <div class="row mb-3">
                  <label for="budget_year" class="col-sm-2 col-form-label">ปีงบประมาณที่ดำเนินโครงการ</label>
                  <div class="col-sm-10">
                    <select class="form-select form-select-md mb-3 fs-5" id="budget_year" name="budget_year" >
                      <option selected disabled value="<?= $row["budget_year"] ?>"><?= $row["budget_year"] ?></option>
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
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="institution" class="col-sm-2 col-form-label">หน่วยงานที่รับผิดชอบ</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control fs-5" id="institution" name="institution"  value='<?= $row["institution"] ?>'>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="province" class="col-sm-2 col-form-label fs-5">จังหวัดที่ดำเนินโครงการ</label>
                  <div class="col-sm-10">
                    <select class="form-select form-select-md mb-3 fs-5" id="province" name="province" >
                      <option selected value="<?= $row["province"] ?>"><?= $row["province"] ?></option>
                      <option value="ขอนแก่น">ขอนแก่น</option>
                      <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                      <option value="มหาสารคาม">มหาสารคาม</option>
                      <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="target_user" class="col-sm-2 col-form-label">กลุ่มเป้าหมายในการดำเนินงาน</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control fs-5" id="target_user" name="target_user" value='<?= $row["target_user"] ?>'>
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
                    <textarea type="text" class="form-control fs-5" id="project_objective" name="project_objective" style="height: 300px" value='<?= $row["project_objective"] ?>'><?= $row["project_objective"] ?></textarea></div>
                </div>

                <div class="row mb-3">
                  <label for="project_result" class="col-sm-2 col-form-label">ผลผลิต/ผลลัพธ์ ตามตัวชี้วัด</label>
                  <div class="col-sm-10">
                    <textarea type="text" class="form-control fs-5" id="project_result" name="project_result" style="height: 300px" value='<?= $row["project_result"] ?>'><?= $row["project_result"] ?></textarea></div>
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
                        <label class="form-check-label" for="checkbox1_1">
                          งบประมาณของจังหวัด/กลุ่มจังหวัด
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"    class="form-control fs-5" id="budget_province_plan" name="budget_province_plan" value='<?= $row["budget_province_plan"] ?>'>
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label" for="checkbox1_2"> งบประมาณของกระทรวง/กรม </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"   class="form-control fs-5" id="budget_department_plan" name="budget_department_plan" value='<?= $row["budget_department_plan"] ?>'>
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label" for="checkbox1_3">
                          งบประมาณขององค์กรปกครองส่วนท้องถิ่น
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"   input type="text"  class="form-control fs-5" id="budget_local_plan" name="budget_local_plan" value='<?= $row["budget_local_plan"] ?>'>
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label" for="checkbox1_4">
                          งบประมาณของภาคเอกชน/ชุมชน
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"    class="form-control fs-5" id="budget_private_plan" name="budget_private_plan" value='<?= $row["budget_private_plan"] ?>'>
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
                        <label class="form-check-label" for="checkbox2_1">
                          งบประมาณของจังหวัด/กลุ่มจังหวัด
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"   class="form-control fs-5" id="budget_province_receive" name="budget_province_receive" value='<?= $row["budget_province_receive"] ?>'>
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label" for="checkbox2_2"> งบประมาณของกระทรวง/กรม </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"   class="form-control fs-5" id="budget_department_receive" name="budget_department_receive" value='<?= $row["budget_department_receive"] ?>'>
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label" for="checkbox2_3">
                          งบประมาณขององค์กรปกครองส่วนท้องถิ่น
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"   class="form-control fs-5" id="budget_local_receive" name="budget_local_receive" value='<?= $row["budget_local_receive"] ?>'>
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label" for="checkbox2_4">
                          งบประมาณของภาคเอกชน/ชุมชน
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"    class="form-control fs-5" id="budget_private_receive" name="budget_private_receive" value='<?= $row["budget_private_receive"] ?>'>
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
                        <label class="form-check-label" for="checkbox3_1">
                          งบประมาณของจังหวัด/กลุ่มจังหวัด
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"    class="form-control fs-5" id="budget_province_use" name="budget_province_use" value='<?= $row["budget_province_use"] ?>'>
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label" for="checkbox3_2"> งบประมาณของกระทรวง/กรม </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"   class="form-control fs-5" id="budget_department_use" name="budget_department_use" value='<?= $row["budget_department_use"] ?>'>
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label" for="checkbox3_3">
                          งบประมาณขององค์กรปกครองส่วนท้องถิ่น
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"  class="form-control fs-5" id="budget_local_use" name="budget_local_use" value='<?= $row["budget_local_use"] ?>'>
                    </div>
                    <div class="col-auto">
                      บาท
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <label class="form-check-label" for="checkbox3_4">
                          งบประมาณของภาคเอกชน/ชุมชน
                        </label>
                      </div>
                    </div>
                    <div class="col-auto">
                      จำนวน
                    </div>
                    <div class="col-sm-5">
                      <input type="text"  class="form-control fs-5" id="budget_private_use" name="budget_private_use" value='<?= $row["budget_private_use"] ?>'>
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
                  <textarea class="form-control fs-5" id="project_additional" style="height: 300px" name="project_additional"><?= $row["project_additional"] ?></textarea>
                </div><br>
                <div class="-flex p-2 bd-highlight" style="background-color: gray;">
                <label for="addition">เพิ่มไฟล์แนบใหม่</label>
        </div><br>
        <div>
          <label>ไฟล์เดิม </label>
          <div>
          <input type="text" class="form-control" name="old_file" value="<?= $row['file_path']?>" hidden>
          <a class="text-primary decoration-none" href="<?= $row['file_path']?>"><?= $row['file_path']?></a>
        </div>
        </div><br>
                <div class="input-group mb-3">
                  <input type="file" class="form-control" id="upload_file" name="upload_file">
                  <label class="input-group-text" for="upload_file">Upload</label>
                </div>

              </div>
            </div>



            <div class="d-md-flex flex-md-row align-items-center justify-content-end" style="margin-bottom: 100px; margin-right: 50px;">
              <div class="btn btn-primary" id="button1" onclick="previousPart()" style="margin-right: 10px;">หน้าก่อนหน้า</div>
              <div class="btn btn-primary" id="button2" onclick="nextPart()">หน้าถัดไป</div>
              <button class="btn btn-danger" name="save" type="submit" id="button3" onclick="saveProject()">บันทึกและยืนยันเพิ่มโครงการ</button>
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


        // function enableInput(checkbox_id, input_id) {
        //   var checkBox = document.getElementById(checkbox_id);
        //   var input = document.getElementById(input_id);
        //   if (checkBox.checked == true) {
        //     input.disabled = false;

        //   } else {
        //     input.disabled = true;

        //   }
        // }

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
            // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
      </script>
</body>

</html>