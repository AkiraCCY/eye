<?php
include('../db.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $mem_username = $_REQUEST["mem_username"];
  $mem_password = $_REQUEST["mem_password"];
  $mem_name = $_REQUEST["mem_name"];
  $mem_address = $_REQUEST["mem_address"];
  $mem_tel = $_REQUEST["mem_tel"];
  
  //เพิ่มเข้าไปในฐานข้อมูล

  $check = "SELECT * FROM tbl_member 
where mem_username = '$mem_username' ";
$result1 = mysqli_query($con,$check) or die(mysql_error());
$num=mysqli_num_rows($result1); 
    if($num > 0)   		
    {
//ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
         echo "<script>";
   echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
   echo "window.location='../register.php';";
         echo "</script>";

}else{
  $sql = "INSERT INTO tbl_member(mem_username, mem_password, mem_name, mem_address, mem_tel)
  VALUES('$mem_username', '$mem_password', '$mem_name', '$mem_address', '$mem_tel')";
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
  
  //ปิดการเชื่อมต่อ database
  mysqli_close($con);
  //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Register Succesfuly');";
  echo "window.location = '../index2.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}}
?>