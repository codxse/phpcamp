<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 if (false) {

 } elseif (false) {

 } else {
	echo "I love PHP" . "<br />";
 }

 for($i=1; $i <= 10; $i++) {
	echo "No $i" . "<br />";
 }

 $car = "Honda";

 switch($car) {
	case "Toyota";
	break;
	case "Mitshubishi";
	break;
	case "Ferari";
	break;
	case "Honda";
	echo "Honda" . "<br />";
	break;
	default:
	echo "None" . "<br />";
 }

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>