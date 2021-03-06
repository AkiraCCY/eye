<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<?php include_once ('link.php'); ?>
<?php include('db.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
            <form  action="checklogin.php" method="post" class="box">
                
                <div class="h5 font-weight-bold text-center mb-3" style="color : #ffffff99;">Login</div>
                <div class="form-group">
                  <input type="text" class="form-control" id="mem_username" name="mem_username" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control"  id="mem_password" name="mem_password" placeholder="Password" required >
                </div>
            </br>
                               
            <a href="#"><button class="style-3" type="submit">เข้าสู่ระบบ</button></a> &nbsp;&nbsp;
             
            <a href="register.php"><button type="button" class="style-3" >สมัครสมาชิก</button></a>
             
                </form>
            </div>
        </div>
    </div>
</div>

<style>

button {
  font-weight: 600;
  border: solid 2px black;
  outline: 0;
  padding: 0.5rem 2rem;
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
    width: 600px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    background: #19191927;
    ;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px
}

.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #8470FF;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="text"]:focus,
.box input[type="password"]:focus {
    width: 300px;
    border-color: #2ecc71
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #2ecc71
}

.forgot {
    text-decoration: underline
}

ul.social-network {
    list-style: none;
    display: inline;
    margin-left: 0 !important;
    padding: 0
}

ul.social-network li {
    display: inline;
    margin: 0 5px
}

.social-network a.icoFacebook:hover {
    background-color: #3B5998
}

.social-network a.icoTwitter:hover {
    background-color: #33ccff
}

.social-network a.icoGoogle:hover {
    background-color: #BD3518
}

.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i {
    color: #fff
}

a.socialIcon:hover,
.socialHoverClass {
    color: #44BCDD
}

.social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    border-radius: 50%;
    text-align: center;
    width: 50px;
    height: 50px;
    font-size: 20px
}

.social-circle li i {
    margin: 0;
    line-height: 50px;
    text-align: center
}

.social-circle li a:hover i,
.triggeredHover {
    transform: rotate(360deg);
    transition: all 0.2s
}

.social-circle i {
    color: #fff;
    transition: all 0.8s;
    transition: all 0.8s
}
</style>