<?php include_once ('link.php'); ?>
<?php include('db.php'); ?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&display=swap" rel="stylesheet"> 

<?php $query_shop = "SELECT * FROM tbl_shop

ORDER BY List_id ASC";

$result_shop =mysqli_query($con, $query_shop) or die ("Error in query: $query_shop " . mysqli_error());
?>

<body>
</br>
<div class="row">
<?php foreach ($result_shop as $row_pro) {?>
  

  
  <div class="col cm-6" style="text-align: center;">
  <div class="container">
  <div class="card" style="width: 18rem;">
     <div class="card-body">
     <img src="admin/img/<?php echo $row_pro ['list_img']?> " alt="" width="220px" height="175" >
      </br>
      </br>
       <a href="#"><button class="style-3"><?php echo number_format ($row_pro['list_price'], 2);?> บาท</button></a>
       
       </div>
   </div>
</div>
</div>
<?php } ?>
</div>
</body>

<style>

    .container {
  padding: 2px 80px;
  
}
    body { 
        background-color: #;
    }

    .card {
        background-color: #8470FF23;

    }
    .card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,1.0);
}
  
  
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

</style>
