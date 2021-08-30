<?php include "../connect.php" ?>

<!-- <script>
    Swal.fire('run');
</script> -->


<?php
echo "<script>";
echo  " Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'แก้ไขสำเร็จ',
    showConfirmButton: false,
    timer: 1500,
  })";
echo "</script>";
header("refresh: 1;url=index.php");
?>