<?php include_once ('link.php'); ?>

<?php include('db.php');
session_start();
$mem_name =  $_SESSION["mem_name"];
?>

<script>
		$(function() {
			$(".preload").fadeOut(1000, 
		function() {
			$(".content").fadeIn(200);
		});
		});
</script>

<?php include_once ('nav.php'); ?>
<?php include_once ('product.php'); ?>

