<?php include_once ('link.php'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="app-navbar">
    <div class="container-fluid"><a class="navbar-brand" href="#" style="font-weight: bold;">Eyelash'Se</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
                
            <ul class="nav navbar-nav text-right text-white ml-auto">
            <div class="btn-group" role="group" aria-label="Basic example">
            <a href="index2.php"class="btn" style=" background-color :#ffffff50; font-weight: bold;">ลายเล็บ</button></a>
            <a href="#" class="btn " style="background-color :#ffffff50; font-weight: bold;">จองคิวทำเล็บ</button></a>
            <a href="#" class="btn " style=" background-color :#ffffff50; font-weight: bold;" >ชำระเงิน</button></a>
            </div>
            </ul>
            <ul class="ml-auto"></ul>
            
            <button class="btn  dropdown-toggle" style="background-color :#ffffff50; font-weight: bold;"
            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <a class="nav-link dropdown-toggle btn btn-inverse-primary ti-user" id="navbarDropdown" role="button" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: bold;">
            <?php echo $mem_name ?>
           </a>   
           <div class="dropdown-menu dropdown-menu-right">
             <a class="dropdown-item btn btn-inverse-primary" style="background-color :#ffffff50; font-weight: bold;" href="#">แก้ไขข้อมูลส่วนตัว</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item btn btn-inverse-primary" style="background-color :#ffffff50; font-weight: bold;"  href="logout.php">ออกจากระบบ</a>
           </div>
           </button>

        </div>
    </div>
</nav>

<style>
    #app-navbar {
    background: linear-gradient(120deg, #FFB6C1, #8470FF)
    }
    

</style>