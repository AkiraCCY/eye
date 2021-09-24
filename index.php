<?php include_once ('link.php'); ?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&display=swap" rel="stylesheet"> 


<body>
</br></br>
<a href="login.php" style=" text-align: right;" ><button class="style-3">เข้าสู่ระบบ</button></a>

</br></br></br></br></br></br>
<img src="admin/img/logo.jpg" class="myimg" alt="Center" />

    
</body>

<style>
    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(to right, #FFB6C1, #8470FF)
}

.myimg{
  width:600px;
  height:600px;
  margin-left: 33%;
  margin-right: Auto;
  object-fit:cover;
  border-radius:50%;
  border: 5px solid pink;
}

button {
  margin-left: 84%;
  margin-right: Auto;
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
</style>