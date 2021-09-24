<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<?php include_once ('link.php'); ?>
<?php include('db.php'); ?>


<div class="wrapper">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                
                
            <form  name="register" action="admin/add_member.php" method="POST" class="box">
    
            <div class="h5 font-weight-bold text-center mb-3" style="color : #ffffff99;">Registration</div>
            <div class="form-group"> <input type="text" name="mem_username" class="form-control" id="mem_username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" required> <label class="form-control-placeholder" required>ชื่อผู้ใช้</label> </div>
            <div class="form-group"> <input type="password" name="mem_password" class="form-control" id="mem_password" pattern="^[a-zA-Z0-9]+$" minlength="2" required> <label class="form-control-placeholder" required >รหัสผ่าน</label> </div>
            <div class="form-group"> <input type="text" name="mem_name" id="mem_name" class="form-control"  required> <label class="form-control-placeholder" >ชื่อ-นามสกุล</label> </div>
            <div class="form-group"> <input type="text" name="mem_address" id="mem_address" class="form-control"  required> <label class="form-control-placeholder" >ที่อยู่</label> </div>
            <div class="form-group"> <input type="text" name="mem_tel" id="mem_tel" class="form-control" required> <label class="form-control-placeholder" >เบอร์โทร</label> </div>
        <div class="mb-2"> <label class="option">ยืนยันการสมัคร <input type="checkbox"required> <span class="checkmark"></span> </label> </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
        <button class="style-3" type="submit"><span class="glyphicon glyphicon-ok"></span>สมัครสมาชิก</button>
        &nbsp;&nbsp;
        <a href="index.php"><button type="button" class="style-3" data-dismiss="modal">ยกเลิก</button></a>
        </form>
    </div>
</div>



<style>
button {
  font-weight: 600;
  border: solid 2px black;
  outline: 0;
  padding: 0.5rem 1rem;
  font-size: 1.5rem;
  letter-spacing: 0.08rem;
  background-color: white;
  border-radius: 0.35rem;
  position: relative;
  cursor: pointer;
}
button::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: pink;
  z-index: -1;
  border-radius: 0.35rem;
  border: solid 2px black;
  transition: all 0.3s ease-in-out;
}

button.style-3::after {
  border: 0;
  box-shadow: 0px 0px 0px 2px black;
  top: 0.5rem;
  left: 0.5rem;
}
button.style-3:hover::after {
  top: -0.5rem;
  left: -0.5rem;
  width: calc(100% + 0.5rem * 2);
  height: calc(100% + 0.5rem * 2);
}

    
    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(to right, #FFB6C1, #8470FF)
}

.card {
    margin-bottom: 20px;
    border: none
}

.box {
    width: 500px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    background: #19191927;
    ;
    
    transition: 0.25s;
    margin-top: 100px
}

.form-group {
    position: relative;
    margin-bottom: 1.5rem
}

.form-control-placeholder {
    position: absolute;
    top: 0;
    padding: 7px 0 0 10px;
    transition: all 200ms;
    opacity: 0.5;
    color: #fff
}

.form-control:focus+.form-control-placeholder,
.form-control:valid+.form-control-placeholder {
    font-size: 69%;
    transform: translate3d(0, -100%, 0);
    opacity: 1;
    top: 10px
}

.form-control {
    border: 0;
    outline: 0;
    border-bottom: 2px solid #eee;
    font-size: 16px;
    color: #ccc;
    background-color: transparent
}

.form-control:focus {
    border: 0;
    color: #fff;
    background-color: transparent;
    border-color: #fff;
    outline: 0;
    border-bottom: 2px solid #fff;
    box-shadow: 0 0 0 0.2rem transparent
}

</style>