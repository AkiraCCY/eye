<?php 
//print_r($_POST);
//exit();
session_start();
        if(isset($_POST['mem_username'])){
                  include("db.php");
                  $mem_username = $_POST['mem_username'];
                  $mem_password = $_POST['mem_password'];
                  $login = $_POST['login'];

                  $sql="SELECT * FROM tbl_member 
                  WHERE  mem_username='".$mem_username."' 
                  AND  mem_password='".$mem_password."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["mem_id"] = $row["mem_id"];
                      $_SESSION["mem_name"] = $row["mem_name"];
                    

                  if ( $_POST['login']!=''){
             
                    // Header("Location: index_login.php");
                    Header("Location: product_member.php?id=$login");
                      
                      }
                    elseif($_SESSION["mem_id"]!=''){ 
                   Header("Location: index2.php"); 

                        
                    }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index2.php"); //user & password incorrect back to login again
 
        }
?>