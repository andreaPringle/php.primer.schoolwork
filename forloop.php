<?php 
     $title = "For Loops";
    include 'includes/header.php' ?>
    <h1>For Loops</h1>
<!--  Andrea Pringle ID# 1917005528 -->
   <?php 
   for ($count = 0; $count < 32; $count++){
    echo "   Hello World   "; 
   }
   for($count = 0; $count < 50; $count++){
    echo "<p> The number is: $count <p/>";
}
   ?>
<?php require 'includes/footer.php' ?>